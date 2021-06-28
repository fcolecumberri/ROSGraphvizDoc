<?php
// file: /tmp/ros_RGD/ros_controllers/diff_drive_controller/test/diff_drive_multiple_cmd_vel_publishers_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('diff_drive_controller', 'diff_drive_multiple_publishers_test', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;