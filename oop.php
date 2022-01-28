<?php 
class student 
{
    public $name;
    public $age;
    public $color;
   function setname($name)
   {
       $this->name = $name;

   }
   function setcolor($color)
   {
       $this->color = $color;

   }

   function setage($age)
   {
       $this->age = $age;

   }

   function getname()
   {<!-- <?php
    class cars {
      public $name;
      public $color;
      public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
      public function intro() {
        echo "The cas is ....$this->name and the color is {$this->color}.";
      }
    }
    
    // Strawberry is inherited from Fruit
    class vehicle extends cars {
      public function message() 
      {
        echo "this is your vehicle-..-.- ";
      }
    }
    $vehicle = new vehicle("tesla", "red");
    $vehicle->message();
    $vehicle->intro();
    ?> -->
   function getcolor()
   {
       return $this->color;
   }

   function getage()
   {
       return $this->age;
   }
   
}

$ty = new student();
$a = new student();

$ty->setname('tanmay');
$ty->setcolor('blue');
$ty->setage('21');

$a->setname('grenina');
$a->setcolor('red');
$a->setage('31');

echo $a->getname()."<br>";
echo $a->getcolor()."<br>";
echo $a->getage()."<br>";


echo $ty->getname();
echo $ty->getcolor();
echo $ty->getage();

?>
// <!-- <?php
// class cars {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The cas is ....$this->name and the color is {$this->color}.";
//   }
// }

// // Strawberry is inherited from Fruit
// class vehicle extends cars {
//   public function message() 
//   {
//     echo "this is your vehicle-..-.- ";
//   }
// }
// $vehicle = new vehicle("tesla", "red");
// $vehicle->message();
// $vehicle->intro();
// ?> -->