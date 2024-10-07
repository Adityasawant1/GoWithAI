<?php
$ch=$_POST['ch'];
$a=array(
    'Name'=>"YASH PANSARE",
    'Roll No'=>12425,
    'Div'=>"A",
    'Class'=>"T.Y.B.Sc(CS)"
);
$b=array(
    'Mobile'=>8007979796,
    'km'=>275,
    'Roll No'=>12426,
    'Class'=>"T.Y.B.Sc(CS)"
);
$c=array(
    'Mobile'=>8007979796,
    'km'=>275,
    'Roll No'=>12426,
    'milage'=>69
);
function odd($v)
{   
    if($v%2==1)
    {
        return $v;
    }
}
switch($ch)
{
    case 'ck':
       echo"Asending Order Changing the Keys";
       sort($a);
       print_r($a);
       echo"<br>desending Order Changing the Keys";
       rsort($a);
       print_r($a);
        break;
    case 'wk':
       echo"Asending Order Without Changing the Keys";
       asort($a);
       print_r($a);
       echo"<br>desending Order Without Changing the Keys";
       arsort($a);
       print_r($a);
        break;
    case 'fo':
        print_r(array_filter($c,'odd'));
        break;
    case 'sm':
        echo"Multiple Sort According to Array A with respect to B<br>";
        array_multisort($a,$b);
        print_r($a);
        echo"<br>";
        print_r($b);
        break;
    case 'ma':
        echo"Merged of Two an Arrays :<br>";
       $c=array_merge($a,$b);
       print_r($c);
        break;
    case 'ia':
        echo"Intersection of an Arrays :<br>";
        print_r(array_intersect($a,$b));
        break;
    case 'ua':
        echo"Union of an Arrays :<br>";
        print_r(array_unique(array_merge($a,$b)));
        break;
    case 'sd':
        echo"Set Difference Between A and B";
        print_r(array_diff($a,$b));
        echo"<br>";
        echo"Set Difference Between B and A";
        print_r(array_diff($b,$a));
        break;
}
?>