<?php
// file: /tmp/ros_RGD/audio_common/sound_play/scripts/shutup.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('sound_play', 'shutup', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
;