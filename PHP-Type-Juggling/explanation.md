## Problem: Juggling Code

PHP suffers from the type juggling vulnerability. Can you exploit it <a href="https://vast-stream-67888.herokuapp.com/" target="_BLANK">here</a>?  

## Hint: 
Type Juggling. The starting bits of the hash and the hashing algorithm used are of significance.

## Explanation:

Since the password is compared to a hash that starts with '0e', PHP interprets this hash as a floating point number. 

The trick here is to find a string that generates a hash that begins with '0e' and is of the same hashing algorithm as the supplied hash. 

Flag: `lakshya_CTF{7yp3_ju66l1n6_5cr3w3d_up}`
