<?php
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
?>
<html>
	<head>
		<title>  </title>
	</head>
	
<body>
	

		
<form method="post" action="LAB3.php">
	Invoice Item 1:&nbsp &nbsp <input type="text" name="firstInvoice"></input><br/>
	Item Price 1:   <input type="text" name="firstPrice"></input><br/><br/>
	Invoice Item 2:&nbsp &nbsp <input type="text" name="secondInvoice"></input><br/>
	Item Price 2:   <input type="text" name="secondPrice"></input><br/><br/>
	Invoice Item 3:&nbsp &nbsp <input type="text" name="thirdInvoice"></input><br/>
	Item Price 3:   <input type="text" name="thirdPrice"></input><br/><br/>
	Invoice Item 4:&nbsp &nbsp <input type="text" name="fourthInvoice"></input><br/>
	Item Price 4:   <input type="text" name="fourthPrice"></input><br/><br/>
	<br/>	
	Check this box you want to include tax at a rate of 7%:<input type="checkbox" value="applyTax" name="applyTax">
	<input type="submit" value="submit" name="submit"><br/>
</form>

</body>
	
	
</html>
<?php
	}
 else if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
			
	$firstInvoice = $_POST['firstInvoice'];
	$firstPrice = $_POST['firstPrice'];
	$secondInvoice = $_POST['secondInvoice'];
	$secondPrice = $_POST['secondPrice'];
	$thirdInvoice = $_POST['thirdInvoice'];
	$thirdPrice = $_POST['thirdPrice'];
	$fourthInvoice = $_POST['fourthInvoice'];
	$fourthPrice = $_POST['fourthPrice'];
		
	$tax_rate = 1.07;
		
	$sub_total = $firstPrice + $secondPrice + $thirdPrice + $fourthPrice;
		
	if(isset ($_POST['applyTax'] ))
	{
		$total = $sub_total * $tax_rate;
		$tax = $total - $sub_total;
		
	} 
	else{
			
		$total = $firstPrice + $secondPrice + $thirdPrice + $fourthPrice;
		$tax = "0.00";
	}
		
		
?>
			
<?php
	$output = <<<EOF
<html>
	<head>
		<title></title>
	</head>
<body>
	<table>
	<tr>
	<td> 
	Invoice Item 1: $firstInvoice
	</td>
	<td>
	Item 1 Price: $firstPrice
	</td>
	</tr>
	<tr>
	<td>
	Invoice Item 2: $secondInvoice
	</td>
	<td>
	Item 2 Price: $secondPrice
	</td>
	</tr>
	<tr>
	<td>
	Invoice Item 3: $thirdInvoice
	</td>
	<td>
	Item 3 Price: $thirdPrice
	</td>
	</tr>
	<tr>
	<td>
	Invoice Item 4: $fourthInvoice
	</td>
	<td>
	Item 4 Price: $fourthPrice
	</td>
	</tr>
</table>
	<br>
	Subtotal = $sub_total
	<br>
	Tax = $tax
	<br>
	Total = $total
</body>
</html>
			
EOF;
			
echo $output
	
	
	
?>
<?php 
}
else {
	echo "Page not supported";
	}
			
?>
			
