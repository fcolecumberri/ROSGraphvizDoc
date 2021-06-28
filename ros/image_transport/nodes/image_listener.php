<?php
// file: /tmp/ros_RGD/image_common/image_transport/tutorial/src/my_subscriber.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_transport', 'image_listener', 'https://github.com/ros-perception/image_common', ProgresState::ros_official)
;