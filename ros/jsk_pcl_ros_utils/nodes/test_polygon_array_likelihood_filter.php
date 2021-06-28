<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/test/test_polygon_array_likelihood_filter.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'test_polygon_array_likelihood_filter', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('/polygon_array_likelihood_filter/output_polygons', 'jsk_recognition_msgs', 'PolygonArray')
;