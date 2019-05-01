<?php
	// this is the example of the opencv_apps package documented using RGD
	// as the page: http://wiki.ros.org/opencv_apps
	
	$GLOBALS["title"] = "opencv_apps from:\n http://wiki.ros.org/opencv_apps";
	$GLOBALS["title_pos"] = "b";
	
	$edge_detection = new Node("edge_detection", "edge_detection", ProgresState::done);
	$image = new Topic("image", "image", "sensor_msgs/Image", ProgresState::done);
	$edge_detection
		->advertise($image)
		->subscribe($image);
	$hough_lines = new Node("hough_lines", "hough_lines", ProgresState::done);
	$circles = new Topic("circles", "circles", "opencv_apps/CircleArrayStamped", ProgresState::done);
	$hough_lines
		->advertise($image)
		->subscribe($image)
		->advertise($circles);
	$find_contours = new Node("find_contours", "find_contours", ProgresState::done);
	$contours = new Topic("contours", "contours", "opencv_apps/ContourArrayStamped", ProgresState::done);
	$find_contours
		->subscribe($image)
		->advertise($image)
		->advertise($contours);
	$convex_hull = new Node("convex_hull", "convex_hull", ProgresState::done);
	$hulls = new Topic("hulls", "hulls", "opencv_apps/ContourArrayStamped" , ProgresState::done);
	$convex_hull
		->subscribe($image)
		->advertise($image)
		->advertise($hulls);
	$general_contours = new Node("general_contours", "general_contours", ProgresState::done);
	$rectangles = new Topic("rectangles", "rectangles", "opencv_apps/RotatedRectArrayStamped", ProgresState::done);
	$ellipses = new Topic("ellipses", "ellipses", "opencv_apps/RotatedRectArrayStamped", ProgresState::done);
	$general_contours
		->subscribe($image)
		->advertise($image)
		->advertise($rectangles)
		->advertise($ellipses);
	$contour_moments = new Node("contour_moments", "contour_moments", ProgresState::done);
	$moment = new Topic("moment", "moment", "opencv_apps/MomentArrayStamped", ProgresState::done);
	$contour_moments
		->subscribe($image)
		->advertise($image)
		->advertise($moment);
	$face_detection = new Node("face_detection", "face_detection", ProgresState::done);
	$faces = new Topic("faces", "faces", "opencv_apps/FaceArrayStamped", ProgresState::done);
	$face_image = new Topic("face_image", "face_image", "sensor_msgs/Image", ProgresState::done);
	$face_detection
		->subscribe($image)
		->advertise($image)
		->advertise($faces)
		->advertise($face_image);
	$face_recognition = new Node("face_recognition", "face_recognition", ProgresState::done);
	$output = new Topic("output", "~output", "opencv_apps/FaceArrayStamped", ProgresState::done);
	$debug_image = new Topic("debug_image", "~debug_image", "sensor_msgs/Image", ProgresState::done);
	$face_recognition
		->subscribe($image)
		->subscribe($faces)
		->advertise($output)
		->advertise($debug_image);
	$people_detect = new Node("people_detect", "people_detect", ProgresState::done);
	$found = new Topic("found", "found", "opencv_apps/RectArrayStamped", ProgresState::done);
	$people_detect
		->subscribe($image)
		->advertise($image)
		->advertise($found);
	$goodfeature_track = new Node("goodfeature_track", "goodfeature_track", ProgresState::done);
	$camshift = new Node("camshift", "camshift", ProgresState::done);
	$camshift->advertise($image)->subscribe($image);
	$fback_flow = new Node("fback_flow", "fback_flow", ProgresState::done);
	$fback_flow->advertise($image)->subscribe($image);
	$lk_flow = new Node("lk_flow", "lk_flow", ProgresState::done);
	$lk_flow->advertise($image)->subscribe($image);
	$phase_corr = new Node("phase_corr", "phase_corr", ProgresState::done);
	$phase_corr->advertise($image)->subscribe($image);
	$simple_flow = new Node("simple_flow", "simple_flow", ProgresState::done);
	$simple_flow->advertise($image)->subscribe($image);
	$segment_objects = new Node("segment_objects", "segment_objects", ProgresState::done);
	$segment_objects->advertise($image)->subscribe($image);
	$watershed_segmentation = new Node("watershed_segmentation", "watershed_segmentation", ProgresState::done);
	$watershed_segmentation->advertise($image)->subscribe($image);
	$rgb_color_filter = new Node("rgb_color_filter", "rgb_color_filter", ProgresState::done);
	$rgb_color_filter->advertise($image)->subscribe($image);
	$hls_color_filter = new Node("hls_color_filter", "hls_color_filter", ProgresState::done);
	$hls_color_filter->advertise($image)->subscribe($image);
	$hsv_color_filter = new Node("hsv_color_filter", "hsv_color_filter", ProgresState::done);
	$hsv_color_filter->advertise($image)->subscribe($image);
	$back_project = new Topic("back_project", "back_project", "sensor_msgs/Image", ProgresState::done);
	$track_box = new Topic("track_box", "track_box", "opencv_apps/RotatedRectStamped", ProgresState::done);
	$flows = new Topic("flows", "flows", "opencv_apps/FlowArrayStamped", ProgresState::done);
	$shift = new Topic("shift", "shift", "opencv_apps/Point2DStamped", ProgresState::done);
	$contours = new Topic("contours", "contours", "opencv_apps/ContoruArrayStamped", ProgresState::done);
	$area = new Topic("area", "area", "std_msgs/Float64", ProgresState::done);
	$camshift->advertise($back_project)->advertise($track_box);
	$fback_flow->advertise($flows);
	$lk_flow->advertise($flows);
	$phase_corr->advertise($shift);
	$simple_flow->subscribe($flows);
	$segment_objects->advertise($contours)->advertise($area);
	$watershed_segmentation->subscribe($contours);
	$initialize_points = new Service("initialize_points", "initialize_points", "?", ProgresState::done );
	$delete_points = new Service("delete_points", "delete_points", "?", ProgresState::done );
	$toggle_night_mode = new Service("toggle_night_mode", "toggle_night_mode", "?", ProgresState::done );
	$update_bg_model = new Service("update_bg_model", "update_bg_model", "?", ProgresState::done );
	$lk_flow->advertise($initialize_points)->advertise($delete_points)->advertise($toggle_night_mode);
	$segment_objects->advertise($update_bg_model);
	foreach ([ //list of opencv_apps
		$edge_detection,
		$hough_lines,
		$find_contours,
		$convex_hull,
		$general_contours,
		$contour_moments,
		$face_detection,
		$face_recognition,
		$people_detect,
		$goodfeature_track,
		$camshift,
		$fback_flow,
		$lk_flow,
		$phase_corr,
		$simple_flow,
		$segment_objects,
		$watershed_segmentation,
		$rgb_color_filter,
		$hls_color_filter,
		$hsv_color_filter,
	] as $node) {
		$node->add_prefix("opencv_apps::");
		$node->add_suffix("\nhttp://wiki.ros.org/opencv_apps");
	}
?>
