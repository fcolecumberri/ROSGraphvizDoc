
import os
import glob
from .file_xpath import file_xpath


def scan_ros_local_repos():
    ros_package_path_list = os.getenv('ROS_PACKAGE_PATH').split(':')
    repos = []
    for ros_package_path in ros_package_path_list:
        # print(ros_package_path)
        package_xml_list = glob.glob(f"{ros_package_path}/**/package.xml", recursive=True)
        for package_xml in package_xml_list:
            repos += file_xpath(package_xml, "//url[@type='repository']/text()")
    return repos
