## Problem: USofA
FDR, an amazing democratic leader who gave his country a rise from economic depression and led into the victory in WW2. Every president has his own contributions to the greatest democracy on the face of this planet.

## Hint:
Doing repetitive things? You can think of writing a script that can do the same task of unzipping once you know the pattern of password! Also, fcrackzip may be useful!

## Explanation:

Use fcrackzip to crack password of the zip file herbert.zip using rockyou.txt. The zip file contains another zip file named franklin.zip which is also password protected. You can also guess that the password for herbert.zip is franklin. In the similar way, every zip file obtained in the process is protected by a password which happens to be the name of zip file it has compressed. The passwords form a pattern which is sequence subsequent of American presidents since Franklin D. Roosevelt.
To do the same task for so many times can be avoided by writing a script in any of your favourite programming language. I have wrote the following script

```
unzip_all() {
	zipfile="$1"
	next_zipfile="$(unzip -Z1 "$zipfile" | head -n1)"
	if echo "$next_zipfile" | grep "\.zip$"; then
		unzip -P "${next_zipfile%%.*}" "$zipfile"
		unzip_all "$next_zipfile"
	fi
}
unzip_all "herbert.zip"
```
On successful execution of this script you shall have a zipped file named barack.zip which contains a file named donald. Trying the password 'donald' works. One can also use dictionary attack.
The file obtained at last has a base64 encoded string which on decoding gives the flag.

Flag: `lakshya_CTF{PR35ID3N7IAL_L00P}`