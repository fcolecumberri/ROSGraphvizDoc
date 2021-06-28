<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/add_two_ints_server.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'add_two_ints_server', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;