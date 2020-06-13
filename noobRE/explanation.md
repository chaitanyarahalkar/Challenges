## Problem: noobRE
The easiest part of reverse engineering is to use strings but can you find the right one?

## Hint:
Use tools like gdb or ghidra to see and decompile strings in the binary file.

## Explanation:

Run the strings command to get all the strings in the runme binary file. Alternatively, you can also use tools like ghidra to see and decompile strings in the binary file. You need to enter the right secret key to get the flag. So look for possible keys in the strings format.

`3AG135'5_3Y3` is the key which you will find in the strings output or in a variable after compiling in ghidra.
Enter the key and get the flag.

Flag: `lakshya_CTF{n00b5_0f_R3}`