<style>
    th,td{
        text-align:center;
        border:2px solid black;
    }
    table{
        border:2px solid black;
        border-collapse:collapse;
        width:50%;
    }
    
</style>

<?php
$hn = $_POST['hospital_name'];

try{

    $cn = new PDO("pgsql:host=localhost;dbname=hospital_db","postgres","root");
    // $cn = new PDO("mysql:host=localhost;dbname=hospital_db","root","root");
    // $sql = "SELECT Doctor.* FROM Doctor JOIN Doc_hosp ON Doctor.doc_no = Doc_hosp.doc_no JOIN Hospital ON Hospital.hos_no = Doc_hosp.hosp_no WHERE Hospital.hos_name = '$hn';";

    $sql = "select doctor.* from doctor, hospital, doc_hosp WHERE hospital.hos_name = 'City Hospital' and doctor.doc_no = doc_hosp.doc_no and hospital.hos_no = doc_hosp.hosp_no;";
    $stmt=$cn->prepare($sql);

    echo "<table>";
    echo "<tr>
        <th>Doc No</th>
        <th>Doc Name</th>
        <th>Doc Addr</th>
        <th>Doc City</th>
        <th>Doc Area</th>
        </tr>";
    foreach($cn->query($sql) as $row)
    {
        echo "<tr>";
        echo "<td>$row[0]</td>"."<td>$row[1]</td>"."<td>$row[2]</td>"."<td>$row[3]</td>"."<td>$row[4]</td>";
        echo "</tr>";
    }
}
catch(PDOEXCEPTION $e)
{
    echo "ERROR :".$e->getMessage();
}
?>