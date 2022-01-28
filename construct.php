<?php
class student
{
    public $name;
    public $age;
    public $color;

    function __construct($name,$age,$color)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> color = $color;
    }

    function getname()
    {
        return $this->name;
    }
    function getage()
    {
        return $this->age;
    }
    function getcolor()
    {
        return $this->color;
    }

}
$a  = new student('tanmay','221','red');
$b  = new student('tesla','20','blue');

echo $a->getname();
echo $a->getcolor();
echo $a->getage()."<br>";

echo $b->getname();
echo $b->getcolor();
echo $b->getage();


?>