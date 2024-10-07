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

try{
    $cn = new PDO("pgsql:host=localhost;dbname=hospital_db","postgres","root");

    $sql =  "select hos_name, count(*) from hospital doc_hosp GROUP BY hos_name";

    $stmt =$cn->prepare($sql);
    $stmt->execute();
    
    echo "<table>";
    echo "<tr>
        <th>Hospital_Name</th>
        <th>Total</th>
        </tr>";

        foreach($cn->query($sql) as $row)
        {
            // echo "<tr>";
            // echo "<td>$row[0]</td>"."<td>$row[1]</td>";
            // echo "</tr>";

            echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                </tr>";
        }
}

catch(PDOEXCEPTION $e)
{
    echo "ERROR :". $e->getMessage();
}

?>