<?php
class person{

    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
        
    }

    function show(){
    echo "name = ". $this->name . "age = ". $this->age;
    }
}
$p1 = new person("atul",20);
$p1->show();
?>