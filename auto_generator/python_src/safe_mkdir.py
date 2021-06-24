import os


def safe_mkdir(dir):
    try:
        os.mkdir(dir)
    except FileExistsError:
        pass
    except FileNotFoundError:
        safe_mkdir(os.path.dirname(dir))
        os.mkdir(dir)
