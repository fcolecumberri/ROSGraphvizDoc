subgraph cluster_labels_of_system
{
	subgraph cluster_label_of_colors
	{
<?php
	$labels = [
		new Node("cluster_label_of_colors_to_do", "To do", ProgresState::to_do),
		new Node("cluster_label_of_colors_doing", "Doing", ProgresState::doing),
		new Node("cluster_label_of_colors_testing", "Testing", ProgresState::testing),
		new Node("cluster_label_of_colors_done", "Done", ProgresState::done),
		new Node("cluster_label_of_colors_known_bugs", "Known bugs", ProgresState::known_bugs),
		new Node("cluster_label_of_colors_not_used", "Not used", ProgresState::not_used),
	];
	foreach($labels as $label)
	{
		$label->render();
	}
?>
	}
	subgraph cluster_label_of_elements
	{
<?php
	$labels = [
		new Node("cluster_label_of_elements_node", "Node"),
		new Service("cluster_label_of_elements_service", "Service", "Service's srv"),
		new Topic("cluster_label_of_elements_topic", "Topic", "Topic's msg"),
		new External("cluster_label_of_elements_extern", "External element"),
	];
	foreach($labels as $label)
	{
		$label->render();
	}
	unset($labels);
	unset($label);
?>
	cluster_label_of_colors_to_do ->cluster_label_of_colors_doing [style="invis"];
	cluster_label_of_colors_doing ->cluster_label_of_colors_testing [style="invis"];
	cluster_label_of_colors_testing ->cluster_label_of_colors_done [style="invis"];
	cluster_label_of_colors_done ->cluster_label_of_colors_known_bugs [style="invis"];
	cluster_label_of_colors_known_bugs ->cluster_label_of_colors_not_used [style="invis"];
	cluster_label_of_colors_not_used ->cluster_label_of_elements_node [style="invis"];
	cluster_label_of_elements_node ->cluster_label_of_elements_service [style="invis"];
	cluster_label_of_elements_service ->cluster_label_of_elements_topic [style="invis"];
	cluster_label_of_elements_topic -> cluster_label_of_elements_extern [style="invis"];
	}
}
