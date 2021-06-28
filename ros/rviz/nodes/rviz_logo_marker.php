<?php
// file: /tmp/ros_RGD/rviz/src/test/rviz_logo_marker.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'rviz_logo_marker', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
;