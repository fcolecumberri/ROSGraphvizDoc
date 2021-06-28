<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/scripts/evaluate_voxel_segmentation_by_gt_box.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'evaluate_voxel_segmentation_by_gt_box', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input/box_gt', 'jsk_recognition_msgs', 'BoundingBox')
	->subscribe_topic('~input/markers', 'visualization_msgs', 'MarkerArray')
;