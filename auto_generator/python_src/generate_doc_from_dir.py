from .safe_mkdir import safe_mkdir
from .files_with_regex import files_with_regex
from .generate_doc_from_cxx import generate_doc_from_cxx
# from .generate_doc_from_py import generate_doc_from_py


def generate_doc_from_dir(package_name, output_dir, pkg_dir):
    safe_mkdir(f"{output_dir}/{package_name}")
    # print(f"{package_name=}")
    cxx_files = files_with_regex(pkg_dir, "ros::init\([^;]*;")  # NOQA: W605
    # print(f"{pkg_dir=}")
    # print(f"{cxx_files=}")
    for cxx_filename in cxx_files:
        generate_doc_from_cxx(cxx_filename, output_dir, package_name)
    # py_files = files_with_regex(pkg_dir, "rospy.init_node")
    # for py_filename in py_files:
    #     generate_doc_from_py(py_filename, output_dir, package_name)
