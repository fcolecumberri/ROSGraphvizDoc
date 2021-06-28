<?php
// file: /tmp/ros_RGD/jsk_recognition/audio_to_spectrogram/scripts/spectrum_plot.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('audio_to_spectrogram', 'spectrum_plot', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~spectrum', 'jsk_recognition_msgs', 'Spectrum')
;