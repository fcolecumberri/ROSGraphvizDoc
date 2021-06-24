from pathlib import Path
from io import StringIO
from lxml import etree


def file_xpath(filename, xpath):
    xml_content = Path(filename).read_text()
    return etree.parse(StringIO(xml_content)).xpath(xpath)
