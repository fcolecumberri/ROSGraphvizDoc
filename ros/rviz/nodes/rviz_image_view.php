<?php
// file: /tmp/ros_RGD/rviz/src/image_view/main.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'rviz_image_view', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
;