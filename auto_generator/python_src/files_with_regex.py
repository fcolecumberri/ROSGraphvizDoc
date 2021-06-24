import os
import re


def files_with_regex(path, regex):
    res = []
    # print(f"{path=}")
    for root, dirs, fnames in os.walk(path):
        # print(f"{root=}")
        # print(f"{dirs=}")
        # print(f"{fnames=}")
        for fname in fnames:
            full_fname = os.path.join(root, fname)
            if os.path.isfile(full_fname):
                try:
                    # print(f"{full_fname=}")
                    content = open(full_fname, 'r').read()
                    # print(f"{content=}")
                    if re.search(regex, content):
                        res.append(full_fname)
                except UnicodeDecodeError:
                    pass
    return res
