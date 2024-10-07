<?php
define('PI','3.14');
$r=$_POST['r'];
$h=$_POST['h'];

interface Calculate
{
    public function area();
    public function volume();
}
class Cylinder implements Calculate
{   protected $r,$h;
    function __construct($r,$h)
    {
        $this->r=$r;
        $this->h=$h;
    }
    function area()
    {
        return 2*PI*$this->r*($this->r+$this->h);
    }
    function volume()
    {
        return PI*$this->r*$this->r*$this->h;
    }
}
$obj=new Cylinder($r,$h);
$a=$obj->area();
$v=$obj->volume();
echo"Area of Cylinder =$a square.units<br>";
echo"Volume of Cylinder =$v cubic.units<br>";
?>