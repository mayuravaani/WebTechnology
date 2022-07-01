<script>
   var res = "success";
</script>
<?php
  // echo "<script>document.writeln(res);</script>";
?>

<form >
Name:<input type="text" name="firstname" value="Rohit">
<!--<input type="submit" name="submit"> -->
</form>
<?php 
echo "welcome ".$_REQUEST["firstname"];

?>