<?php
$a=$_POST['a'];
$stack=[];
for($i=0;$i<strlen($a);$i++)
    array_push($stack,$a[$i]);
$r='';
while(!empty($stack))
    $r.=array_pop($stack);
if($a==$r)
    echo"$a is Palindrome";
else
    echo"$a is Not Palindrome"; 
