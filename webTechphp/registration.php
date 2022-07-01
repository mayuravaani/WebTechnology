
<html>
 <head>
 <title>Membership Form</title> 
 </head>
 <body>
 <h1>Membership Form</h1>
 To register, please fill
in your details below and click Send Details.</p>
 <form action="process_registration.php" method="post">
 
 <label for="firstName">First name: </label>
 <input type="text" name="firstName" />
 <br><br>
 <label for="lastName">Last name: </label>
 <input type="text" name="lastName" />
 <br><br>
 <label for="genderDetail">Gender: </label>
  <label for="male">Male</label>
 <input type="radio" name="gender" value="Male" />
 <label for="female">Female</label>

 <input type="radio" name="gender" value="Female" />
 <br><br>
 <label for="following course">which course are you following at UoJ ?</label>
 <select name="course">
 <option value="Computer Science">Computer Science</option>
 <option value="Physical Science">Physical Science</option>
 <option value="Bio Science">Bio Science</option>
 </select>
 <br><br> 
 <label for="selection unit"> Select course unit: </label><br>
	<input type="checkbox" name="unit[]" value="csc123">
  <label for="CSC123"> CSC123</label><br>
  <input type="checkbox" name="unit[]" value="csc234">
  <label for="CSC234"> CSC234</label><br>
  <input type="checkbox" name="unit[]" value="csc456">
  <label for="CSC456"> CSC456</label><br><br>
 <label for="password">Password: </label>
 <br><br>
 <input type="password" name="psw">
 <br><br>
 <input type="submit" name="submitButton" />
 <input type="reset" name="resetButton" id="resetButton" 
style="margin-right: 20px;" />
 <?php echo print_r(getallheaders()); ?>
 <?php echo print_r(headers_list()); ?>
 
 </form>