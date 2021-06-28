<?php
// file: /tmp/ros_RGD/actionlib/actionlib_tools/scripts/axclient.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tools', 'axclient', 'https://github.com/ros/actionlib', ProgresState::ros_official)
	->consume_action('', '', 'self.action_type.action')
;