<?php
// file: /tmp/ros_RGD/dynamic_reconfigure/test/testclient.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('dynamic_reconfigure', 'testclient_py', 'https://github.com/ros/dynamic_reconfigure', ProgresState::ros_official)
;