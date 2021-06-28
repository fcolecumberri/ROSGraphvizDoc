<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/test/test_polygon_array_unwrapper.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'polygon_array_unwrapper_test', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('/input_polygons', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('/input_coefficients', 'jsk_recognition_msgs', 'ModelCoefficientsArray')
	->subscribe_topic('/output_polygon', 'geometry_msgs', 'PolygonStamped')
	->subscribe_topic('/output_coefficients', 'jsk_recognition_msgs', 'ModelCoefficients')
;