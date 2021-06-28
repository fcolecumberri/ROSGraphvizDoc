<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/test/test_loader.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'test_loader', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->consume_service('/nodelet_manager/load_nodelet', '', 'NodeletLoad')
	->consume_service('/nodelet_manager/unload_nodelet', '', 'NodeletUnload')
	->consume_service('/nodelet_manager/list', '', 'NodeletList')
	->consume_service('/nodelet_manager/load_nodelet', '', 'NodeletLoad')
	->consume_service('/nodelet_manager/unload_nodelet', '', 'NodeletUnload')
	->consume_service('/nodelet_manager/list', '', 'NodeletList')
;