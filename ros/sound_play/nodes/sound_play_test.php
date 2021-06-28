<?php
// file: /tmp/ros_RGD/audio_common/sound_play/test/test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('sound_play', 'sound_play_test', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
;