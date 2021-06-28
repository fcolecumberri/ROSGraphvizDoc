<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/hinted_plane_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/attention_viewer.php');
RGD::import('ros/jsk_pcl_ros/nodes/rect_to_roi.php');
RGD::import('ros/jsk_pcl_ros/nodes/rect_to_mask_image.php');
RGD::import('ros/image_view/nodes/mask_viewer.php');
RGD::import('ros/jsk_pcl_ros/nodes/laser_cloud_from_camera_frame.php');
RGD::import('ros/jsk_pcl_ros/nodes/roi_clipper.php');
RGD::import('ros/nodelet/nodes/voxelgrid.php');
RGD::import('ros/nodelet/nodes/normal_estimation.php');
RGD::import('ros/jsk_pcl_ros/nodes/normal_concatenater.php');
RGD::import('ros/jsk_pcl_ros/nodes/hinted_plane_detection.php');
RGD::import('ros/jsk_pcl_ros/nodes/polygon_array_wrapper.php');
RGD::import('ros/jsk_pcl_ros/nodes/plane_extraction.php');
RGD::import('ros/jsk_pcl_ros/nodes/euclidean_clustering.php');
RGD::import('ros/jsk_pcl_ros/nodes/object_clusters_on_plane.php');
