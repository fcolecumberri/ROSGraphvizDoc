<?php
// file: /tmp/ros_RGD/rviz/src/test/cycling_frame.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'tf2_cycling_frame_broadcaster', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
;