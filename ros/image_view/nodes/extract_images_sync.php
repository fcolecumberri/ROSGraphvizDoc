<?php
// file: /tmp/ros_RGD/image_pipeline/image_view/scripts/extract_images_sync
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_view', 'extract_images_sync', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;