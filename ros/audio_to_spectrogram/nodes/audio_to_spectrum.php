<?php
// file: /tmp/ros_RGD/jsk_recognition/audio_to_spectrogram/scripts/audio_to_spectrum.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('audio_to_spectrogram', 'audio_to_spectrum', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~spectrum', 'jsk_recognition_msgs', 'Spectrum')
	->publish_topic('~spectrum_filtered', 'jsk_recognition_msgs', 'Spectrum')
	->subscribe_topic('~audio', 'audio_common_msgs', 'AudioData')
;