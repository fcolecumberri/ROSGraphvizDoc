<?php

include_once(dirname(__FILE__)."/InfoChannel.php");
include_once(dirname(__FILE__)."/MultiLayerRenderable.php");

class External extends Renderable{
    use InfoChannel;
    public function __construct(
        public string $name
    ){
        parent::__construct(
            "extern_".$this->name,
            $this->name,
            [
                'shape' => 'polygon',
                'sides' => '5',
                'style' => 'filled',
                'color' => 'black',
                'fillcolor' => 'magenta',
            ]
        );
    }

    public function is_leaf(){
        return False;
    }

    public function is_same($name, ){
        return $this->name == $name;
    }

    public function params(){
        return "[name = '$this->name']";
    }
}
