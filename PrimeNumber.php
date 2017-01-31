<?php
 
function isPrime($num) {
    if($num == 1) {
        echo $num." is not a prime number";
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
    echo $num." is a prime number";
}
?>