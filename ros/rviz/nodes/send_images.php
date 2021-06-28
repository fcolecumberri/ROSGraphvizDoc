<?php
// file: /tmp/ros_RGD/rviz/src/test/send_images.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_images', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
;