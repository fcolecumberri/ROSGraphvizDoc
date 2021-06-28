<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/src/switch_mux.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', '_switcher', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->consume_service('', '', '')
;