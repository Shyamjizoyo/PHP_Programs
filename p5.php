<?php 
$x=50;
$y=100;
$z=200;
function abc(){
    global $x;
    echo "<p> value of x inside function :$x</p>";
    $x = $x+100;
}
abc();
echo "<p> value of x outside function :$x</p>";
?>