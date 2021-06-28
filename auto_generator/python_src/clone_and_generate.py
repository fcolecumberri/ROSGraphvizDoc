import git
import shutil
import glob
import os
from .generate_doc_from_dir import generate_doc_from_dir
from .file_xpath import file_xpath


def have_one_of(string, find_list):
    for find in find_list:
        if find in string:
            return True
    return False


def clone_and_generate(repos, output_dir, tmp_dir):
    for repo in repos:
        # print(f"{repo=}")
        if have_one_of(repo, ['github', 'gitlab']):
            repo_dir_name = repo.split('/')[-1].split('.')[0]
            if not os.path.isdir(f"{tmp_dir}/{repo_dir_name}"):
                git.Git(tmp_dir).clone(repo)
            package_xml_list = glob.glob(f"{tmp_dir}/**/package.xml", recursive=True)
            for package_xml in package_xml_list:
                package_name = file_xpath(package_xml, "//name/text()")[0]
                generate_doc_from_dir(package_name, output_dir, os.path.dirname(package_xml), repo)
    for repo in repos:
        repo_dir_name = repo.split('/')[-1]
        # shutil.rmtree(f"{tmp_dir}/{repo_dir_name}", ignore_errors=True)
