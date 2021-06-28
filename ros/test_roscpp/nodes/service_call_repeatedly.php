<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_call_repeatedly.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'service_call_repeatedly', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;