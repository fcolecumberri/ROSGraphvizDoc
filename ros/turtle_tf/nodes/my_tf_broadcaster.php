<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf/src/turtle_tf_broadcaster.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf', 'my_tf_broadcaster', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
;