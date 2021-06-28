<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/sample/simple_lazy_transport.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'simple_transport', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('~input', '', 'self.msg_class')
;