<!DOCTYPE html>
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
if($hourlyWage <0)
{
	echo "Hourly wage cannot be below 0";
	exit(1);
}
$hoursWorked =$_POST['hoursworked'];
if($hoursWorked <0)
{
	echo "Hours worked cannot be below 0";
	exit(1);
}
$totalHours=$hoursWorked;
if ($hoursWorked > 40) 
{$overtimePay=overtime($overtimeHours, $hoursWorked,$hourlyWage);} 
else 
{$overtimeHours=0; $overtimePay=0;}

$finalWage=finalWage($hourlyWage, $hoursWorked, $totalWage, $overtimePay);
//Table For Paystub
paystub($employeeName,$employeeId, $hoursWorked, $totalWage, $overtimeHours, $overtimePay, $totalHours,$finalWage);
//Disbursment Table
disbursmentTable($finalWage);
 }




function finalWage($hourlyWage, $hoursWorked, &$totalWage, $overtimePay)
{
	$totalWage = $hourlyWage * $hoursWorked;
	return $totalWage + $overtimePay;
}

function overtime(&$overtimeHours, &$hoursWorked, $hourlyWage)
	{
	  $overtimeHours=$hoursWorked - 40;
	  $hoursWorked=40;
	  return $overtimeHours * ($hourlyWage * 1.50);	
	}

 function paystub($employeeName,$employeeId, $hoursWorked, $totalWage, $overtimeHours, $overtimePay, $totalHours,$finalWage)
 {
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
	echo "<td>" .$overtimeHours."</td>";
	echo "<td>" .$overtimePay."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Total: </td>";
	echo "<td>" .$totalHours."</td>";
	echo "<td>" .$finalWage."</td>";
	echo "</tr>";
	echo "</table>";
 } 
 
  
function disbursmentTable($finalWage)
{
$currency = array(100,50,20,10,5,1,0.25,0.10,0.05,0.01);
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
	//settype($billQuantity,"integer");
	 
	if(($finalWage/$currentcurrency)>=1)
	{
	
	$billQuantity=$finalWage/$currentcurrency;
	$billQuantity=floor($finalWage/$currentcurrency);
	$disbursed=$billQuantity*$currentcurrency;
	$finalWage=$finalWage-$disbursed;
	} 
	else {
		$billQuantity=0;
		$disbursed=0;
	}
	echo "<tr>";
	echo "<td>".$nextcurrency."</td>";
	echo "<td>".$billQuantity."</td>";
	echo "<td>".$disbursed."</td>";
	echo "</tr>";
}
echo "</table>";
}
 
?>
</html>
