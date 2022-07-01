<?php 
	print "Hello";
	echo "<h2>Php is fun </h2>";
	echo "<h1>","welcome ", "to ", " web", " ", "Technology", "</h1>";
	$var1 = "hi there!";
	$var2 = "I am from sri lanka!";
	print $var2." ".$var1;
	echo "$var1 $var2 !!!!";
	print("okkk");
	define("my_const", 19); 
	print(my_const);
	$var3 = 0.9;
	echo gettype($var3), "<br>";
	$var4 = "8";
	$var5 = 8;
	echo gettype($var4)." <br>";
	echo 'Hrrlo $var5!';
	
	

function myTest($m=0.6) {
echo "ok".$m;
}

myTest();
echo"=================================<br>";
myTest(7);
echo $y; // outputs 15

	#comment
	//comment
	/* jnkjnkjn
	nknnmn,mn
	*/
	
	$my_name = "Sammy";
echo 'Name is specified using the variable $my_name.';
echo "\n"; // escape sequence for newline character
echo "Hello, my name is $my_name. It's stored in the variable \$my_name.";
echo "hello\r";
echo "he\rllo";
echo "<br>";
echo "<br>";
echo Date("today"); 
?>