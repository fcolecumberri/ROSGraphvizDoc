<?php

include_once(dirname(__FILE__)."/Node.php");
include_once(dirname(__FILE__)."/Topic.php");
include_once(dirname(__FILE__)."/Service.php");
include_once(dirname(__FILE__)."/External.php");

class RGD{
    // Public Flags
    static public bool $use_labels = False;
    static public bool $render_leaves = False;
    static public int $dpi = 96;
    static public ?string $title = Null;
    static public string $title_pos = 't';

    //
    static private $nodes = [];
    static private $topics = [];
    static private $services = [];
    static private $external = [];

    static public function &node(...$params){
        $node = new Node(...$params);
        $name = $node->name;
        if(array_key_exists($name, self::$nodes)) {
            echo "Error: $name node already exists\n";
            exit(1);
        }
        self::$nodes[$name] = new Node(...$params);
        return self::$nodes[$name];
    }

    static public function &get_node($name){
        return self::$nodes[$name];
    }

    static public function PNG($out_filename){
        $dot_data = self::render();
        $dot = proc_open(
            "dot -Tpng",
            [
                0 => array("pipe", "r"),
                1 => array("pipe", "w"),
            ],
            $pipes
        );
        fwrite($pipes[0], $dot_data);
        fclose($pipes[0]);
        $dot_output = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        proc_close($dot);
        file_put_contents($out_filename, $dot_output);
    }

    static public function render(){
        $body = '';
        $dpi = self::$dpi;
        $labels = self::$use_labels ? self::render_labels() : '';
        $title =
            !is_null(self::$title) ?
            (
                "label=\"".
                self::$title.
                "\" labelloc=\"".
                (self::$title_pos ?? 't').
                "\"\n"
            ) :
            '';
        foreach (self::$nodes as $node_name => &$nodes_value) {
            $body .= $nodes_value->render();
        }
        $file = <<<FILE
digraph G {
graph [dpi=$dpi, newrank=true, rankdir="TB"];
graphranksep=0.5;
$title
$labels
$body
}

FILE;
        return $file;
    }

    static public function import($file){
        return include_once(dirname(__FILE__).'/../'.$file);
    }

    static private function &channel(&$array, $class, ...$params){
        $instance = new $class(...$params);
        $name = $instance->name;
        if(empty($name)) return NULL;
        if(!array_key_exists($name, $array)) {
            $array[$name] = $instance;
            return $array[$name];
        }
        if($array[$name]->is_same(...$params)) {
            return $array[$name];
        }
        echo
            "Error: $class with name '$name' already exists but inited with different parameters\n".
            "First inited as ".self::$topics[$name]->params()."\n".
            "Then  inited as ".$instance->params()."\n";
        exit(1);
    }

    static public function &topic(...$params) {
        return self::channel(self::$topics, Topic::class, ...$params);
    }

    static public function &service(...$params) {
        return self::channel(self::$services, Service::class, ...$params);
    }

    static public function &external(...$params) {
        return self::channel(self::$external, External::class, ...$params);
    }

    static public function action($name, $pkg, $struct){
        return [
            'result'   => self::topic($name."/result"  , $pkg, "$name/$struct"."ActionResult"),
            'goal'     => self::topic($name."/goal"    , $pkg, "$name/$struct"."ActionGoal"),
            'cancel'   => self::topic($name."/cancel"  , $pkg, "actionlib_msgs/GoalID"),
            'status'   => self::topic($name."/status"  , $pkg, "actionlib_msgs/GoalStatusArray"),
            'feedback' => self::topic($name."/feedback", $pkg, "$name/$struct"."ActionFeedback"),
        ];
    }

    static public function render_labels(){
        $color_labels = '';
        $color_nodes = [];
        $label_connections = '';
        foreach (ProgresState::all_states as $state) {
            $name = "cluster_label_of_colors_".str_replace(' ', '_', state_to_label($state));
            $color_labels .=
                "$name ".
                "[style=\"filled\",shape=\"ellipse\",color=\"black\",".
                "fillcolor=\"".state_to_color($state)."\",".
                "label=\"".state_to_label($state)."\"];\n";
            array_push($color_nodes, $name);
        }
        for ($node_i=1; $node_i < count($color_nodes); $node_i++) {
            $label_connections.=
                $color_nodes[$node_i-1].' -> '.$color_nodes[$node_i].
                " [style=\"invis\"];\n";
        }
        $last_color_node = $color_nodes[count($color_nodes)-1];
        $service_color = Service::fillcolor;
        $topic_color = Topic::fillcolor;
        return <<<FILE
subgraph cluster_labels_of_system
{
    subgraph cluster_label_of_colors
    {
$color_labels
    }
    subgraph cluster_label_of_elements
    {
        cluster_label_of_elements_node [style="filled",shape="ellipse",color="black",fillcolor="white",label="Node"];
        cluster_label_of_elements_service [shape="Mrecord",style="filled",color="black",fillcolor="$service_color",label="{Service | Service's srv}"];
        cluster_label_of_elements_topic [shape="record",style="filled",color="black",fillcolor="$topic_color",label="{Topic | Topic's msg}"];
        cluster_label_of_elements_extern [shape="polygon",sides="5",style="filled",color="black",fillcolor="magenta",label="External element"];
$label_connections
        $last_color_node ->cluster_label_of_elements_node [style="invis"];
        cluster_label_of_elements_node ->cluster_label_of_elements_service [style="invis"];
        cluster_label_of_elements_service ->cluster_label_of_elements_topic [style="invis"];
        cluster_label_of_elements_topic -> cluster_label_of_elements_extern [style="invis"];
    }
}
FILE;
    }
}
