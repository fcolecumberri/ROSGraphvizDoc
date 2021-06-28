<?php
// file: /tmp/ros_RGD/ros_comm/tools/rosout/rosout.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosout', 'rosout', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('/rosout_agg', 'rosgraph_msgs', 'Log')
	->subscribe_topic('/rosout', 'rosgraph_msgs', 'Log')
;