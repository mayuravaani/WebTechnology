<html>
	<head>
		<title>Thank You</title>
	</head>
	<body>
		<h1>Thank You</h1>
		<p>Thank you for registering. Here is the information you submitted.</p>
		<?php $units = "";
			if ( isset( $_POST["unit"] ) ) {
				foreach ( $_POST["unit"] as $unit ) {
					$units .= $unit . ", ";
				}
		} ?>
	<table border=1; style="border-collapse:collapse;">
		<tr><td>First name: </td><td><!-- echo first name --><?php if(isset($_POST["firstName"])) echo $_POST["firstName"];?></td></tr>
		<tr><td>Last name: </td><td><!-- echo last name--><?php echo $_POST["lastName"] ?></td></tr>
		<tr><td>Gender: </td><td><!-- echo male or female --><?php echo $_POST["gender"] ?></td></tr>
		<tr><td>Following course: </td><td><!-- echo course --><?php echo $_POST["course"] ?></td></tr>
		<tr><td>Course unit: </td><td><!-- echo course --><?php 
		echo substr_replace($units,"", strlen($units)-2); ?></td></tr>
	</table>
	<?php echo print_r(getallheaders()); ?>
	<br>
	<?php echo print_r(headers_list()); 
		$fp = fopen('requests.txt', 'a');
$time = $_SERVER['REQUEST_TIME'];
fwrite($fp, $time."/n"
);
echo "$time.<br>";
foreach (getallheaders() as $name => $value) {
    $cur_hd = "$name: $value\n";
    fwrite($fp, $cur_hd);
    echo "$cur_hd.<br>";
}
fwrite($fp, "***\n");
fclose();?>

<?php 
		echo header('Location: http://localhost/webtech/process_registration.php')."<br>";
		echo header('Location: http://localhost/webtech/registration.php')."<br>";
		
		?>
	</body>
</html>