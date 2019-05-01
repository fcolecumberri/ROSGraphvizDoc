<?php
	/**
	 * 
	 */
	class MultiLayerRenderable extends Renderable
	{
		protected $multylayer_labels;
		function __construct(string $_var_name, string $_label, array $_multylayer_labels = [])
		{
			$this->var_name = $_var_name;
			$this->label = $_label;
			$this->multylayer_labels = $_multylayer_labels;
		}
		public function render()
		{
			if(!$this->rendered)
			{
				$this->label = "{".$this->label;
				foreach ($this->multylayer_labels as $multylayer_label) {
					$this->label .= " | ".$multylayer_label;
				}
				$this->label .= "}";
				return Renderable::render();
			}
			return false;
		}
	}
?>
