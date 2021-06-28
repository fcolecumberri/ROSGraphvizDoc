<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/action_client_destruction_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'simple_client_allocator', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;