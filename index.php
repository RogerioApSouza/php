<?php
	/*emplo de código utilizando variável declarada a partir 
	  de outra variável
	*/
	echo "<h1>Hello World!</h1><br>";
	$hello = "Hello";
	$world = "world";
	echo "<h1>$hello $world!</h1>";
	$$hello = "Olá mundo!";
	echo "<br>";
	echo "$Hello";
?>
