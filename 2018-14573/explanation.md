## Problem: 2018-14573

This website seems to show product details. Try searching for product id 1 or 2, to get an idea. But, can it show more than that?

## Hint: 
CVE-2018-14573

## Explanation:

Local file inclusion (LFI):
The php file contains `include($file)` which has the LFI vulnerability. It simply displays whatever the user enters into $file through the id field. By entering `flag.txt`, the flag file is rendered.