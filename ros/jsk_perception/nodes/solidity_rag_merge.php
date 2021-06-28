<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/solidity_rag_merge.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'solidity_rag_merge', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;