<?php
	/**
	 * 
	 */
	class Topic extends MultiLayerRenderable
	{
		public $progres_state;
		function __construct(string $var_name, string $topic_full_name, string $topic_msg, $_progres_state = ProgresState::to_do)
		{
			parent::__construct($var_name, $topic_full_name, [$topic_msg]);
			$this->progres_state = $_progres_state;
			$this->extra_configs["shape"]="record";
			$this->extra_configs["style"]="filled";
			$this->extra_configs["color"]="black";
			$this->extra_configs["fillcolor"]=state_to_color($_progres_state);
		}
	}
?>
