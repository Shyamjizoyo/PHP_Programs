<?php 
$x=10;
$y=20;
$z=0;
function abc(){
  $GLOBALS['z'] =  $GLOBALS['x'] + $GLOBALS['y'];
}
abc();
echo $x;
echo $y;
echo $z;
?>

<!-- $GLOBALS is a PHP super global variable which is used to 
access global variables from anywhere in the PHP script
(also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. 
The index holds the name of the variable. -->