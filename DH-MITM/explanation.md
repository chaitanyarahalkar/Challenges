## Problem: DH-MITM

Diffie–Hellman is pretty secure. But, when it comes to the man-in-the-middle attack, problems arise. You (attacker) are conducting the man-in-the-middle attack. You generate shared keys with both A and B. Using this shared key, A and B send you two ciphertexts (encrypted using AES 128 bit key) `dYGU3Bzxhz6cpmB++E6wrRzzYk2IFsc8w5rk5ARsrXI=` and `LzldIUuFTY+k4GG4brJRqQ==`. Decrypt the data from each party, to get the flag.

## Hint:
Using the given information in the diagram, calculate the shared keys between you (attacker) and A, and you (attacker) and B. Decrypt the ciphertexts received from A and B using the respective shared keys. Use https://aesencryption.net/ site for decryption.

## Explanation:

Given: `g=10 p=541`

A: public key (A) = 260
B: public key (B) = 183
You: private key (x) = 701, public key (X) = 410

Shared key between you and A = A^x modp = 260^701 mod541 = 424

Shared key between you and B = B^x modp = 183^701 mod541 = 523

Encrypted Data from A = `dYGU3Bzxhz6cpmB++E6wrRzzYk2IFsc8w5rk5ARsrXI=`
(AES 128 bit key=424)
Decrypting it, we get `lakshya_CTF{m4N_1n_tH3_ `

Encrypted Data from B = `LzldIUuFTY+k4GG4brJRqQ==`
(AES 128 bit key= 523)
Decrypting it, we get `m1Ddl3_4tt4ck}`

Flag: `lakshya_CTF{m4N_1n_tH3_m1Ddl3_4tt4ck}`




