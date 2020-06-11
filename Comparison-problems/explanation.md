## Problem: Comparison-problems

Either you know the password or you know how to bypass the password checks.

## Hint:
PHP strcmp == vulnerability

## Explanation:

`strcmp($pwd, $_GET['password']) == 0`
This is the line where the vulnerability exists and `$pwd` stores the flag value.

int strcmp ( string $str1 , string $str2 ) returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.

We need to force strcmp to return 0 so that the condition is satisfied. If we compare str1 ($pwd) with an Array (or an Object) instead of another string, it gives a warning AND it also returns 0 as if both the values were equal.

Now, we have to send an Array in the `password` GET parameter. We can send an array in this way:

`http://link.com/?password[]=""`

Flag: `lakshya_CTF{==i5_w34K}`
