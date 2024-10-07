<?php
    $a=$_POST['n1'];
    $b=$_POST['n2'];
    $c=$_POST['n3'];
   
    function fibonacci($a,$b,$c)
    {
        $f=0;
        for($i=0;$i<$c;$i++)
        {
            $f=$a+$b;
            echo $f." ";
            $a=$b;
            $b=$f;
        }
    }
    fibonacci($a,$b,$c);
?>