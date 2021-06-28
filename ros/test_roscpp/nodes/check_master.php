<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/check_master.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'check_master', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;