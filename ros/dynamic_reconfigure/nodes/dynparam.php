<?php
// file: /tmp/ros_RGD/dynamic_reconfigure/scripts/dynparam
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('dynamic_reconfigure', 'dynparam', 'https://github.com/ros/dynamic_reconfigure', ProgresState::ros_official)
;