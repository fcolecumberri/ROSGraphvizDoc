<?php
// file: /tmp/ros_RGD/ros_comm/tools/roslaunch/test/xml/test-substitution.xml
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/$(optenv FOO foo)/nodes/n1.php');
RGD::import('ros/$(anon foo)/nodes/n2.php');
