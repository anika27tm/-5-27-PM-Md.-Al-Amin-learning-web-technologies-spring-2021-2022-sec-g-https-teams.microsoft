<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2 style="text-align:left;"> DATE OF BIRTH</h2></br>




<?php
 $dob = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["dob"])) {
    $dobErr = "Date Of Birt is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }


  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

  <form style="text-align:left;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


  Date Of Birth:<input type="date"name="dob">
  <span class="error">* <?php echo $dobErr;?></span>
<br><br>

 

  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";

echo $dob;
echo "<br>";
?>


</body>
</html>
