<?php
	// This is a sample made to show how to use a for loop in RGD.
	// Lets asume that we have n cameras and we want to track faces in each one of them
	// from the faces info, we want to generate an action plan
	// and then take the info and send them to a motor controller board.
	
	$GLOBALS["display_non_used"] = false;
	
	$n_cameras = 3;
	
	$direction_planner = new Node("controller", "controller", ProgresState::to_do);
	
	for ($i=0; $i < $n_cameras; $i++) {
		$camera_namespace = new RosNameSpace("camera".$i, "camera_".$i);
		$camera_hw = new External("camera".$i, "WebCam \n number".$i);
		$camera_node = new Node("cv_camera",
			"ROS::cv_camera::cv_camera_node \n http://wiki.ros.org/cv_camera", ProgresState::done);
		$image_raw = new Topic("image_raw", "image_raw", "sensor_msgs/Image", ProgresState::done);
		$camera_info = new Topic("camera_info", "camera_info", "sensor_msgs/CameraInfo", ProgresState::not_used);
		$set_camera_info = new Service("set_camera_info", "set_camera_info", "sensor_msgs/SetCameraInfo", ProgresState::done);
		$camera_node
			->advertise($image_raw)
			->advertise($camera_info)
			->advertise($set_camera_info)
			->subscribe($camera_hw);
		$camera_namespace
			->add($camera_node)
			->add($image_raw)
			->add($camera_info)
			->add($set_camera_info);
		$direction_planner->subscribe($image_raw)->subscribe($set_camera_info);
	}
	$twist = new Topic("twist", "twist", "geometry_msgs/Twist", ProgresState::done);
	$direction_planner->advertise($twist);
	$board_controller_node = new Node("board_controller", "board_controller", ProgresState::to_do);
	$board_controller_hw = new External("board_controller_hw", "Motor Controller Board");
	$board_controller_node->subscribe($twist)->advertise($board_controller_hw);
?>
