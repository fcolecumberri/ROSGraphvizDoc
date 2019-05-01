<?php
	// This is the architecture from the example in
	// http://wiki.ros.org/ROS/Tutorials/WritingPublisherSubscriber%28c%2B%2B%29
	// and
	// http://wiki.ros.org/ROS/Tutorials/WritingPublisherSubscriber%28python%29
	
	$GLOBALS["title"] = "This is the architecture from the example in:\n".
		"http://wiki.ros.org/ROS/Tutorials/WritingPublisherSubscriber%28c%2B%2B%29 \n".
		"& \n".
		"http://wiki.ros.org/ROS/Tutorials/WritingPublisherSubscriber%28python%29";
	$GLOBALS["title_pos"] = "b";
	
	$talker = new Node("talker", "talker", ProgresState::done);
	$chatter = new Topic("chatter", "chatter", "std_msgs::String", ProgresState::done);
	$listener = new Node("listener", "listener", ProgresState::done);
	$talker->advertise($chatter);
	$listener->subscribe($chatter);
?>
