<?php


if(isset($_POST['submit'])) {
 
$names = array("Dianna", "Edwin", "Serge", "Ashley", "Hermela", "Siyon", "Agnes","Khloe");
  $minimum = 5;  
  $maximum = 10;  
$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimum){
    
    echo "Username has to be longer than five";
    
    
}
    
if(strlen($username) > $maximum){
    
    echo "Username cannot be longer than ten!";
    
}
    
if(!in_array($username,$names)) {
     
   echo " and so sorry you are not allowed :(";
 }
    else {
    echo "Welcome";    
    }
 
    
    
    
    
    
//echo "Hello " .$username;
//echo " your password is " .$password;



}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
   
   
<input type="text" name="username"placeholder="Enter Username">
<input type="password" name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
</form>
   
</body>
</html>

