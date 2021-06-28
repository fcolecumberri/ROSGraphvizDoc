<?php

include_once(dirname(__FILE__)."/Renderable.php");
include_once(dirname(__FILE__)."/ProgresState.php");
include_once(dirname(__FILE__)."/RGD.php");

/*
__construct(
    $pkg,
    $name,
    $url = Null,
    $progres_state = ProgresState::to_do
)
advertise_service()
consume_service()
publish_topic()
subscribe_topic()
advertise_action()
consume_action()
send_to_external()
recieve_from_external()
 */

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
            if(!$conection_value['node']->is_leaf() or RGD::$render_leaves) {
                $r .= $conection_value['node']->render();
                if($conection_value['type'] == 'consume_service') {
                    $r .= $conection_value['node']->var_name." -> ".$this->var_name;
                    $r .= ' ['.$this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                        "dir"=>"both",
                    ]).']';
                } elseif($conection_value['type'] == 'advertise_service') {
                    $r .= $conection_value['node']->var_name." -> ".$this->var_name;
                    $r .= ' ['.$this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                        "dir"=>"none",
                        "style"=>"dotted",
                        ])
                        .']';
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
                }elseif($conection_value['type'] == 'send_external') {
                    $r .= $this->var_name." -> ".$conection_value['node']->var_name;
                    $this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                        "dir"=>"both",
                    ]);
                }elseif($conection_value['type'] == 'recieve_external') {
                    $r .= $conection_value['node']->var_name." -> ".$this->var_name;
                    $this->render_options([
                        'label' => $conection_value['node']->connection_label(),
                        "dir"=>"both",
                    ]);
                }
                $r .= ";\n";
            }
        }
        return $r;
    }

    private function connect(Service|Topic|External|NULL &$conection, $type){
        if($conection == NULL) return $this;
        $this->connections[$conection->name.'_'.$type] = [
            'type' => $type,
            'node' => $conection,
        ];
        $set_flag = match($type){
            'advertise_service', 'publish_topic' => 'have_pubs',
            'consume_service', 'subscribe_topic' => 'have_subs',
            default => null,
        };
        if($set_flag) $conection->{$set_flag} = true;
        return $this;
    }

    public function advertise_service(...$params){
        $this->connect(RGD::service(...$params), 'advertise_service');
        return $this;
    }

    public function consume_service(...$params){
        $this->connect(RGD::service(...$params), 'consume_service');
        return $this;
    }

    public function publish_topic(...$params){
        $this->connect(RGD::topic(...$params), 'publish_topic');
        return $this;
    }

    public function subscribe_topic(...$params){
        $this->connect(RGD::topic(...$params), 'subscribe_topic');
        return $this;
    }

    public function advertise_action(...$params){
        $topics = RGD::action(...$params);
        $this->connect($topics['result'], 'publish_topic');
        $this->connect($topics['status'], 'publish_topic');
        $this->connect($topics['feedback'], 'publish_topic');
        $this->connect($topics['goal'], 'subscribe_topic');
        $this->connect($topics['cancel'], 'subscribe_topic');
        return $this;
    }

    public function consume_action(...$params){
        $topics = RGD::action(...$params);
        $this->connect($topics['result'], 'subscribe_topic');
        $this->connect($topics['status'], 'subscribe_topic');
        $this->connect($topics['feedback'], 'subscribe_topic');
        $this->connect($topics['goal'], 'publish_topic');
        $this->connect($topics['cancel'], 'publish_topic');
        return $this;
    }

    public function send_to_external(...$params){
        $this->connect(RGD::External(...$params), 'send_external');
        return $this;
    }

    public function recieve_from_external(...$params){
        $this->connect(RGD::External(...$params), 'recieve_external');
        return $this;
    }
}
