<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2 style="text-align:left;"> DEGREE</h2></br>


<?php
Education = "";

  if (empty($_POST["Education"])) {
    $EducationErr = "Education is required";
  } else {
    $Education = test_input($_POST["Education"]);
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


<form action="/action_page.php">
  <input type="checkbox" id="ssc" name="ssc" value="education">
  <label for="ssc"> SSC</label><br>
  <input type="checkbox" id="hsc" name="hsc" value="education">
  <label for="hsc"> HSC</label><br>
  <input type="checkbox" id="bsc" name="bsc" value="education">
  <label for="bsc"> BSc</label><br>
    <input type="checkbox" id="msc" name="msc" value="education">
  <label for="msc"> MSc</label><br>
 
</form> 


  <input type="submit" name="submit" value="Submit">  
</form>


<?php

echo $Education;
?>


</body>
</html>
