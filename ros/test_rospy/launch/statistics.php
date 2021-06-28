<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/test/rostest/statistics.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/test_rospy/nodes/very_slow_talker.php');
RGD::import('ros/test_rospy/nodes/very_slow_listener.php');
RGD::import('ros/test_rospy/nodes/slow_talker.php');
RGD::import('ros/test_rospy/nodes/slow_listener.php');
RGD::import('ros/test_rospy/nodes/fast_talker.php');
RGD::import('ros/test_rospy/nodes/fast_listener.php');
RGD::import('ros/test_rospy/nodes/very_fast_talker.php');
RGD::import('ros/test_rospy/nodes/very_fast_listener.php');
