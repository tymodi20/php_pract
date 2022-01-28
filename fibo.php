<?php
function fibo($n)
{
$a = 0;
$b = 1;
echo "fibonacci series:";
echo $a ."  ".$b." ";
for($i=0;$i <= $n;$i++)
{ 

 
$c = $a + $b;
echo $c . " ";
$a = $b;
$b = $c;





}
}

fibo(8)
?>