<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/speak_when_label_found.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'speak_when_label_found', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/string', 'std_msgs', 'String')
	->publish_topic('~output/slack_msg', 'jsk_gui_msgs', 'SlackMessage')
;