<?php
// file: /tmp/ros_RGD/rviz/src/test/send_lots_of_tf.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_tf', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
;