#! /usr/bin/python

import os
from python_src.scan_ros_local_repos import scan_ros_local_repos
from python_src.clone_and_generate import clone_and_generate
from python_src.safe_mkdir import safe_mkdir

if __name__ == '__main__':
    out_dir = f"{os.path.dirname(os.path.abspath(__file__))}/ros_pkgs"
    safe_mkdir(out_dir)
    tmp_dir = '/tmp/ros_RGD'
    safe_mkdir(tmp_dir)
    repos = list(dict.fromkeys(scan_ros_local_repos()))
    print(f"{repos=}")
    clone_and_generate(repos, out_dir, tmp_dir)

# from python_src.generate_doc_from_cxx import generate_doc_from_cxx
# generate_doc_from_cxx('/tmp/ros_RGD/jsk_recognition/jsk_perception/src/white_balance_converter.cpp', 'test', 'test')

# from python_src.files_with_regex import files_with_regex
# cxx = files_with_regex('/tmp/ros_RGD/turtlebot3_simulations/turtlebot3_fake', "ros::init\([^;]*;")  # NOQA: W605
# print(f"{cxx=}")

# from python_src.find_between import find_between
# s = 'bool imageCallback(jsk_perception::WhiteBalance::Request &req,jsk_perception::WhiteBalance::Response &res'
# f = find_between('\(', s, '::')  # NOQA: W605
# print(f"{f}")
