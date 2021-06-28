<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/crashes_under_gprof.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'test_get_param', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;