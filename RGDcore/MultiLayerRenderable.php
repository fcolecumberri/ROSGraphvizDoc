<?php
    /**
     *
     */
    class MultiLayerRenderable extends Renderable
    {
        function __construct(string $var_name, string|array $label, $extra_configs = [])
        {
            parent::__construct($var_name, $this->label2string($label), $extra_configs);
        }
        private function label2string(array|string $label){
            if(is_string($label)){
                return $label;
            }
            $r_array = [];
            foreach ($label as $label_value) {
                array_push($r_array, $this->label2string($label_value));
            }
            return "{".implode('|', $r_array)."}";
        }
    }
?>
