<?php
// file: /tmp/ros_RGD/ros_comm/tools/roslaunch/test/xml/test-substitution-duplicate-anon-names.xml
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/pkg/nodes/$(anon foo).php');
RGD::import('ros/pkg/nodes/$(anon foo).php');
