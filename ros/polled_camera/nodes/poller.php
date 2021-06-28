<?php
// file: /tmp/ros_RGD/image_common/polled_camera/src/poller.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('polled_camera', 'poller', 'https://github.com/ros-perception/image_common', ProgresState::ros_official)
	->consume_service('', 'polled_camera', 'GetPolledImage')
;