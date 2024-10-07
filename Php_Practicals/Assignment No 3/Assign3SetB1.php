<?php
$a=array(10,20,30,40,50,60);
$ch=$_POST['ch'];
$stack=[];
$queue=[];
for($i=0;$i<count($a);$i++){
    array_push($stack,$a[$i]);
    array_push($queue,$a[$i]);
}
switch($ch){
    case 'is':
        array_push($stack,200);
        echo"Values Insert Successfully";
        echo"<br>";
        print_r($stack);
        break;
    case 'ds':
        $r=array_pop($stack);
        echo"<br>Poped value is $r";
        echo"<br>";
        print_r($stack);
        break;
    case 'dcs':
        print_r($stack);
        break;
    case 'iq':
        array_push($queue,200);
        echo"Values Inserted in  Queue Successfully";
        echo"<br>";
        print_r($queue);
        break;
    case 'dq':
        $r=array_shift($queue);
        echo"<br>removed value is $r";
        echo"<br>";
        print_r($queue);
        break;
    case 'dcq':
        print_r($queue);
        break;
}