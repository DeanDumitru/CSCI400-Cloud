<?php
   if isset($_POST['submit']){
    $Fname = $_POST["author"];
    $email = $_POST["email"];
    $leader = $_POST["subject"];
    $industry = $_POST["text"];

    $openFile = fopen("contactLogs.txt",'a');
        $data = "\t"."{$Fname}";
        $data .= "\t"."{$email}";
        $data .= "\t"."{$leader}";
        $data .= "\t"."{$industry}";

    fwrite($openFile,$data);
    fclose($openFile);
}
?>