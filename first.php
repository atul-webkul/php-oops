<?php  

class calculations{

    public $a, $b, $c;

    function sum(){
        $this->c = $this->b + $this->a;

        return $this->c;
     }

     function sub(){
        $this->c = $this->b- $this->a;
        return $this->c;

     }
}

$c1 = new calculations();
$c1->a = 20;
$c1->b = 30;
echo "sum = ". $c1->sum() . "<br>";

$c2 = new calculations();
$c2->a = 20;
$c2->b = 30;
echo "sub = ". $c1->sub();


?>