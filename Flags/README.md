# Flags
This dir holds the flags of all the challenges and the explanation of steps to solve the challenges.<br>

## Challenges
### Title 
baked
### Category
Misc/Crypto
### Difficulty
Hard
### Description
Your friend who happens to be a chef was working on a top secret recipe but he accidently lost an important note he received from his boss. He however found a similar note in his boss's computer. The note is not readable which is why he needs your help. All he knows is the recipe was about a "cake" and his boss might have compressed the note and then might have manipulated bits with some "logic". Can you help your friend bake this cake and save his job?
### Hints
Use the popular tool CyberChef and some logical operation followed by some other decompression operation.
### Steps
1. Go to [CyberChef](https://gchq.github.io/CyberChef/) and upload the given note as input file.<br>
2. Apply XOR and provide the key as 'cake' as mentioned in the description.<br>
3. Apply unzip operation to find a file which contains the flag.<br>
![baked.png](https://github.com/chaitanyarahalkar/Challenges/blob/master/Flags/Files/baked.png)
### Flag
lakshya_CTF{b@k3d_w1th_luv}
<hr>

### Title
crap
### Category
Crypto
### Difficulty
Easy
### Description
Latine difficile intelligere. Even worse, to crack a gibberish code in latin!
### Hints
Use a cipher that can decipher latin gibberish
### Steps
1. Go to [decode.fr](https://www.dcode.fr/latin-gibberish) and look for latin gibberish cipher.<br>
2. Enter the ``` AYHSKALAE FTCUM NI7ALIT PARCUS ```  in the text to decipher box and decipher it.<br>
### Flag
lakshya_CTF{LA7IN_CRAP}
<hr>

### Title
dig
### Category
Crypto
### Difficulty
Easy
### Description
Remember your first phone?
### Hints
In the good old days, one had to press the '3' key thrice to get a 'f'!
### Steps
1. Use the keypad of old phones to decipher the text from the keys that are pressed or make use of phone keypad cipher from decode.fr <br>
![dig.png](https://github.com/chaitanyarahalkar/Challenges/blob/master/Flags/Files/dig.png)
### Flag
lakshya_CTF{sms_is_not_dead}
<hr>

### Title
DigitalStego
### Category
Crypto/Stego/Misc
### Difficulty
Medium
### Description
What's the easiest and 'quickest response' mechanism for doing some task? Even afer you get a quick response you might need to dig further say connect the chains!
### Hints
Scanning QR code gives you some text but what about something hidden in the code.jpg?
### Steps
1. Scan the QR code in the code.jpg file which will give you the text ``` lakshya_CTF ``` <br>
2. Use steghide tool in linux to extract the file stored in the code.jpg file.
```
$ steghide extract -sf code.jpg
```
It will ask for a passphrase which is nothing but the text ``` lakshya_CTF ``` obtained earlier.<br>
3. The file named flag will have the flag.
### Flag
lakshya_CTF{QR_C0D3_I5_FUN}
<hr>

### Title
drink
### Category
Crypto
### Difficulty
Easy
### Description
Some of the techniques in cryptography are real nice, but still aren't used so commonly. Can you find one such technique to get yourself the flag?
### Hints
Use a cipher named after a popular drink to decode and get the flag
### Steps
1. Go to a popular [site](https://asecuritysite.com/encryption/ferdecode) which can decode the fernet cipher. <br>
2. Enter the token (the larger string) and the key (the smaller string) and decode it to find the flag.
### Flag
lakshya_CTF{N07_U53D_A_L07}
<hr>

### Title
ForgetIt!
### Category
Misc/Crypto
### Difficulty
Medium
### Description
Programming languages help us build new things. Yeah, right but not all! Some are only to literally make you go around the 8th circle of Hell. Heard of esoteric stuff? Well, forget it!
### Hints
A language often termed as <i>8th circle of hell</i> will solve your problem!
### Steps
1. Use ``` base64 -d ``` to decode the text file named 'ForgetIt' which appears to be base64 encoded.<br>
![ForgetIt-1](https://github.com/chaitanyarahalkar/Challenges/blob/master/Flags/Files/ForgetIt-1.png)
2. Use a [Malbolge interpreter](http://www.malbolge.doleczek.pl/) and run the decoded code in it. <br>
![ForgetIt-2](https://github.com/chaitanyarahalkar/Challenges/blob/master/Flags/Files/ForgetIt-2.png)
### Flag
lakshya_CTF{35073RIC}
<hr>

### Title
FunnyCrypto
### Category
Crypto
### Difficulty
Easy
### Description
A lot of people believe that there isn't any difference between 'encoding' and 'encrypting', your boss being one of them! According to his 'encryption', he uses certain encoding technique twice, reverses the obtained result, again uses that encoding on the result and finally reverses the string before calling it 'encrypted'. 
Your task is to prove that his so called encryption is nothing but a fancy encoding!
### Hints
Plain text ---(logic)---> Encoded text ---(reverse logic)---> Plain text
### Steps
1. Go to [CyberChef](https://gchq.github.io/CyberChef/) and upload the flag file.<br>
2. Apply exactly reverse logic of what is mentioned in the description to encode the plain text.<br>
3. The sequence in which you need to follow is <br>
reverse - base64 -d - reverse - base64 -d - base64 -d
![FunnyCrypto](https://github.com/chaitanyarahalkar/Challenges/blob/master/Flags/Files/FunnyCrypto.png)
### Flag
lakshya_CTF{3NC0DIN6!=3NCRYP7IN6}
<hr>

### Title
input
### Category
Crypto
### Difficulty
Easy
### Description
Keyboards are perhaps the most common way to input data. They have so many different forms, layouts, textures, alignments. Thou shalt not get thy mind bewildered!
### Hints
Try to understand which keyboard layout has been used to write the text and convert it into the one which you are confortable reading.
### Steps
1. Use ``` base64 -d ``` to decode the log file.<br>
2. The obtained text is written in dvorak layout which needs to converted to qwerty.<br>
3. Go to any [site](https://awsm-tools.com/text/keyboard-layout) that can convert a dvorak text to it's equivalent qwerty.
### Flag
lakshya_CTF{50M3_01d_WAY5} 
<hr>

### Title
music
### Category
Crypto/Stego/Misc
### Difficulty
Medium
### Description
Could you figure out the music theme? Then you must of seen 'A scandal in Belgravia'! Do you remember the last word of Irene Adler's pass phrase?
### Hints
So you got the hidden wav file? Great, now find whats hidden inside the wav file!
### Steps
1. Locate the file named ``` .sherlock.wav ``` which is hidden.<br>
2. Use steghide to find what is hidden inside the wav file.
```
$ steghide extract -sf .sherlock.wav
```
3. It will ask for a passphrase which according the description is <i>'sherlocked'</i><br>
4. You will find a pdf named ``` stegged_flag.pdf ``` after you successfully extract the contents of the wav file.<br>
5. It appears to be password protected. We need to crack the password of the pdf. Use ```pdfcrack``` for this and launch a dictionary attack using <i>rockyou.txt</i>
```
$ pdfcrack -f stegged_flag.pdf -w /usr/share/wordlists/rockyou.txt
```
6. Open the pdf and zoom in to get the flag.
### Flag
lakshya_CTF{MU5IC_C@N_B_573GG3D}
<hr>

### Title
noobRE
### Category
Reverse/Misc
### Difficulty
Easy
### Description
The easiest part of RE is to use strings but there are so many ways to do RE!
### Hints
You need a key right? So many ways out there to find strings but you need to look closely.
### Steps
1. Run the ``` strings ``` command to get all the strings in the runme binary file. Alternatively, you can also use tools like ``` ghidra ``` to see and decompile strings in the binary file.<br>
2. You need to enter the right secret key to get the flag. So look for possible keys in the strings format.<br>
3. ``` 3AG135'5_3Y3 ``` is the key which you will find in the strings output or in a variable after compiling in ghidra.<br>
4. Enter the key and get the flag.<br>
### Flag
lakshya_CTF{n00b5_0f_R3}
<hr>

### Title
Obfuscation
### Category
Stego/Misc
### Difficulty
Hard
### Description
Not always shall you see what's beneath a code but should you see it, a simple print would serve you what you need! 
### Hints
Image in an image and code in a code, figure out which is the language that used to code!
### Steps
1. Use ``` binwalk ``` to extract the files embedded in the image file.
```
$ binwalk -e jewellery.png
```
2. You will get an image which has a QR code. Scan it to get a script written in certain language.<br>
3. The script which you will be getting is 
```
$__xA081 = "615f4354467b";
$__xA082 = "304246553543"; 
$__xA083 = "6c616b736879"; 
$__xA084 = "343733447d"; 
$__xA086 = $__xA083.$__xA081.$__xA082.$__xA084;
$__xA086 =~ s/([a-fA-F0-9][a-fA-F0-9])/chr(hex($1))/eg;
```
4. This happens to be perl script which has unusual varibale names storing some strings. The variable ``` $__xA086 ``` contains a string which is obtained by concatenating some strings declared before. 
5. The last line converts every hex character into int and further gives ASCII char of that int value. So we have to just obtain the value of variable ``` $__xA086 ``` after it has converted the hex string to readable ASCII.
6. This can be done by simply adding a print statement at the last line of the perl code.
```
print $__xA086;
```
Thus the final code becomes
```
$__xA081 = "615f4354467b";
$__xA082 = "304246553543"; 
$__xA083 = "6c616b736879"; 
$__xA084 = "343733447d"; 
$__xA086 = $__xA083.$__xA081.$__xA082.$__xA084;
$__xA086 =~ s/([a-fA-F0-9][a-fA-F0-9])/chr(hex($1))/eg;
print $__xA086;
```
7. Run the perl script now 
```
$ perl Obfuscation.pl
```
8. You will get the flag on successfull execution.
### Flag
lakshya_CTF{0BFU5C473D}
<hr>

### Title
systematize
### Category
Crypto/Misc
### Difficulty
Easy
### Description
Sometimes the truth is right next to your eyes! You just need to get your text in the right order ;-)
### Hints
Arrange the characters in the correct vertical order to get what you want!
### Steps
Arrange every character in the a correct vertical order by giving line breaks at correct intervals.<br>
![systematize.png](https://github.com/chaitanyarahalkar/Challenges/blob/master/Flags/Files/systematize.png)  
### Flag
lakshya_CTF{G37Y0UR73X7IN7H3RIGH70RD3R}
<hr>

### Title
USofA
### Category
Misc
### Difficulty
Easy
### Description
FDR, an amazing democratic leader who gave his country a rise from economic depression and led into the victory in WW2. Every president has his own contributions to the greatest democracy on the face of this planet.
### Hints
Doing repetitive things? You can think of writing a script that can do the same task of unzipping once you know the pattern of password!
### Steps
1. Use ``` fcrackzip ``` to crack password of the zip file herbert.zip using <i>rockyou.txt</i>. The zip file contains another zip file named franklin.zip which is also password protected.<br>
2. You can also guess that the password for herbert.zip is <i>franklin</i>. In the similar way, every zip file obtained in the process is protected by a password which happens to be the name of zip file it has compressed. The passwords form a pattern which is sequence subsequent of American presidents since Franklin D. Roosevelt. <br>
3. To do the same task for so many times can be avoided by writing a script in any of your favourite programming language. I have wrote the following script 
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
4. On successful execution of this script you shall have a zipped file named barack.zip which contains a file named <i>donald</i>. Trying the password 'donald' works. One can also use dictionary attack.<br>
5. The file obtained at last has a base64 encoded string which on decoding gives the flag.
### Flag
lakshya_CTF{PR35ID3N7IAL_L00P}
<hr>

### Title
### Category
### Description
### Hints
### Steps
### Flag
<hr>

### Title
### Category
### Description
### Hints
### Steps
### Flag
<hr>

### Title
### Category
### Description
### Hints
### Steps
### Flag
<hr>
