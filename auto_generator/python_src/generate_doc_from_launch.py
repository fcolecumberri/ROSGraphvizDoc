from .safe_mkdir import safe_mkdir
from .find_between import find_between
from .file_xpath import file_xpath
import os
from lxml import etree


launch_checked_files = []


def generate_doc_from_launch(filename, output_dir, package_name):
    global launch_checked_files
    if filename in launch_checked_files:
        return
    launch_checked_files.append(filename)
    safe_mkdir(f"{output_dir}/{package_name}/launch")
    output_file_content = f'''<?php
// file: {filename}
include_once(dirname(__FILE__)."/../../RGDcore/RGD.php");
'''
    launch_name = os.path.basename(filename)
    try:
        nodes = file_xpath(filename, '//node')
        for node in nodes:
            pkg = node.attrib['pkg']
            name = node.attrib['name']
            output_file_content += f"RGD::include('ros/{pkg}/nodes/{name}.php');\n"
        includes = file_xpath(filename, '//include')
        for include_statement in includes:
            try:
                file = include_statement.attrib['file']
                pkg = find_between('find\(', file, '\)')  # NOQA: W605
                name = file.split('/')[-1].split('.')[0]
                output_file_content += f"RGD::include('ros/{pkg}/nodes/{name}.php');\n"
            except KeyError:
                pass
        open(f"{output_dir}/{package_name}/launch/{launch_name}.php", 'w').write(output_file_content)
    except etree.XMLSyntaxError:
        print(f"could not parse launch file: {filename}")
    except KeyError as e:
        print(f"key error on file: {filename}")
        print(e)
