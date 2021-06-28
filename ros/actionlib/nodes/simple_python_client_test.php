<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/simple_python_client_test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'simple_python_client_test', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;