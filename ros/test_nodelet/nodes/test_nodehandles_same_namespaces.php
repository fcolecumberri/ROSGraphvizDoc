<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/test/test_nodehandles_same_namespaces.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'test_nodehandles_same_namespaces', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->publish_topic('private', 'std_msgs', 'Empty')
	->publish_topic('namespaced', 'std_msgs', 'String')
	->publish_topic('/public', 'std_msgs', 'Float32')
;