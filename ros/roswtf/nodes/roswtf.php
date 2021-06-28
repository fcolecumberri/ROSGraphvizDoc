<?php
// file: /tmp/ros_RGD/ros_comm/utilities/roswtf/src/roswtf/__init__.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roswtf', 'roswtf', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;