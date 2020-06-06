
## Problem: Where-are-the-attributes
Find the flag in additional metadata of the file.

## Hint: Lookout for extended attributes.

## Explanation:

Flag is stored in extended attributes of the text file : clue.txt

```
$more clue.txt
The flag is safe and secure in the comment section of an extended place, where it remains uninterpreted by the filesystem.
```

The attribute is set using:
```
$setfattr -n user.comment -v "lakshya_CTF{eXtend3d_4ttribut35_m4y_c0me_in_h4ndy}" clue.txt
```

The attribute can be displayed using:
```
$ getfattr -n user.comment clue.txt
# file: clue.txt
user.comment="lakshya_CTF{eXtend3d_4ttribut35_m4y_c0me_in_h4ndy}"
```

or
```
$attr -l clue.txt
Attribute "comment" has a 50 byte value for clue.txt

$ attr -g comment clue.txt
Attribute "comment" had a 50 byte value for clue.txt:
lakshya_CTF{eXtend3d_4ttribut35_m4y_c0me_in_h4ndy}
```
