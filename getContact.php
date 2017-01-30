<?php
$name = $_POST['author'];
$email = $_POST['email'];
$fp = fopen("formdata.txt", "a");
$savestring = $name . "," . $email . "n";
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>Your information has been sent to customer service!</h1>";
?>