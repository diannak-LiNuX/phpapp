<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
      
<?php
    
function addnumbers($number1, $number2){
$sum = $number1 + $number2; 
     
return $sum;

    
}
    
$result = addNumbers(34,54);   

$result = addNumbers(120, $result);
    
echo $result
    
    
    
?>
       
    
      

</body>
</html>