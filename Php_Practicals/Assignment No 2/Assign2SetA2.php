<style>
     table {
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
</style>
<?php
    $itemCodes = explode(',', $_POST['itemCodes']);
    $itemNames = explode(',', $_POST['itemNames']);
    $unitsSold = explode(',', $_POST['unitsSold']);
    $rates = explode(',', $_POST['rates']);

    if (count($itemCodes) == 5 && count($itemNames) == 5 && count($unitsSold) == 5 && count($rates) == 5) {
        echo "<table>";
            echo "<tr>
                        <th>Item Code</th>
                        <th>Item Name</th>
                        <th>Units Sold</th>
                        <th>Rate</th>
                        <th>Total</th>
                   </tr>";
            $grandTotal = 0;
            $total[]=5;
            for ($i = 0; $i < 5; $i++) {
                $total[$i] = $unitsSold[$i] * $rates[$i];
                $grandTotal += $total[$i];
                echo "<tr>
                        <td>$itemCodes[$i]</td>
                        <td>$itemNames[$i]</td>
                        <td>$unitsSold[$i]</td>
                        <td>$rates[$i]</td>
                        <td>$total[$i]</td>
                      </tr>";
            }
            echo "<tr>
                    <th colspan='4'>Grand Total</th>
                    <th>$grandTotal</th>
                  </tr>";
        echo "</table>";
    } 
    else
        echo "<p>Please enter exactly 5 entries for each field.</p>";