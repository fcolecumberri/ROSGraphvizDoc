<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/usb_cam.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/usb_cam/nodes/$(arg camera_name).php');
RGD::import('ros/image_view/nodes/$(anon image_view).php');
