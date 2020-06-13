## Problem: 2018-14573

This website seems to show product details. Try searching for product id 1 or 2, to get an idea. But, can it show more than that? Something like /home/lakshya/flag.txt? 

## Hint: 
CVE-2018-14573

## Explanation:

Local file inclusion (LFI):
The php file contains `include($file)` which has the LFI vulnerability. It simply displays whatever the user enters into $file through the id field. By entering `/home/lakshya/flag.txt`, the flag file is rendered.

Flag: `lakshya_CTF{s0_y0u_s4w_th3_l0c4l_fiL3}`
