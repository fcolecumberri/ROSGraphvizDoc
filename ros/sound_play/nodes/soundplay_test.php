<?php
// file: /tmp/ros_RGD/audio_common/sound_play/scripts/test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('sound_play', 'soundplay_test', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
;