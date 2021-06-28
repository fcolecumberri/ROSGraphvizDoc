<?php

include_once(dirname(__FILE__)."/InfoChannel.php");

class Service extends MultiLayerRenderable{
    use InfoChannel;
    const fillcolor = 'magenta4';
    public function __construct(
        public string $name,
        public string $pkg,
        public string $struct,
        public string $renamed_from = ''
    ){
        parent::__construct('service_'.$this->name,
            [$this->name, "$this->pkg::$this->struct"],
            [
                'shape' => 'Mrecord',
                'style' => 'filled',
                'color' => 'black',
                'fillcolor' => self::fillcolor,
            ]
        );
    }

    public function is_same($name, $pkg, $struct, $renamed_from = ''){
        return
            $this->name == $name and
            $this->struct == $struct and
            $this->pkg == $pkg;
    }

    public function params(){
        return "[name = '$name', struct = '$struct', renamed_from = '$this->renamed_from']";
    }
}
