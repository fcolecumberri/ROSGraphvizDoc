<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_msgs/scripts/plot_data_to_csv.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_msgs', 'plot_data_to_csv', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'PlotData')
;