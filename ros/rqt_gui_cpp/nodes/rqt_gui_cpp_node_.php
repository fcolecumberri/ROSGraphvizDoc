<?php
// file: /tmp/ros_RGD/rqt/rqt_gui_cpp/include/rqt_gui_cpp/plugin.h
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rqt_gui_cpp', 'rqt_gui_cpp_node_', 'https://github.com/ros-visualization/rqt', ProgresState::ros_official)
;