<?php
$authors = array("abc", "def", "ghi");

foreach($authors as $author) {
	echo $author."<br>";
}
echo current($authors)."<br>";
//echo prev($authors). "<br>";
echo next($authors)."<br>";
echo prev($authors)."<br>";
echo end($authors)."<br>";

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
foreach($keys as $key=>$value) {
	echo "$key  mm  $value  <br>";
}
$values = array(
    "field1value"=>"apple",
    "field2value"=>"orange",
    "field3value"=>"graphes"
);
$keysAndValues = array_combine( array_values( $keys ), array_values( $values ) );
print_r($keysAndValues);

?>