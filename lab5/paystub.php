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
$EmployeeId =$_POST['employeeId'];
$EmployeeName =$_POST['employeeName'];
$HourlyWage =$_POST['hourlyWage'];
$HoursWorked =$_POST['hoursworked'];


$totalHours=$HoursWorked;

if ($HoursWorked > 40) 
{
	
	$OvertimeHours=$HoursWorked - 40;
	$HoursWorked=40;
	$OvertimePay=$OvertimeHours * ($HourlyWage * 1.50);
		
} 
else 
{
	$OvertimeHours=0;
	$OvertimePay=0;
}


$totalWage = $HourlyWage * $HoursWorked;
$finalWage =$totalWage + $OvertimePay;

$currency = array(100,50,20,10,5,1,0.25,0.10,0.05,0.01);

//Table For Paystub
echo "PayStub For: ".$EmployeeName. "</br>";
echo"Name: ".$EmployeeName."</br>";
echo"ID: ".$EmployeeId."</br>";
echo "<table border=1>";
echo "<tr>";
echo "<td> </td>";
echo "<td> Hours </td>";
echo "<td> Gross Pay </td>";
echo "</tr>";
echo "<tr>";
echo "<td> Regular: </td>";
echo "<td>" .$HoursWorked ."</td>";
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
//Calculate Total Paycheck, assuming no tax and also number and demoninations of the currency
//Create Table to have infor output to


/*echo $EmployeeId; 
echo $EmployeeName;
echo $HourlyWage;
echo $HoursWorked;
 echo $totalWage;
 */


//Use If else and have for loops within that use modulus to run through until total number of dollar bills are used
//If (overtime would be hours worked-40)overtime then add to total wage, else overtime less than or equal to 0 then add nothing

 }
    
?>
</html>