<?php
	// This is the architecture from the example in
	// http://wiki.ros.org/ROS/Tutorials/WritingServiceClient%28c%2B%2B%29
	// and
	// http://wiki.ros.org/ROS/Tutorials/WritingServiceClient%28python%29
	
	$GLOBALS["title"] = "This is the architecture from the example in:\n".
		"http://wiki.ros.org/ROS/Tutorials/WritingServiceClient%28c%2B%2B%29 \n".
		"& \n".
		"http://wiki.ros.org/ROS/Tutorials/WritingServiceClient%28python%29";
	$GLOBALS["title_pos"] = "b";
	
	$add_two_ints_server = new Node("add_two_ints_server", "add_two_ints_server", ProgresState::done);
	$add_two_ints = new Service("add_two_ints", "add_two_ints", "beginner_tutorials::AddTwoInts", ProgresState::done);
	$add_two_ints_client = new Node("add_two_ints_client", "add_two_ints_client", ProgresState::done);
	$add_two_ints_server->advertise($add_two_ints);
	$add_two_ints_client->subscribe($add_two_ints)
?>
