<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
    
echo rand(1, 1000);    
 
  
$string = "dianna is cool";
    
$i = strlen($string);
    

echo "<br>";   
    
    
echo $i;

    
    
$values = ["dianna", 11, "sweet", 2009, $string];   
    
$found = in_array($string,$values);    
    
    
if($found){
 
 echo "<br>";
    
    
echo "Dianna is the best gymnast in the world!";  
    
    
    
}    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>

    
   
 

    






</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>