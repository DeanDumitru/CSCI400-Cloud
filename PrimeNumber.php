<?php
<<<<<<< HEAD
 $number = $_POST["num"]; 
<<<<<<< HEAD

    if($_POST["num"] == 1) {
        echo $_POST["num"]." is not a prime number";
		die("");
    }
	
	if($_POST["num"] < 1) {
        echo $_POST["num"]." is not a prime number";
		die("");
    }

    if($_POST["num"] == 2) {
        echo $_POST["num"]." is a prime number";
		die("");
    }

    if($_POST["num"] % 2 == 0) {
        echo $_POST["num"]." is not a prime number";
		die("");
    }

    for($i = 3; $i <= ceil(sqrt($_POST["num"])); $i = $i + 2) {

        if($_POST["num"] % $i == 0)
		{
            echo $_POST["num"]." is not a prime number";
			die("");
		}
    }
    echo $_POST["num"]." is a prime number";
	die("");

=======

    if($_POST["num"] == 1) {
        echo $_POST["num"]." is not a prime number";
    }
	
	if($_POST["num"] < 1) {
        echo $_POST["num"]." is not a prime number";
=======
 
function isPrime($num) {
    if($num == 1) {
        echo $num." is not a prime number";
>>>>>>> origin/master
    }

    if($num == 2) {
        echo $num." is a prime number";;
    }

    if($num % 2 == 0) {
        echo $num." is not a prime number";
    }

    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {

        if($num % $i == 0)

            echo $num." is not a prime number";
    }
<<<<<<< HEAD
    echo $_POST["num"]." is a prime number";
>>>>>>> origin/master
=======
    echo $num." is a prime number";
}
>>>>>>> origin/master
?>