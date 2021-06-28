<?php
// file: /tmp/ros_RGD/ros_comm/tools/roslaunch/test/xml/test-node-substitution.xml
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/$(env PACKAGE)/nodes/n1.php');
