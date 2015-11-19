<html>
<head>
<title>enter the server id to monitor</title>

<?php
//script to enter the serverid to generate csv for the specific serverid

if($_POST['formSubmit'] == "Submit") 
  {
    
$server = $_POST['formtext'];
  
   include "genratecsv.php";
  }

?>
<form action="login.php" method="post">
 
<input type="text" name="formtext" maxlength="50">
 
<input type="submit" name="formSubmit" value="Submit">
</form>
</head>

</html>


