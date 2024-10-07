<?php
$dn = $_POST['dn'];
try{
   

$cn = new PDO ("pgsql:host=localhost;dbname=tybcs","postgres","root");
$sql = " update emp set salary= salary* 1.1 where emp.dno IN (select dept.dno from dept where dept.dname = '$dn')";
$stmt = $cn->prepare($sql);

$stmt->execute();
echo "UPDT SUCCESS";

}
catch(PDOEXCEPTION $e)
{
    echo "ERROR :". $e->getMessage();
}

?>