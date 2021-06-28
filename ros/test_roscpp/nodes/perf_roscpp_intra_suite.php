<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/perf/src/intra_suite.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'perf_roscpp_intra_suite', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
;