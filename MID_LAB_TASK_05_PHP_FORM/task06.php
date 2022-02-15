
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
 $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $bloodgroup = test_input($_POST["bloodgroup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>BLOOD GROUP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 

    <select name="bloodgroup">
							<option value=""></option>
                            <option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="O+">O+</option>
                            <option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="O-">O-</option>
                            						</select></br>
<input type="submit" name="submit" value="Submit">     
</form>


</body>
</html>
