## Problem: Obfuscation
Not always shall you see what's beneath a code, but, should you see it, a simple print would serve you what you need!

## Hint:
Use binwalk to extract files from the image. Figure out which is the language used in the script file. Then manipulate it and get the flag.

## Explanation:

Use binwalk to extract the files embedded in the image file.
`$ binwalk -e jewellery.png`

You will get an image which has a QR code. Scan it to get a script written in certain language.

The script which you will be getting is
```
$__xA081 = "615f4354467b";
$__xA082 = "304246553543"; 
$__xA083 = "6c616b736879"; 
$__xA084 = "343733447d"; 
$__xA086 = $__xA083.$__xA081.$__xA082.$__xA084;
$__xA086 =~ s/([a-fA-F0-9][a-fA-F0-9])/chr(hex($1))/eg;
```

This happens to be perl script which has unusual varibale names storing some strings. The variable `$__xA086` contains a string which is obtained by concatenating some strings declared before.
The last line converts every hex character into int and further gives ASCII char of that int value. So we have to just obtain the value of variable `$__xA086` after it has converted the hex string to readable ASCII.

This can be done by simply adding a print statement at the last line of the perl code.

`print $__xA086;`

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

Run the perl script now
`$ perl Obfuscation.pl`
You will get the flag on successfull execution.

Flag: `lakshya_CTF{0BFU5C473D}`