<?php
define('PI','3.14');
$l=$_POST['l'];
$b=$_POST['b'];
$s=$_POST['s'];
$r=$_POST['r'];

interface Area
{
    public function area();
}

class Rectangle implements Area
{
    protected $l,$b;
    function __construct($l,$b)
    {
        $this->l=$l;
        $this->b=$b;
    }
    function area()
    {
        return $this->l*$this->b;
    }
}

class Square extends Rectangle
{
    function __construct($l)
    {
        parent::__construct($l,$l);
    }
}

class Circle implements Area
{
    protected $r;
    function __construct($r)
    {
        $this->r=$r;
    }

    function area()
    {
        return PI*$this->r*$this->r;
    }
}

$obj=new Rectangle($l,$b);
$r1=$obj->area();
echo"Area of Rectangle =$r1<br>";
$obj2=new Square($s);
$r2=$obj2->area();
echo"Area of Square =$r2<br>";
$obj3=new Circle($s);
$r3=$obj3->area();
echo"Area of Circle =$r3<br>";
?>