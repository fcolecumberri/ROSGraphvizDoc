<?php
// file: /tmp/ros_RGD/actionlib/actionlib_tools/scripts/axserver.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tools', 'axserver', 'https://github.com/ros/actionlib', ProgresState::ros_official)
	->advertise_action('', '', 'self.action_type.action')
;