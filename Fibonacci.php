<?php
$count = 0 ;
$f1 = 0;
$f2 = 1;
$limit = $_POST["limit2"]; 
echo $f1." , ";
echo $f2." , ";
while ($count < ($_POST["limit2"]-2) )
{
$f3 = $f2 + $f1 ;
echo $f3." , ";
$f1 = $f2 ;
$f2 = $f3 ;
$count = $count + 1;
}
?>