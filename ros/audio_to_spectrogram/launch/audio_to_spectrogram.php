<?php
// file: /tmp/ros_RGD/jsk_recognition/audio_to_spectrogram/launch/audio_to_spectrogram.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/audio_capture/nodes/audio_capture.php');
RGD::import('ros/audio_to_spectrogram/nodes/audio_to_spectrum.php');
RGD::import('ros/audio_to_spectrogram/nodes/spectrum_to_spectrogram.php');
RGD::import('ros/audio_to_spectrogram/nodes/spectrum_plot.php');
RGD::import('ros/image_view/nodes/spectrogram_view.php');
