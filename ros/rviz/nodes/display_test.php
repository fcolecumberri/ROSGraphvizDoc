<?php
// file: /tmp/ros_RGD/rviz/src/test/display_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'display_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
;