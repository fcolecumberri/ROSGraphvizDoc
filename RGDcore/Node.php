<?php

include_once(dirname(__FILE__)."/Renderable.php");
include_once(dirname(__FILE__)."/ProgresState.php");
include_once(dirname(__FILE__)."/RGD.php");

class Node extends Renderable{
    private $connections = [];
    public function __construct(
        string $pkg,
        public string $name,
        $url = Null,
        public string $progres_state = ProgresState::to_do
    ){
        parent::__construct(
            "node_".$name,
            "$pkg::$name".
            ($url ? "\n$url" : ''),
            [
                'style' => 'filled',
                'shape' => 'ellipse',
                'color' => 'black',
                'fillcolor' => state_to_color($this->progres_state),
            ]
        );
    }

    public function render(){
        $r = parent::render();
        foreach ($this->connections as $conection_name => &$conection_value) {
            if(!$conection_value['node']->is_leaf()) {
                $r .= $conection_value['node']->render();
                if($conection_value['type'] == 'advertise_service') {
                    $r .= $conection_value['node']->var_name." -> ".$this->var_name;
                    $r .= ' ['.$this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                        "dir"=>"both",
                    ]).']';
                } elseif($conection_value['type'] == 'consume_service') {
                    $r .= $conection_value['node']->var_name." -> ".$this->var_name;
                    $r .= ' ['.$this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                        "dir"=>"none",
                        "style"=>"dotted",
                    ]);']';
                } elseif($conection_value['type'] == 'publish_topic') {
                    $r .= $this->var_name." -> ".$conection_value['node']->var_name;
                    $this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                    ]);
                } elseif($conection_value['type'] == 'subscribe_topic') {
                    $r .= $conection_value['node']->var_name." -> ".$this->var_name;
                    $this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                    ]);
                }
                $r .= ";\n";
            }
        }
        return $r;
    }

    private function connect(Service|Topic &$conection, $type){
        $this->connections[$conection->name] = [
            'type' => $type,
            'node' => $conection,
        ];
        return $this;
    }

    public function advertise_service(...$params){
        $this->connect(RGD::service(...$params), 'advertise_service');
        $service->have_pubs = true;
        return $this;
    }

    public function consume_service(...$params){
        $this->connect(RGD::service(...$params), 'consume_service');
        $service->have_subs = true;
        return $this;
    }

    public function publish_topic(...$params){
        $this->connect(RGD::topic(...$params), 'publish_topic');
        $topic->have_pubs = true;
        return $this;
    }

    public function subscribe_topic(...$params){
        $this->connect(RGD::topic(...$params), 'subscribe_topic');
        $topic->have_subs = true;
        return $this;
    }

    public function advertise_action(...$params){
        $topics = RGD::action(...$params);
        $this->publish_topic($topics['result']);
        $this->publish_topic($topics['status']);
        $this->publish_topic($topics['feedback']);
        $this->subscribe_topic($topics['goal']);
        $this->subscribe_topic($topics['cancel']);
        return $this;
    }

    public function consume_action(...$params){
        $topics = RGD::action(...$params);
        $this->subscribe_topic($topics['result']);
        $this->subscribe_topic($topics['status']);
        $this->subscribe_topic($topics['feedback']);
        $this->publish_topic($topics['goal']);
        $this->publish_topic($topics['cancel']);
        return $this;
    }
}
