<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/ref_server.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'ref_server', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;