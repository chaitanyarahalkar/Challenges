## Problem Statement: 'E'asy-RSA
```
n = 103109065902334620226101162008793963504256027939117020091876799039690801944735604259018655534860183205031069083254290258577291605287053538752280231959857465853228851714786887294961873006234153079187216285516823832102424110934062954272346111907571393964363630079343598511602013316604641904852018969178919051627
ct (cipher text) = 2044206324135355538099695631677009319601981
e = 3
```
Can you find the plaintext?

Please note: The flag is in the format lakshya_CTF{plaintext}. If plaintext is "rsa", then flag is lakshya_CTF{rsa}

## Hint: 
Something is really small here. Don't forget to convert the obtained plaintext (in decimal format) to its hexadecimal equivalent before converting it to ascii. 

## Explanation:

```
ct = (pt)^e modn
e = 3
ct = pt^3 modn
```
Since e is small,

`ct = pt^3`

```
import gmpy2
gs = gmpy2.mpz(ct)
ge = gmpy2.mpz(e)

root, exact = gmpy2.iroot(gs, ge)
print(hex(root))

```

Output: 0x736d616c6c45

ascii of `0x736d616c6c45` is `smallE`

Therefore flag is `lakshya_CTF{smallE}`
