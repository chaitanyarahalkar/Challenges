## Type Juggling 


PHP suffers from the type juggling vulnerability. More information can be found [here].(https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/Type%20Juggling)

Since the password is compared to a hash that starts with '0e', PHP interprets this as hash as a floating point number. 

The trick here is to find a string that generates a hash that begins with '0e' and is of the same hashing algorithm as the supplied has. 


Hint: Type Juggling

Flag: lakshya_CTF{7yp3_ju66l1n6_5cr3w3d_up}
