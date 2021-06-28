<?php
// file: /tmp/ros_RGD/image_pipeline/image_view/src/nodes/image_saver.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_view', 'image_saver', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
	->advertise_service('save', 'std_srvs', 'Empty')
	->advertise_service('start', 'std_srvs', 'Trigger')
	->advertise_service('end', 'std_srvs', 'Trigger')
;