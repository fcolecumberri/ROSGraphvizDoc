<?php
	/**
	 * 
	 */
	class Node extends Renderable
	{
		private $topic_subs = [];
		private $topic_pubs = [];
		private $service_subs = [];
		private $service_pubs = [];
		// private $action_subs = [];
		// private $action_pubs = [];
		private $extern_subs = [];
		private $extern_pubs = [];
		function __construct($var_name, $node_full_name, $_progres_state = ProgresState::to_do)
		{
			parent::__construct($var_name, $node_full_name);
			$this->extra_configs["style"]="filled";
			$this->extra_configs["shape"]="ellipse";
			$this->extra_configs["color"]="black";
			$this->extra_configs["fillcolor"]=state_to_color($_progres_state);
			array_push($GLOBALS["node_list"], $this);
		}
		public function subscribe($element, $note = NULL)
		{
			$entry = [
				"element" => $element,
				"note" => $note,
				"rendered_link" => false,
			];
			if($element instanceof Topic)
			{
				array_push($this->topic_subs, $entry);
			}else if($element instanceof Service)
			{
				array_push($this->service_subs, $entry);
			}else if($element instanceof External)
			{
				array_push($this->extern_subs, $entry);
			}else
			{
				fwrite(STDERR,
					"Error: Nodes can only subscribe to ".
					"Topic ".
					"Service ".
					"or ".
					"Extern elements".
					"\n"
				);
			}
			return $this;
		}
		public function advertise($element, $note = NULL)
		{
			$entry = [
				"element" => $element,
				"note" => $note,
				"rendered_link" => false,
			];
			if($element instanceof Topic)
			{
				array_push($this->topic_pubs, $entry);
			}else if($element instanceof Service)
			{
				array_push($this->service_pubs, $entry);
			}else if($element instanceof External)
			{
				array_push($this->extern_pubs, $entry);
			}else
			{
				fwrite(STDERR,
					"Error: Nodes can only advertise to ".
					"Topic ".
					"Service ".
					"or ".
					"External elements".
					"\n"
				);
			}
			return $this;
		}
		public function action($action_name, $action_struct , $progres_state = ProgresState::to_do)
		{
			$result   = new Topic($this->var_name."_result",   $action_name."/result",   $action_name."/".$action_struct."ActionResult",   $progres_state);
			$goal     = new Topic($this->var_name."_goal",     $action_name."/goal",     $action_name."/".$action_struct."ActionGoal",     $progres_state);
			$cancel   = new Topic($this->var_name."_cancel",   $action_name."/cancel",   "actionlib_msgs/GoalID",                  $progres_state);
			$status   = new Topic($this->var_name."_status",   $action_name."/status",   "actionlib_msgs/GoalStatusArray",         $progres_state);
			$feedback = new Topic($this->var_name."_feedback", $action_name."/feedback", $action_name."/".$action_struct."ActionFeedback", $progres_state);
			$this
				->advertise($result)
				->advertise($status)
				->advertise($feedback)
				->subscribe($goal)
				->subscribe($cancel)
			;
			return [
				"result" => $result,
				"goal" => $goal,
				"cancel" => $cancel,
				"status" => $status,
				"feedback" => $feedback,
			];
		}
		function render_element_label($element, array $extra_options = [])
		{
			if(isset($element["note"]))
			{
				echo " [label=\"".$element["note"]."\"";
			}else
			{
				echo " [label=\"\"";
			}
			foreach ($extra_options as $option_key => $option_value) {
				echo ", ".$option_key."=\"".$option_value."\"";
			}
			echo "];\n";
		}
		function render_elements()
		{
			foreach ($this->topic_subs as $topic_sub) {
				if($topic_sub["element"]->progres_state != ProgresState::not_used || $GLOBALS["display_non_used"]){
					$topic_sub["element"]->render();
					if(!$topic_sub["rendered_link"])
					{
						echo $topic_sub["element"]->var_name ." -> ".$this->var_name;
						$this->render_element_label($topic_sub);
						$topic_sub["rendered_link"] = true;
					}
				}
			}
			foreach ($this->topic_pubs as $topic_pub) {
				if($topic_pub["element"]->progres_state != ProgresState::not_used || $GLOBALS["display_non_used"]){
					$topic_pub["element"]->render();
					if(!$topic_pub["rendered_link"])
					{
						echo $this->var_name." -> ".$topic_pub["element"]->var_name;
						$this->render_element_label($topic_pub);
						$topic_pub["rendered_link"] = true;
					}
				}
			}
			foreach ($this->service_subs as $service_sub) {
				if($service_sub["element"]->progres_state != ProgresState::not_used || !$GLOBALS["display_non_used"]){
					$service_sub["element"]->render();
					if(!$service_sub["rendered_link"])
					{
						echo $service_sub["element"]->var_name." -> ".$this->var_name;
						$this->render_element_label($service_sub, ["dir"=>"both"]);
						$service_sub["rendered_link"] = true;
					}
				}
			}
			foreach ($this->service_pubs as $service_pub) {
				if($service_pub["element"]->progres_state != ProgresState::not_used || !$GLOBALS["display_non_used"]){
					$service_pub["element"]->render();
					if(!$service_pub["rendered_link"])
					{
						echo $service_pub["element"]->var_name." -> ".$this->var_name;
						$this->render_element_label($service_pub, ["dir"=>"none", "style"=>"dotted"]);
						$service_pub["rendered_link"] = true;
					}
				}
			}
			foreach ($this->extern_subs as $extern_sub) {
				$extern_sub["element"]->render();
				if(!$extern_sub["rendered_link"])
				{
					echo $extern_sub["element"]->var_name." -> ".$this->var_name;
					$this->render_element_label($extern_sub, ["dir"=>"both"]);
					$extern_sub["rendered_link"] = true;
				}
			}
			foreach ($this->extern_pubs as $extern_pub) {
				$extern_pub["element"]->render();
				if(!$extern_pub["rendered_link"])
				{
					echo $this->var_name." -> ".$extern_pub["element"]->var_name;
					$this->render_element_label($extern_pub, ["dir"=>"both"]);
					$extern_pub["rendered_link"] = true;
				}
			}
		}
		public function add_suffix(string $suffix)
		{
			$this->label .= $suffix;
		}
		public function add_prefix(string $prefix)
		{
			$this->label = $prefix.$this->label;
		}
	}
	
?>
