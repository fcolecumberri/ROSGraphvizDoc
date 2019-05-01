<?php
	/**
	 * 
	 */
	class Service extends MultiLayerRenderable
	{
		public $progres_state;
		function __construct(string $var_name, string $service_full_name, string $service_srv, $_progres_state = ProgresState::to_do)
		{
			parent::__construct($var_name, $service_full_name, [$service_srv]);
			$progres_state = $_progres_state;
			$this->extra_configs["shape"]="Mrecord";
			$this->extra_configs["style"]="filled";
			$this->extra_configs["color"]="black";
			$this->extra_configs["fillcolor"]=state_to_color($_progres_state);
		}
	}
	
?>
