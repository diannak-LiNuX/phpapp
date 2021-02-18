<?php


if(isset($_POST['submit'])) {
 
$names = array("Dianna", "Edwin", "Serge", "Ashley", "Hermela", "Siyon", "Agnes","Khloe");
  $minimum = 5;  
  $maximum = 10;  
$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimum){
    
    echo "Username has to be longer than five, ";
    
    
}
    
if(strlen($username) > $maximum){
    
    echo "Username cannot be longer than ten,";
    
}
    
if(!in_array($username,$names)) {
     
   echo " Very sorry to say but you are not allowed :(..Try again though!";
 }
    else {
    echo "Welcome";    
    }
 
    
    
    
    
    
//echo "Hello " .$username;
//echo " your password is " .$password;



}

?>



