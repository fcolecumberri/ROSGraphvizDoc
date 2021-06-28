<?php
// file: /tmp/ros_RGD/common_tutorials/actionlib_tutorials/src/fibonacci_client.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tutorials', 'test_fibonacci', 'https://github.com/ros/common_tutorials', ProgresState::ros_official)
;