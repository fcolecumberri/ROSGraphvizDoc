<?php
	/**
	 * 
	 */
	class External extends Renderable
	{
		
		function __construct($var_name, $extern_elemnt_full_name)
		{
			parent::__construct($var_name, $extern_elemnt_full_name);
			$this->extra_configs["shape"]="polygon";
			$this->extra_configs["sides"]="5";
			$this->extra_configs["style"]="filled";
			$this->extra_configs["color"]="black";
			$this->extra_configs["fillcolor"]="magenta";
		}
	}
?>
