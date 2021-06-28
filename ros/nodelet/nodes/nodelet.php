<?php
// file: /tmp/ros_RGD/nodelet_core/nodelet/scripts/list_nodelets
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('nodelet', 'nodelet', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->consume_service('', 'nodelet', 'NodeletList')
	->consume_service('', 'nodelet', 'NodeletList')
;