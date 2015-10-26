<html>
<head>
	
	<title> </title>
	
</head>

		<form method="post" action="paystub.php">
			Employee Id: <input type="text" name="employeeId"></input><br/>
			Employee Name: <input type="text" name="employeeName"></input><br/>
			Hourly Wage: <input type="integer" name="hourlyWage"></input><br/>
			Hours Worked: <input type="number" name="hoursworked"></input><br/>
	
			<input type="submit" value="submit" name="submit">
		</form>
<?php


if(isset($_POST['submit']))
 {
$employeeId =$_POST['employeeId'];
$employeeName =$_POST['employeeName'];
$hourlyWage =$_POST['hourlyWage'];
$hoursWorked =$_POST['hoursworked'];


$totalHours=$hoursWorked;

if ($hoursWorked > 40) 
{
	
	$OvertimeHours=$hoursWorked - 40;
	$hoursWorked=40;
	$OvertimePay=$OvertimeHours * ($hourlyWage * 1.50);
		
} 
else 
{
	$OvertimeHours=0;
	$OvertimePay=0;
}


$totalWage = $hourlyWage * $hoursWorked;
$finalWage =$totalWage + $OvertimePay;

$currency = array(100,50,20,10,5,1,0.25,0.10,0.05,0.01);

//Table For Paystub
echo "PayStub For: ".$employeeName. "</br>";
echo"Name: ".$employeeName."</br>";
echo"ID: ".$employeeId."</br>";
echo "<table border=1>";
echo "<tr>";
echo "<td> </td>";
echo "<td> Hours </td>";
echo "<td> Gross Pay </td>";
echo "</tr>";
echo "<tr>";
echo "<td> Regular: </td>";
echo "<td>" .$hoursWorked ."</td>";
echo "<td>" .$totalWage."</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Overtime: </td>";
echo "<td>" .$OvertimeHours."</td>";
echo "<td>" .$OvertimePay."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Total: </td>";
echo "<td>" .$totalHours."</td>";
echo "<td>" .$finalWage."</td>";
echo "</tr>";
echo "</table>";



//Disbursment Table
echo "<h1>Disbursement</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<td>Denomination </td>";
echo "<td>Qty </td>";
echo "<td>Disbursed </td>";
echo "</tr>";
foreach($currency as $nextcurrency)
{
	$currentcurrency=$nextcurrency;
	//settype($BillQuantity,"integer");
	 
	if(($finalWage/$currentcurrency)>=1)
	{
	
	$BillQuantity=$finalWage/$currentcurrency;
	
	$BillQuantity=floor($finalWage/$currentcurrency);
	
	
	
	$disbursed=$BillQuantity*$currentcurrency;
	$finalWage=$finalWage-$disbursed;
	} 
	else {
		$BillQuantity=0;
		$disbursed=0;
	}
	echo "<tr>";
	echo "<td>".$nextcurrency."</td>";
	echo "<td>".$BillQuantity."</td>";
	echo "<td>".$disbursed."</td>";
	echo "</tr>";
}

echo "</table>";


 }
    
?>
</html>
