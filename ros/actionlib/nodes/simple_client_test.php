<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/exercise_simple_client.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'simple_client_test', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;