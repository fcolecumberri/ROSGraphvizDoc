<?php

include_once(dirname(__FILE__)."/InfoChannel.php");
include_once(dirname(__FILE__)."/MultiLayerRenderable.php");

class Topic extends MultiLayerRenderable{
    use InfoChannel;
    public function __construct(
        public string $name,
        public string $pkg,
        public string $struct,
        public string $renamed_from = ''
    ){
        parent::__construct(
            "topic_".$this->name,
            [$this->name, "$this->pkg::$this->struct"],
            [
                'shape' => 'record',
                'style' => 'filled',
                'color' => 'black',
                'fillcolor' => 'magenta',
            ]
        );
    }

    public function is_same($name, $pkg, $struct, $renamed_from){
        return
            ($this->name == $name) and
            ($this->struct == $struct) and
            ($this->pkg == $pkg) and
            ($this->renamed_from == $renamed_from);
    }

    public function params(){
        return "[name = '$this->name', struct = '$this->struct', pkg = '$this->pkg', renamed_from = '$this->renamed_from']";
    }
}
