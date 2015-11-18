<form method="post" action="vending.php">
			Total Bill: <input type="integer" name="totalBill"></input><br/>
			Total Tendered: <input type="integer" name="totalTendered"></input><br/>
			
	
			<input type="submit" value="submit" name="submit">
		</form>


<?php
if(isset($_POST['submit']))
 {
$totalBill =$_POST['totalBill'];
$totalTendered =$_POST['totalTendered'];
$change=$totalTendered-$totalBill;
$currency = array(100,50,20,10,5,1,0.25,0.10,0.05,0.01);
echo "<h1>Receipt</h1>";
echo "Total Bill: ".$totalBill;
echo"</br>";
echo "Total Tendered: ".$totalTendered;
echo"</br>";
echo "Change: ".$change;
echo"</br>";
echo "<table border=1";
foreach($currency as $nextcurrency)
{
 $currentCurrency=$nextcurrency;
 if(($change/$currentCurrency)>=1)
 {
 $disbursed=currency($change, $currentCurrency, $billQuantity);
 $change=$change-$disbursed;
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
 function currency($change, $currentCurrency, &$billQuantity){
 $billQuantity=floor($change/$currentCurrency);
 return $billQuantity*$currentCurrency;
 }
?>
