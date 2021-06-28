<?php
// file: /tmp/ros_RGD/dynamic_reconfigure/test/testserver.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('dynamic_reconfigure', 'dynamic_reconfigure_test_server', 'https://github.com/ros/dynamic_reconfigure', ProgresState::ros_official)
;