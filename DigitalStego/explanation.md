## Problem: DigitalStego
What's the easiest and 'quickest response' mechanism for doing some task? Even after you get a quick response you might need to dig further.

## Hint:
The result you get after scanning the QR code is the passphrase for the next decoding procedure.

## Explanation:

Scan the QR code in the code.jpg file which will give you the text `lakshya_CTF`.

Use `steghide` tool in linux to extract the file stored in the code.jpg file.

`$ steghide extract -sf code.jpg`

It will ask for a passphrase which is nothing but the text `lakshya_CTF` obtained earlier.

The file named flag will have the flag.

Flag: `lakshya_CTF{QR_C0D3_I5_FUN}`