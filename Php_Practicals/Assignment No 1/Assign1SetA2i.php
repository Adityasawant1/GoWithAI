<?php
function add($a,$b=0)
{
    $c=$a+$b;
    echo "addition is=".$a+$b ;
}
function sub($a,$b=0)
{
    $c=$a-$b;
    echo "Subtraction is=$c" ;
}
function mul($a,$b=1)
{
    $c=$a*$b;
    echo "Multiplication is=$c" ;
}
function div($a,$b=1)
{
    $c=$a/$b;
    echo "Division is=$c" ;
}
function comp($a,$b=0)
{
    if($a>$b)
    {
        echo "$a is greater number than $b";
    }
    else{
        echo "$b is greater number than $a";
    }
}
?>