## Problem: Twinning

Are they the same person or is something different?

## Hint:

Try comparing the files using tools such as cmp, diff

## Explanation:

Some bits in the files are different.
To find the difference, type this command:

```
$ cmp -bl annie.jpg hallie.jpg
 11203 154 l    144 d
 11204 141 a    227 M-^W
 11205 153 k    310 M-H
 11206 163 s    362 M-r
 11207 150 h    250 M-(
 11208 171 y    165 u
 11209 141 a    202 M-^B
 11210 137 _    230 M-^X
 12085 103 C    344 M-d
 12086 124 T    364 M-t
 12087 106 F    122 R
 12088 173 {    214 M-^L
 17945 164 t    362 M-r
 17946 150 h    367 M-w
 17947  63 3    153 k
 17948 137 _    202 M-^B
 23044 160 p    355 M-m
 23045  64 4     63 3
 23046 162 r    316 M-N
 23047  63 3    165 u
 23048 156 n    223 M-^S
 23049 124 T    362 M-r
 23050 137 _    224 M-^T
 27199 164 t    205 M-^E
 27200 162 r    246 M-&
 27201  64 4    370 M-x
 27202 160 p    206 M-^F
 27203 175 }    234 M-^\
cmp: EOF on hallie.jpg after byte 118896
```

Flag: `lakshya_CTF{th3_p4r3nT_tr4p}`