<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/tower_detect_viewer_server.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'tower_detect_viewer_server', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('', 'std_msgs', 'Int16')
	->publish_topic('/browser/message', 'std_msgs', 'String')
	->subscribe_topic('/browser/click', 'image_view2', 'Point')
	->subscribe_topic('/image_marked', 'image_view2', 'Image')
	->subscribe_topic('/pcl_nodelet/clustering/cluster_num', 'jsk_pcl_ros', 'Int32Stamped')
	->advertise_service('/browser/check_circle', '', 'CheckCircle')
	->advertise_service('/browser/pickup', '', 'TowerPickUp')
	->consume_service('/browser/tower_robot_move_command', '', 'TowerRobotMoveCommand')
;