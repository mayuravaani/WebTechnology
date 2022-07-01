<html>
<body>
<?php
$myfile = fopen("mmv.txt","r");// or die("Unable to open file!");
echo fread($myfile,filesize("mmv.txt"));
fclose($myfile);
$mys = "hello world hello hello world";
echo "<br>",strstr($mys, "ld", true);
echo "<br>",substr_count($mys, "ld", true);
echo "<br>",str_replace("hello", "hi", $mys);
$my = "012345555555556789";
echo "<br>",substr_replace($my, "hi", 3, -2);
$arr = array("a", "b", "c");
foreach($arr as $x) {
	echo $x. "<br>";
}
?>
</body>
</html>