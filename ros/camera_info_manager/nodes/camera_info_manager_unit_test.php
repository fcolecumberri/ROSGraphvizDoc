<?php
// file: /tmp/ros_RGD/image_common/camera_info_manager/tests/unit_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('camera_info_manager', 'camera_info_manager_unit_test', 'https://github.com/ros-perception/image_common', ProgresState::ros_official)
	->consume_service('set_camera_info', 'sensor_msgs', 'SetCameraInfo')
;