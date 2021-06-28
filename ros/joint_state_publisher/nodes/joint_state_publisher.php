<?php
// file: /tmp/ros_RGD/joint_state_publisher/joint_state_publisher/scripts/joint_state_publisher
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_state_publisher', 'joint_state_publisher', 'https://github.com/ros/joint_state_publisher', ProgresState::ros_official)
;