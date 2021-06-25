import re
from .safe_mkdir import safe_mkdir
from .find_between import find_between


def single_declaration_abstraction(file_content, regex):
    r = []
    for pub_declaration in re.findall(regex, file_content):  # NOQA: W605
        try:
            # print(f"{pub_declaration=}")
            pkg = find_between('<', pub_declaration, '::').strip()
            msg = find_between('::', pub_declaration, '>').strip()
            # print(f"{pkg=}")
            # print(f"{msg=}")
            try:
                name = pub_declaration.split('"')[1]
            except IndexError:
                name = find_between('\(', pub_declaration, ',')  # NOQA: W605
            r.append([pkg, msg, name])
        except IndexError:
            print(f"single_declaration_abstraction: could not get name from: {pub_declaration}")
    return r


def dual_declaration_abstraction(file_content, type_indicator, declaration_function):
    r = []
    callback_regex = ' \w+[ ]*\([_a-zA-Z0-9 :&,\t\n]*' + type_indicator + '[_a-zA-Z0-9 :&,\t\n]*\)'  # NOQA: W605
    # print(f"{callback_regex=}")
    for callback_declaration in re.findall(callback_regex, file_content):
        try:
            pkg = find_between('\(', callback_declaration, '::').strip()  # NOQA: W605
            if 'const' in pkg:
                pkg = pkg.replace('const', '').strip()
            msg = find_between('::', callback_declaration, type_indicator).strip()  # NOQA: W605
            callback_function = find_between(' ', callback_declaration, '\(').strip()  # NOQA: W605
            # print(f"{callback_declaration=}")
            # print(f"{pkg=}")
            # print(f"{msg=}")
            # print(f"{callback_function=}")
            # print(f"{declaration_function=}")
            if len(callback_function) > 0:
                declaration_regex = "\." + declaration_function + "[ <\w>:]*\([^;]*" + callback_function + "[^;]*;"  # NOQA: W605
                # print(f"{declaration_regex=}")
                subscribe_declaration = re.findall(declaration_regex, file_content)
                try:
                    name = subscribe_declaration[0].split('"')[1]
                except IndexError:
                    name = find_between('\(', subscribe_declaration[0], ',')  # NOQA: W605
                r.append([pkg, msg, name])
                # print(f"{r=}")
        except IndexError:
            print(f"dual_declaration_abstraction: could not get name from: {subscribe_declaration}")
    return r


cxx_checked_files = []


def generate_doc_from_cxx(filename, output_dir, package_name):
    global cxx_checked_files
    if filename in cxx_checked_files:
        return
    cxx_checked_files.append(filename)
    file_content = open(filename, 'r').read()
    # print(f"{file_content=}")
    ros_init_command_list = re.findall('ros::init\s*\([^;]*;', file_content)  # NOQA: W605
    # print(f"{ros_init_command_list=}")
    if len(ros_init_command_list) == 0:
        return
    try:
        node_name = ros_init_command_list[0].split('"')[1]
    except IndexError:
        return
    if len(node_name) == 0:
        # print(f"{node_name=}")
        return
    safe_mkdir(f"{output_dir}/{package_name}/nodes")
    # print(f"{filename=}")
    output_file_content = f'''<?php
// file: {filename}
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('{package_name}', '{node_name}')
'''
    ##################################################################################################
    for topic_pkg, topic_msg, topic_name in single_declaration_abstraction(
        file_content,
        '\.advertise<[^;]*;'  # NOQA: W605
    ):
        output_file_content += f"\t->publish_topic('{topic_name}', '{topic_pkg}', '{topic_msg}')\n"
    ##################################################################################################
    for topic_pkg, topic_msg, topic_name in dual_declaration_abstraction(
            file_content,
            '::ConstPtr',
            'subscribe'
    ):
        output_file_content += f"\t->subscribe_topic('{topic_name}', '{topic_pkg}', '{topic_msg}')\n"
    ##################################################################################################
    for service_pkg, service_srv, service_name in dual_declaration_abstraction(
        file_content,
        '::Request',
        'advertiseService'
    ):
        output_file_content += f"\t->advertise_service('{service_name}', '{service_pkg}', '{service_srv}')\n"
    ##################################################################################################
    for service_pkg, service_srv, service_name in single_declaration_abstraction(
        file_content,
        '\.serviceClient<[^;]*;'  # NOQA: W605
    ):
        output_file_content += f"\t->consume_service('{service_name}', '{service_pkg}', '{service_srv}')\n"
    ##################################################################################################
    for action_pkg, action_msg, action_name in single_declaration_abstraction(
        file_content,
        '\.SimpleActionServer<[^;]*;'  # NOQA: W605
    ):
        output_file_content += f"\t->advertise_action('{action_name}', '{action_pkg}', '{action_msg}')\n"
    ##################################################################################################
    for action_pkg, action_msg, action_name in single_declaration_abstraction(
        file_content,
        '\.SimpleActionClient<[^;]*;'  # NOQA: W605
    ):
        output_file_content += f"\t->consume_action('{action_name}', '{action_pkg}', '{action_msg}')\n"
    ##################################################################################################
    output_file_content += ';'
    open(f"{output_dir}/{package_name}/nodes/{node_name}.php", 'w').write(output_file_content)
