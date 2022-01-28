

<?php 
if(isset($_POST['add']))
{
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    add($n1,$n2);   
}

if(isset($_POST['sub']))
{
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    sub($n1,$n2);
}
if(isset($_POST['mul']))
{
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    mul($n1,$n2);
}

if(isset($_POST['div']))
{
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    div($n1,$n2);
}



function add($a,$b) 
{
    echo $a + $b ; 
}

function sub($a,$b)
{
    echo $a - $b ; 
}

function mul($a,$b)
{
    echo $a * $b ; 
}

function div($a,$b)
{
    echo $a / $b ; 
}





?>
