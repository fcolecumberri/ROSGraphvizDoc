<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_example/nodes/turtlebot3_client
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_example', 'turtlebot3_client', 'https://github.com/ROBOTIS-GIT/turtlebot3', ProgresState::ros_official)
	->consume_action('turtlebot3', '', 'turtlebot3_example.msg.Turtlebot3Action')
;