<?php

include_once(dirname(__FILE__)."/InfoChannel.php");

class Service extends MultiLayerRenderable{
    use InfoChannel;
    public function __construct(
        public string $name,
        public string $pkg,
        public string $struct,
        public string $renamed_from = ''
    ){
        parrent::__construct('service_'.$this->name,
            [$this->name, "$this->pkg::$this->struct"],
            [
                'shape' => 'Mrecord',
                'style' => 'filled',
                'color' => 'black',
                'fillcolor' => 'magenta',
            ]
        );
    }

    public function is_same($name, $pkg, $struct, $renamed_from){
        return
            $this->name == $name and
            $this->struct == $struct and
            $this->pkg == $pkg and
            ($this->renamed_from == $renamed_from);
    }

    public function params(){
        return "[name = '$name', struct = '$struct', renamed_from = '$this->renamed_from']";
    }
}
