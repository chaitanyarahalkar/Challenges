## Problem: Stealing assignments

Elliot hasn't submitted his assignment on <a href="https://desolate-shore-86376.herokuapp.com/">this</a> assignment submission portal yet. He wants to steal Whiterose's assignment. Help him do that. Elliot's username: elliot, password: elliot123. Whiterose's username: whiterose.

## Hint:

Keep a look at the URL which is generated after a successful login attempt. Is it fixed? Is there a pattern? encoding scheme?

## Explanation:

After successfully logging in, the user is sent to base64(username).php. Eg: After elliot enters valid credentials, he is sent to ZWxsaW90.php. Similarly, whiterose would be sent to d2hpdGVyb3Nl.php. We get whiterose's submission and also the flag.

Flag: `lakshya_CTF{whit3r0se_is_g0ing_d0wn}`


