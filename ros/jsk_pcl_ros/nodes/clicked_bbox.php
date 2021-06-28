<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/publish_clicked_point_bbox.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'clicked_bbox', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('bbox_with_clicked_point', '', 'BoundingBoxArray')
	->subscribe_topic('clicked_point', '', 'PointStamped')
;