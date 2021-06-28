<?php
// file: /tmp/ros_RGD/jsk_recognition/audio_to_spectrogram/scripts/spectrum_to_spectrogram.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('audio_to_spectrogram', 'audio_to_spectrogram', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~spectrogram', 'sensor_msgs', 'Image')
	->subscribe_topic('~spectrum', 'jsk_recognition_msgs', 'Spectrum')
;