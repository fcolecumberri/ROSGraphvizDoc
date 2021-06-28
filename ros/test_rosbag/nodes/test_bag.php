<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rosbag/test/test_bag.cpp.in
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rosbag', 'test_bag', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;