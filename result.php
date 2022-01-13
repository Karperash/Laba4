<?php
 
if (isset($_GET['submit']))

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
} 
    if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c) {
     
        $error_result = "operands must be numbers"; 
}
 

$p=($a+$b+$c)/2;
$s=sqrt($p*($p-$a)*($p-$b)*($p-$c));
 
if(isset($error_result)) {
    echo "mistake: $error_result";
        }    
    else {
    echo "Result =  $result";
 ?>