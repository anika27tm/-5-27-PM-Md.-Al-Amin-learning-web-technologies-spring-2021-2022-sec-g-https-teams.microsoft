<!DOCTYPE html>
<html>
<head>
</head>
<body>  


<h2 style="text-align:left;"> NAME</h2></br>




<?php
$fnameErr  = $pErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fname"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
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


   <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
 


  


  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";


?>



