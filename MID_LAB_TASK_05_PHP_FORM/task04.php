<html>
<head>

</head>
<body>

<h2 style="text-align:left;"> Gender</h2></br>




<?php
 $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {



  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
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


  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $gender;
?>


</body>
</html>
