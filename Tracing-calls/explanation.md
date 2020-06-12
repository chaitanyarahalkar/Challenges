## Problem: Tracing-calls

To know the password, try checking the calls that this executable makes.

## Hint: 
ltrace

## Explanation:

```
$ ./script
Enter the password!
1234
Incorrect password
$ ltrace ./script
fopen("phrase.txt", "r")                                                  = 0x7fffcb2752a0
fgets("gimmetheflag", 48, 0x7fffcb2752a0)                                 = 0x7fffd2e60ca0
puts("Enter the password!"Enter the password!
)                                               = 20
__isoc99_scanf(0x7f27f03b708d, 0x7fffd2e60cd0, 0, 01234
)                      = 1
strcmp("gimmetheflag", "1234")                                            = 54
puts("Incorrect password"Incorrect password
)                                                = 19
+++ exited (status 0) +++
$ ./script
Enter the password!
gimmetheflag
lakshya_CTF{ac3d_ltr4c3}
```

Flag: `lakshya_CTF{ac3d_ltr4c3}`
