<html>
<head>
</head>
<body>  


<h2 style="text-align:left;"> Email </h2></br>




<?php
 $emailErr = $pErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
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



    <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">  
</form>

<a href="task2.php"><button>go</button></a>
<?php
echo "<h2>Your Input:</h2>";

echo $email;

?>

