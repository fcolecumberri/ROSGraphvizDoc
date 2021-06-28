<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_bof_object_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/raw_image.php');
RGD::import('ros/jsk_perception/nodes/mask_image.php');
RGD::import('ros/jsk_perception/nodes/label_image.php');
RGD::import('ros/jsk_perception/nodes/colorize_labels.php');
RGD::import('ros/imagesift/nodes/imagesift.php');
RGD::import('ros/posedetection_msgs/nodes/feature0d_to_image.php');
RGD::import('ros/jsk_perception/nodes/bof_histogram_extractor.php');
RGD::import('ros/jsk_perception/nodes/sklearn_classifier.php');
RGD::import('ros/rqt_gui/nodes/rqt_gui.php');
