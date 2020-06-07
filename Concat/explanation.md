## Problem: concat

You have all the parts of the puzzle. Join (in the right order) to get flag.

## Hint:
Check the type and the size of the files you are dealing with. Concatenate them in the right order to get the flag. 


## Explanation:

You have to concatenate the files together. The files are named: flag, get, join, to. With a little bit of fiddling, we find a meaningful phrase out of these filenames which is : join to get flag
`cat` command is used to concatenate the files and the output is stored into flag.jpeg

```
cat join to get flag > flag.jpeg
```

Opening `flag.jpeg` we get the flag as:
`lakshya_CTF{c4t_G0t_m3}`