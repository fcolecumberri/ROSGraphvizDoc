<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/name_not_remappable.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'remapping_tester', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;