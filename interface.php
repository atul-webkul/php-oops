<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($a,$b,$c)
    {
        $this->name = $a;
        $this->age = $b;
        $this->salary = $c;
    }
    function info(){
        echo "name ". $this->name."<br>";
        echo "name ". $this->age."<br>";
        echo "name ". $this->salary."<br>";
    }


}

class manager extends employee{
     

}

$c1 = new manager("atul",20,35000);
$c1->info();

?>