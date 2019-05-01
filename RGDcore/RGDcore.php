<?php
	include 'Options.php';
	$GLOBALS["node_list"] = [];
	$GLOBALS["namespaces"] = [];
	include 'RGDcore/ProgresState.php';
	include 'RGDcore/Renderable.php';
	include 'RGDcore/MultiLayerRenderable.php';
	include 'RGDcore/Topic.php';
	include 'RGDcore/External.php';
	include 'RGDcore/Service.php';
	include 'RGDcore/Node.php';
	include 'RGDcore/Namespace.php';
?>
digraph G {
<?php 
	include 'src/main.php';
	if($GLOBALS["render_labels"])
	{
		include 'RGDcore/RenderLabels.php';
	}
?>
	graph [dpi=<?php echo isset($GLOBALS["dpi"]) ? $GLOBALS["dpi"] : "96" ?>, newrank=true, rankdir="TB"];
	graphranksep=0.5;
<?php
	if(isset($GLOBALS["title"]))
	{
		echo "label=\"".$GLOBALS["title"]."\";";
		echo isset($GLOBALS["title_pos"]) ? "labelloc=\"".$GLOBALS["title_pos"]."\";" : "labelloc=\"t\"";
	}
	foreach ($GLOBALS["namespaces"] as $name_space) {
		$name_space->render();
	}
	foreach ($GLOBALS["node_list"] as $topic) {
		$topic->render();
	}
	foreach ($GLOBALS["node_list"] as $topic) {
		$topic->render_elements();
	}
	echo "\n";
?>
}
