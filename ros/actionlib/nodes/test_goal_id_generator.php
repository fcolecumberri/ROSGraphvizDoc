<?php
// file: /tmp/ros_RGD/actionlib/actionlib/test/test_server_components.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib', 'test_goal_id_generator', 'https://github.com/ros/actionlib', ProgresState::ros_official)
;