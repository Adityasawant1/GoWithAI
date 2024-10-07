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
$em = $_POST['em'];
$ey = $_POST['ey'];
try{
   

$cn = new PDO ("pgsql:host=localhost;dbname=tybcs","postgres","root");
$sql = " select student.name,subject.title,exam.marks_obtained from student,subject,exam where exam.month='$em' and exam.year=$ey and student.seat_no = exam.seat_no and subject.sub_code = exam.sub_code";
$stmt = $cn->prepare($sql);

$stmt->execute();

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Subject</th>
        <th>Marks</th>
        </tr>";

        foreach($cn->query($sql) as $row)
        {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['marks_obtained'] . "</td>";
            echo "</tr>";
        }
echo "</table>";
}
catch(PDOEXCEPTION $e)
{
    echo "ERROR :". $e->getMessage();
}

?>