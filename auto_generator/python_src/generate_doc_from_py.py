import re
from .safe_mkdir import safe_mkdir
from .find_between import find_between


def get_from_pkg(file_content, struct):
    try:
        regex = 'from[^\n]*' + struct + '[^\n]*\n'
        # print(f"{regex=}")
        from_instructions = re.findall(regex, file_content)
        if len(from_instructions) == 0:
            return ''
        return find_between('from', from_instructions[0], '\.').strip()  # NOQA: W605
    except re.error:
        pass
    return ''


def get_str(chunk):
    try:
        if '\'' in chunk:
            return chunk.split('\'')[1]
        if '"' in chunk:
            return chunk.split('"')[1]
    except IndexError:
        pass
    return ''


def extract_from_calls(file_content, call, struct_pos):
    r = []
    call_instructions = re.findall(call + '\([^\)]*\)', file_content)  # NOQA: W605
    # print(f"{call=}")
    # print(f"{call_instructions=}")
    for call_instruction in call_instructions:
        try:
            name = get_str(call_instruction)
            struct = (
                call_instruction
                .split(',')[struct_pos]
                .replace(')', '')
                .replace("\n", '')
                .strip()
            )
            pkg = get_from_pkg(file_content, struct)
            r.append([name, pkg, struct])
        except IndexError:
            pass
    return r


py_checked_files = []


def generate_doc_from_py(filename, output_dir, package_name):
    global py_checked_files
    if filename in py_checked_files:
        return
    py_checked_files.append(filename)
    file_content = open(filename, 'r').read()
    ros_init_command_list = re.findall('rospy.init_node\([^,)]*[,)]', file_content)  # NOQA: W605
    if len(ros_init_command_list) == 0:
        return
    # print(f"{ros_init_command_list[0]=}")
    node_name = get_str(ros_init_command_list[0])
    # print(f"{node_name=}")
    if node_name == '':
        return
    node_name = node_name.replace('/', '_')
    safe_mkdir(f"{output_dir}/{package_name}/nodes")
    output_file_content = f'''<?php
// file: {filename}
include_once(dirname(__FILE__)."/../../RGDcore/RGD.php");
RGD::node('{package_name}', '{node_name}')
'''
    for name, pkg, struct in extract_from_calls(file_content, 'rospy\.Publisher', 1):  # NOQA: W605
        output_file_content += f"\t->publish_topic('{name}', '{pkg}', '{struct}')\n"
    for name, pkg, struct in extract_from_calls(file_content, 'rospy\.Subscriber', 1):  # NOQA: W605
        output_file_content += f"\t->subscribe_topic('{name}', '{pkg}', '{struct}')\n"
    for name, pkg, struct in extract_from_calls(file_content, 'rospy\.Service', 1):  # NOQA: W605
        output_file_content += f"\t->advertise_service('{name}', '{pkg}', '{struct}')\n"
    for name, pkg, struct in extract_from_calls(file_content, 'rospy\.ServiceProxy', 1):  # NOQA: W605
        output_file_content += f"\t->consume_service('{name}', '{pkg}', '{struct}')\n"
    for name, pkg, struct in extract_from_calls(file_content, 'actionlib\.SimpleActionClient', 1):  # NOQA: W605
        output_file_content += f"\t->consume_action('{name}', '{pkg}', '{struct}')\n"
    for name, pkg, struct in extract_from_calls(file_content, 'actionlib\.SimpleActionServer', 1):  # NOQA: W605
        output_file_content += f"\t->advertise_action('{name}', '{pkg}', '{struct}')\n"
    # print(f"{node_name=}")
    open(f"{output_dir}/{package_name}/nodes/{node_name}.php", 'w').write(output_file_content)
