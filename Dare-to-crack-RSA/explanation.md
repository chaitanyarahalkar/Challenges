## Problem Statement: Dare-to-crack-RSA

A plaintext message was encrypted twice using RSA algorithm. Once, it was encrypted using public key (n,e1), which gave ciphertext ct1. Another time it was encrypted using public key (n,e2), which gave ciphertext ct2. Can you figure out the plaintext?

```
ct1 = 49510902928510421799047501082367680905963751939213705352233627593607976175625096975769959313653250524320434594448458787627460050250031152633610497671860585274115780534889636642389014682500695818033649166708515548779492771966001556645792362792426525134407
ct2 = 25784197686505489225078080728960342887241742102189561819495595678973261644802936524609691905385244001154455693544083878359200918275331715694924828080154173140019815357764024886950058241002984195119427758087660518750352604837279880626891178596011131080921
n = 103109065902334620226101162008793963504256027939117020091876799039690801944735604259018655534860183205031069083254290258577291605287053538752280231959857465853228851714786887294961873006234153079187216285516823832102424110934062954272346111907571393964363
e1 = 15
e2 = 13
```


## Hint:
The extended Euclidean algorithm and modular exponentiation property can be useful to look at. Do not forget to convert the decimal plaintext into its hexadecimal equivalent before converting it to get an ascii string.


## Explanation:

By RSA algorithm:
```
ct1 = (pt)^e1 modn
ct2 = (pt)^e2 modn
```

Extended Euclidean algorithm: 
Given integers a and b, then there exist two integers x and y such that: `ax + by = gcd(a,b)`

`gcd(e1,e2) = gcd(15,13) = 1`
Therefore, `e1*x + e2*y = 1`
or	`x*15 + y*13 = 1`

We find that: `x = -6 y = 7`

Now,
```
(ct1^x * ct2^y)modn = [((pt^e1)modn)^x*((pt^e2)modn)^y]modn
```

By modular exponentiation property,
`[(a modm)*(b modm)]modm = c modm`
where `a*b = c`

Applying this property,
```
[((pt^e1)modn)^x*((pt^e2)modn)^y]modn = pt^(e1*x)*pt^(e2*y) modn
pt^(e1*x)*pt^(e2*y) modn = pt^(e1*x + e2*y) modn 
```
Since, `e1*x + e2*y = 1`
`pt^(e1*x + e2*y) modn = pt modn`

Therefore,
`(ct1^x * ct2^y)modn = pt modn`

We know that: `x = -6 y = 7`
which gives, `(ct1^-6 * ct2^7)modn = pt modn`

By modular exponentiation property,
```
(ct1^-6 * ct2^7)modn = [(ct1^-6 modn)*(ct2^7 modn)]modn
```
and
```
ct1^-6 modn = (((ct1^-1)modn)^6)modn
```
`(ct1^-1)modn` is the modular inverse of ct1

Final equation to be calculated becomes:
`[ (ct1^-1 modn)^6 modn * ct2^7 modn] modn`

It is calculated using:

```
from libnum import invmod, n2s, 
decimal_plaintext = (pow(invmod(ct1,n),6,n) * pow(ct2,7,n)) %n
ascii_plaintext = n2s(decimal_plaintext)
print(decimal_plaintext)
print(ascii_plaintext)
```
Output: 
```
2657483250954735372236349782878197697046264830200451907965
lakshya_CTF{cr4ck3d_RSA}
```
Flag: `lakshya_CTF{cr4ck3d_RSA}`
