<?php
if(isset($_POST['Name']) && isset($_POST['Email]) ) {
    $data = $_POST['Name'] . '-' . $_POST['Email'] . "\n";
    $ret = file_put_contents('/tmp/www/ContactData/ContactLog.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}