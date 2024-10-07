<?php
$pc=explode(',',$_POST['c']);
$pn=explode(',',$_POST['n']);
$pr=explode(',',$_POST['r']);
$pi=explode(',',$_POST['i']);
$po=explode(',',$_POST['o']);
$pd=$_POST['d'];
$ch=$_POST['ch'];
if(count($pc)<=10 && count($pn)<=10 && count($pr)<=10 && count($pi)<=10 && count($po)<=10)
{
    switch($ch)
    {
        case 'di':
            echo"Hello";
                if(in_array($pd,$pc))
                {
                    $pos=array_search($pd,$pc);
                    $avg=$pr[$pos]/($pi[$pos]-$po[$pos]);
                    
                    printf("Average of the Player %d is %.2f",$pd+1,$avg);
                }
        break;

        case 'a':
                $total=0;
                for($i=0;$i<count($pc);$i++)
                {
                    $total+=$pr[$i];
                }
               
                printf("Average of the All Player is %.2f",$total/count($pc));
                
        break;
    }
}
else{
    echo"Enter the equal No. of player information";
}

?>