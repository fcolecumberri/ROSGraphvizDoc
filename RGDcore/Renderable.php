<?php
/**
 *
 */
class Renderable
{
    protected $rendered = false;
    public string $var_name;
    function __construct(
        string $var_name,
        string $label,
        protected $extra_configs = [])
    {
        $this->var_name = str_replace('/', '_', $var_name);
        $this->extra_configs['label'] = $label;
    }
    public function render()
    {
        if($this->rendered) return '';
        $this->rendered = true;
        return
            "$this->var_name [".
            $this->render_options($this->extra_configs).
            "];\n";
    }
    public function render_options($options){
        $r_array = [];
        foreach ($options as $options_key => $options_value) {
            array_push($r_array, "$options_key=\"$options_value\"");
        }
        return implode(',', $r_array);
    }
}
