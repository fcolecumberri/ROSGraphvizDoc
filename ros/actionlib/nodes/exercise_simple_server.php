<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/exercise_simple_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'exercise_simple_server', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;