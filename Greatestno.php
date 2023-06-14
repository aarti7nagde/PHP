<?php
$a = 10;
$b = 5; 
$c = 15;

if($a > $b && $a > $c)
    echo "Among ".$a.", ".$b." and ".$c.", the greatest number is : ".$a;
else if($b > $a && $b > $c)
    echo "Among ".$a.", ".$b." and ".$c.", the greatest number is : ".$b;
else
    echo "Among ".$a.", ".$b." and ".$c.", the greatest number is : ".$c;
?>
