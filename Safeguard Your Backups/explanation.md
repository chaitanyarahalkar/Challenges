## Problem: Safeguard Your Backups

We found a lost backup on an old machine. You shall find here, what you seek.

## Hint:

Look out for Linux backup commands

## Explanation:

This is a Linux EXT-4 file system backup taken using the `dump` utility in Linux. It is available by default on RHEL-based distros. 

Install it on Debian-based distros using 

```bash
lakshya@ctf$ sudo apt install dump
```

Now run the following commands to restore the backup and get the Linux file tree
```bash
lakshya@ctf: mkdir restore && cd restore
lakshya@ctf$ restore -rf linfs.back
lakshya@ctf$ ls -l home/lakshya/
```
flag.pdf file exists in the lakshya home directory. 

Flag: `lakshya_CTF{kn0W_y0Ur_84CkuP2}`
