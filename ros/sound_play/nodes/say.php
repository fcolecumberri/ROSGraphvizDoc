<?php
// file: /tmp/ros_RGD/audio_common/sound_play/scripts/say.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('sound_play', 'say', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
;