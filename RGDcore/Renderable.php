<?php 
	/**
	 * 
	 */
	class Renderable
	{
		public $var_name;
		public $label;
		protected $extra_configs = [];
		protected $rendered;
		function __construct(string $_var_name, string $_label)
		{
			$this->var_name = $_var_name;
			$this->label = $_label;
			$this->rendered = false;
		}
		public function render()
		{
			if(!$this->rendered)
			{
				echo "$this->var_name [";
				foreach ($this->extra_configs as $extra_config_key => $extra_config_value) {
					echo "$extra_config_key=\"$extra_config_value\",";
				}
				echo "label=\"$this->label\"];\n";
				$this->rendered = true;
				return true;
			}
			return false;
		}
	}

?>
