<?php
$a=$_POST['n']; 
$c=$_POST['ch'];

if($c=='f')
    fact($a);

if($c=='p')
    perfect($a);

if($c=='a')
    armstrong($a);

 
function fact($n)
{
    $f=1;
    for($i=1;$i<=$n;$i++)
    {
        $f*=$i; 
    }
    echo "Factorial is $f";
    
}
function perfect($n)
{
    $s=0;
    for($i=1;$i<$n;$i++)
    {
        if(($n%$i)==0)
        {
            $s+=$i;
        } 
    }
    if($s==$n)
    {
        echo "<br>$n is perfect number";
        
    }
    else{
        echo "<br>$n is not perfect number";
    }
}
function armstrong($n)
{
    $on=$n;
    $t=0;
    while($on>0)
    {
        $r=$on%10;
        $t=$t+$r*$r*$r;
        $on=$on/10;
    }
    if($n==$t)
    {
        echo "<br>$n is armstrong number";
    }
    else{
        echo "<br>$n is not armstrong number";
    }
}
?>