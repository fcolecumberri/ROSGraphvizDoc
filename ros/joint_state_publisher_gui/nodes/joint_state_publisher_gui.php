<?php
// file: /tmp/ros_RGD/joint_state_publisher/joint_state_publisher_gui/scripts/joint_state_publisher_gui
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_state_publisher_gui', 'joint_state_publisher_gui', 'https://github.com/ros/joint_state_publisher', ProgresState::ros_official)
;