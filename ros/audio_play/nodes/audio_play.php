<?php
// file: /tmp/ros_RGD/audio_common/audio_play/src/audio_play.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('audio_play', 'audio_play', 'https://github.com/ros-drivers/audio_common', ProgresState::ros_official)
;