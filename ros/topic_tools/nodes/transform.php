<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/scripts/transform
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'transform', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('', '', 'self.output_class')
	->subscribe_topic('', '', 'input_class')
;