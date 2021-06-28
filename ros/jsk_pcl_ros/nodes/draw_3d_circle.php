<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/draw_3d_circle.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'draw_3d_circle', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('', 'image_view2', 'ImageMarker2')
;