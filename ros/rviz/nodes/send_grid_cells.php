<?php
// file: /tmp/ros_RGD/rviz/src/test/send_grid_cells_node.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_grid_cells', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('grid_cells', 'nav_msgs', 'GridCells')
;