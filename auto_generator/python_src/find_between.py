import re


def find_between(start, s, end):
    regex = (
        '(' + start + ')' +  # NOQA: W504
        '(((?!' + start + ').(?<!' + end + '))+)' +  # NOQA: W504
        '(' + end + ')'
    )
    # print(f"{regex=}")
    finding = re.findall(regex, s)
    if len(finding) == 0:
        return ''
    r = finding[0][1]
    # print(f"{s=}")
    # print(f"{finding=}")
    # print(f"{finding[0]=}")
    # print(f"{r=}")
    return r
