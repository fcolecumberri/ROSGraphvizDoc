<?php
// file: /tmp/ros_RGD/jsk_recognition/imagesift/src/imagefeatures.cpp.in
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('imagesift', '@EXEC_NAME@', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('Feature0D', 'posedetection_msgs', 'Feature0D')
	->publish_topic('ImageFeature0D', 'posedetection_msgs', 'ImageFeature0D')
	->advertise_service('Feature0DDetect', 'posedetection_msgs', 'Feature0DDetect')
;