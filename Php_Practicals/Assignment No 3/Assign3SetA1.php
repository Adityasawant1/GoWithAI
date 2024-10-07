<?php
$a=explode(",",$_POST['a']);
$s=$_POST['s'];

$b=array_search($s,$a);
if($b!=false)
{
    $b+=1;
    echo"Element Found at the Position $b";
}
else
    echo"Element Not Found ";
