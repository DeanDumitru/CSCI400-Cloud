<?php

$count = 0;
$number = $_POST["num"];

function isPrime($num) 
{  
    if($num == 1)
        return false;

    if($num == 2)
        return true;

    if($num % 2 == 0) {
        return false;
    }

    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
	
    return true;
}

for ($i = 0; $i <= 10001; $i++) 
{
	if(isPrime($i)==true)
		$count++;
	if($count == $_POST["num"])
	{
		echo "The prime number is " .$i;
		die();
	}
	
}

?>