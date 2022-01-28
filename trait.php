<?php 

trait message1
{
    public function display()
    {
        echo "display function";
    }
}

trait message2{
    public function show()
    {
     echo "show function ";
        }
    }

trait message3
{
    public function info($a,$b)
    {
     echo $a + $b;
   }

}

class Welcome {
    use message1;
  
}

class Welcome2{
   use message2;
}
class Add{
    use message3;
    
}

$ty = new Welcome();
 $ty->display();
$obj = new welcome2();
echo "<br>";
$obj->show();
$ad = new Add();
$ad->info(10,10);


?>