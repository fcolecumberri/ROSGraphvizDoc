<?php

include_once(dirname(__FILE__)."/Node.php");
include_once(dirname(__FILE__)."/Topic.php");
include_once(dirname(__FILE__)."/Service.php");
include_once(dirname(__FILE__)."/External.php");

class RGD{
    static public $nodes = [];
    static public $topics = [];
    static public $services = [];
    static public $external = [];
    static public bool $use_labels = False;
    static public bool $render_leaves = False;
    static public ?int $dpi = Null;
    static public ?string $title = Null;
    static public ?string $title_poss = Null;

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

    static public function PNG($out_filename){
        $dot = self::render();
        //
    }

    static public function render(){
        $body = '';
        $dpi = $GLOBALS["dpi"] ?? 96;
        $labels = $this->use_labels ? $this->render_labels() : '';
        $title =
            isset($this->title) ?
            (
                "label=\"".
                $this->title.
                "\" labelloc=\"".
                ($this->title_pos ?? 't').
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
        return self::channel(self::$topics, Service::class, ...$params);
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
        return <<<FILE
subgraph cluster_labels_of_system
{
    subgraph cluster_label_of_colors
    {
        cluster_label_of_colors_to_do [style="filled",shape="ellipse",color="black",fillcolor="white",label="To do"];
        cluster_label_of_colors_doing [style="filled",shape="ellipse",color="black",fillcolor="yellow",label="Doing"];
        cluster_label_of_colors_testing [style="filled",shape="ellipse",color="black",fillcolor="cyan",label="Testing"];
        cluster_label_of_colors_done [style="filled",shape="ellipse",color="black",fillcolor="green",label="Done"];
        cluster_label_of_colors_known_bugs [style="filled",shape="ellipse",color="black",fillcolor="red",label="Known bugs"];
        cluster_label_of_colors_not_used [style="filled",shape="ellipse",color="black",fillcolor="gray60",label="Not used"];
    }
    subgraph cluster_label_of_elements
    {
        cluster_label_of_elements_node [style="filled",shape="ellipse",color="black",fillcolor="white",label="Node"];
        cluster_label_of_elements_service [shape="Mrecord",style="filled",color="black",fillcolor="white",label="{Service | Service's srv}"];
        cluster_label_of_elements_topic [shape="record",style="filled",color="black",fillcolor="white",label="{Topic | Topic's msg}"];
        cluster_label_of_elements_extern [shape="polygon",sides="5",style="filled",color="black",fillcolor="magenta",label="External element"];
        cluster_label_of_colors_to_do ->cluster_label_of_colors_doing [style="invis"];
        cluster_label_of_colors_doing ->cluster_label_of_colors_testing [style="invis"];
        cluster_label_of_colors_testing ->cluster_label_of_colors_done [style="invis"];
        cluster_label_of_colors_done ->cluster_label_of_colors_known_bugs [style="invis"];
        cluster_label_of_colors_known_bugs ->cluster_label_of_colors_not_used [style="invis"];
        cluster_label_of_colors_not_used ->cluster_label_of_elements_node [style="invis"];
        cluster_label_of_elements_node ->cluster_label_of_elements_service [style="invis"];
        cluster_label_of_elements_service ->cluster_label_of_elements_topic [style="invis"];
        cluster_label_of_elements_topic -> cluster_label_of_elements_extern [style="invis"];
    }
}
FILE;
    }
}
