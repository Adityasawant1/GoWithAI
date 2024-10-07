<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }
    td, th {
        border: 2px solid black;
        text-align: left;
    }
</style>

<?php
echo "<table>";

$ec = explode(',', $_POST['c']);
$en = explode(',', $_POST['n']);
$ed = explode(',', $_POST['d']);
$eac = explode(',', $_POST['a']);
$ejd = explode(',', $_POST['jd']);
$ebp = explode(',', $_POST['b']);
$ee = explode(',', $_POST['e']);
$edt = explode(',', $_POST['ed']);
$ch = $_POST['ch'];
$ecs = $_POST['cse'];
$ecd = $_POST['cds'];

class Employee
{
    public $code, $name, $design;

    function __construct($code, $name, $design)
    {
        $this->code = $code;
        $this->name = $name;
        $this->design = $design;
    }

    function disp()
    {
        echo "<tr>";
        echo "<td>$this->code</td>";
        echo "<td>$this->name</td>";
        echo "<td>$this->design</td>";
    }
}

class Employee_Acc extends Employee
{
    public $acc_no, $join_date;

    function __construct($code, $name, $design, $acc_no, $join_date)
    {
        parent::__construct($code, $name, $design);
        $this->acc_no = $acc_no;
        $this->join_date = $join_date;
    }

    function disp()
    {
        parent::disp();
        echo "<td>$this->acc_no</td>";
        echo "<td>$this->join_date</td>";
    }
}

class Employee_sal extends Employee_Acc
{
    public $basic_pay, $earning, $deduction;

    function __construct($code, $name, $design, $acc_no, $join_date, $basic_pay, $earning, $deduction)
    {
        parent::__construct($code, $name, $design, $acc_no, $join_date);
        $this->basic_pay = $basic_pay;
        $this->earning = $earning;
        $this->deduction = $deduction;
    }

    function disp()
    {
        parent::disp();
        echo "<td>$this->basic_pay</td>";
        echo "<td>$this->earning</td>";
        echo "<td>$this->deduction</td>";
        echo "</tr>";
    }

    function displaySalary()
    {
        return $this->basic_pay + $this->earning - $this->deduction;
    }
}

function displayTableHeaders() {
    echo "<tr>
            <th>Employee Code</th>
            <th>Employee Name</th>
            <th>Employee Designation</th>
            <th>Employee Acc/NO.</th>
            <th>Employee Join Date</th>
            <th>Employee Basic Pay</th>
            <th>Employee Earning</th>
            <th>Employee Deduction</th>
          </tr>";
}
$emp = [];

for ($i = 0; $i < count($ec); $i++) {
    $emp[$i] = new Employee_sal($ec[$i], $en[$i], $ed[$i], $eac[$i], $ejd[$i], $ebp[$i], $ee[$i], $edt[$i]);
}

switch ($ch) {

    case 'mt':
        displayTableHeaders();
        for ($i = 0; $i < count($ec); $i++) {
            $emp[$i]->disp();
        }
        break;

    case 'se':
        for ($i = 0; $i < count($ec) - 1; $i++) {
            for ($j = 0; $j < count($ec) - 1 - $i; $j++) {
                if ($emp[$j]->code > $emp[$j + 1]->code) {
                    $temp = $emp[$j];
                    $emp[$j] = $emp[$j + 1];
                    $emp[$j + 1] = $temp;
                }
            }
        }
        echo "<b>After Sorting</b><br><br>";
        displayTableHeaders();
        for ($i = 0; $i < count($ec); $i++) {
            $emp[$i]->disp();
        }
        break;

    case 's':
        $found = false;
        for ($i = 0; $i < count($ec); $i++) {
            if ($emp[$i]->code == $ecs) {
                echo "<b>Employee Found:</b><br><br>";
                displayTableHeaders();
                $emp[$i]->disp();
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "<b>No Employee Found with Code: $ecs</b><br><br>";
        }
        break;

    case 'ds':
        $found = false;
        for ($i = 0; $i < count($ec); $i++) {
            if ($emp[$i]->code == $ecd) {
                echo "<b>Salary of Employee Code $ecd:</b><br>";
                echo "Salary: " . $emp[$i]->displaySalary() . "<br>";
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "<b>No Employee Found with Code: $ecd</b><br><br>";
        }
        break;
}
echo "</table>";
?>