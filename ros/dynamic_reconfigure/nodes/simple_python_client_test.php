<?php
// file: /tmp/ros_RGD/dynamic_reconfigure/test/simple_python_client_test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('dynamic_reconfigure', 'simple_python_client_test', 'https://github.com/ros/dynamic_reconfigure', ProgresState::ros_official)
;