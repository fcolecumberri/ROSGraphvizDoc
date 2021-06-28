<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/src/create_instance_cb_error.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'simple_loader', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
;