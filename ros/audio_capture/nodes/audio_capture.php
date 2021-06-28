<?php
// file: /tmp/ros_RGD/audio_common/audio_capture/src/audio_capture.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('audio_capture', 'audio_capture', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
	->publish_topic('audio', 'audio_common_msgs', 'AudioData')
	->publish_topic('audio_info', 'audio_common_msgs', 'AudioInfo')
;