<?php
// file: /tmp/ros_RGD/audio_common/sound_play/scripts/soundplay_node.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('sound_play', 'sound_play', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
	->publish_topic('/diagnostics', 'diagnostic_msgs', 'DiagnosticArray')
	->subscribe_topic('robotsound', 'sound_play', 'SoundRequest')
	->advertise_action('sound_play', 'sound_play', 'SoundRequestAction')
;