<?php
// file: /tmp/ros_RGD/turtlebot3_simulations/turtlebot3_gazebo/launch/multi_map_merge.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/multirobot_map_merge/nodes/map_merge.php');
RGD::import('ros/tf/nodes/world_to_$(arg first_tb3)_tf_broadcaster.php');
RGD::import('ros/tf/nodes/world_to_$(arg second_tb3)_tf_broadcaster.php');
RGD::import('ros/tf/nodes/world_to_$(arg third_tb3)_tf_broadcaster.php');
