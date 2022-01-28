<?php 
function fact($n)
{       

$fact= 1;
    for($i=1;$i<=$n;$i++)
    {      
            $fact = $fact * $i;
           
    }
    echo $fact ."<br>";
}
fact(6);
?>