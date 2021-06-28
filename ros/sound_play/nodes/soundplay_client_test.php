<?php
// file: /tmp/ros_RGD/audio_common/sound_play/scripts/test_actionlib_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('sound_play', 'soundplay_client_test', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
	->consume_action('sound_play', 'sound_play', 'SoundRequestAction')
;