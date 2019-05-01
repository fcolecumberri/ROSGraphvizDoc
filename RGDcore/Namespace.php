<?php
	/**
	 * 
	 */
	class RosNameSpace
	{
		protected $var_name;
		protected $label;
		protected $elements = [];
		private $rendered;
		function __construct(string $_var_name, string $_name_space)
		{
			$this->rendered = false;
			$this->var_name = $_var_name;
			$this->label = $_name_space;
			if($this->label[-1] != "/")
			{
				$this->label .= "/";
			}
			array_push($GLOBALS["namespaces"], $this);
		}
		public function add($element)
		{
			if($element == $this)
			{
				fwrite(STDERR,
					"Error: you can not add a namespace inside itself".
					"\n"
				);
			}else if(
				($element instanceof Topic) ||
				($element instanceof Service) ||
				($element instanceof Node) ||
				($element instanceof RosNameSpace)
			)
			{
				$element->var_name = $this->var_name."_".$element->var_name;
				$element->label = $this->label.$element->label;
				$count = 1;
				while($count>0)
				{
					$element->label = str_replace("//", "/", $element->label, $count);
				}
				array_push($this->elements, $element);
				if($element instanceof RosNameSpace)
				{
					$GLOBALS["namespaces"] = array_filter($GLOBALS["namespaces"], function ($v) use ($element){ return $v != $element; });
				}
			}else
			{
				fwrite(STDERR,
					"Error: you can only add".
					"Topic ".
					"Service ".
					"Node ".
					"or ".
					"namespaces ".
					"to a namespace".
					"\n"
				);
			}
			return $this;
		}
		public function render()
		{
			if(!$this->rendered)
			{
				echo "subgraph cluster_".$this->var_name."{\n";
				echo "label = \"".$this->label."\";\n";
				foreach ($this->elements as $element) {
					if(!isset($element->progres_state))
					{
						$element->render();
					}else if($element->progres_state != ProgresState::not_used || $GLOBALS["display_non_used"])
					{
						$element->render();
					}
				}
				echo "}\n";
				$this->rendered = true;
				return true;
			}
			return false;
		}
	}
?>
