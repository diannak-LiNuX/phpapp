<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if(10 === 1){
    
echo "ten is less than one";
    
}   elseif( 4 == 5) {
        
        echo "four is more than five ";
    }

else {
    
    
    echo "I love PHP ";  
}
 echo "<br>";   
    
 for($champion = 1; $champion < 11; $champion++){
    echo $champion . "<br>";   
    
 }

    
$number = 100;

switch($number){
        
case 34:
echo "it is 34"
break;
case 34:
echo "it is 34"
break;
case 34:
echo "it is 34"
break;        
case 34:
echo "it is 34"
break;          
case 34:
echo "it is 34"
break;    
    
    
    
    
    
    
    
    
    
    
    
    
    
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>