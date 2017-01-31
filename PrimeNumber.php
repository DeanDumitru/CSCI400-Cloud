<?php
 $number = $_POST["num"]; 

    if($_POST["num"] == 1) {
        echo $_POST["num"]." is not a prime number";
    }
	
	if($_POST["num"] < 1) {
        echo $_POST["num"]." is not a prime number";
    }

    if($_POST["num"] == 2) {
        echo $_POST["num"]." is a prime number";;
    }

    if($_POST["num"] % 2 == 0) {
        echo $_POST["num"]." is not a prime number";
    }

    for($i = 3; $i <= ceil(sqrt($_POST["num"])); $i = $i + 2) 
	{

        if($_POST["num"] % $i == 0)

            echo $_POST["num"]." is not a prime number";
			die("");
    }
    echo $_POST["num"]." is a prime number";
?>