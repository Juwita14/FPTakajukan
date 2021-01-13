from weasyprint import HTML
from pathlib import Path
import sys, requests

if(len(sys.argv) < 2):
    exit()

def makepdf(html):
    """Generate a PDF file from a string of HTML."""
    htmldoc = HTML(string=html, base_url="")
    return htmldoc.write_pdf()

infile = sys.argv[1]
outfile = sys.argv[2]
html = requests.get(infile).text
print(html)
pdf = makepdf(html)
Path(outfile).write_bytes(pdf)