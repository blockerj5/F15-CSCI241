 <!DOCTYPE html>
 <html>
 	<head></head>
 	<body>

 	
 <form name="table" id="table" action="test.php" method="post">
      <h1>Multiplication Table Creator</h1>
      <p>
    <label for="width">Start:</label>
    <input type="number" name="width" id="width" />
      </p>
      <p>
    <label for="height">End:</label>
    <input type="number" name="height" id="height" />
      </p>
    <input type="submit" value="submit" name="submit">
    </form>
    
 
 <?php
 
 //Form needs to be created above to allow for get and post info, so that a user can input their own numbers to create a table
 
 if(isset($_POST['submit']))
 {
 	$start =(int) $_POST['width'];
	if(!is_int($start)){
		echo"Start number is not valid.";
		exit(1);
	}
 	$end = (int) $_POST['height'];  
	if(!is_int($end)){
		echo"End number is not valid.";
		exit(1);
	}
	echo "<table border='1'>";
  //Encompass this data printed out in a table
  	
    for($j=$start; $j<=$end; $j++)
    {
    	echo "<tr>";
		if($j==$start){
			echo "<td>" . " " . "</td>";
			for($i=$start; $i<=$end ; $i++)
        		{ echo "<td>" . ($i) . "</td>";}
				echo"</tr>";
				echo"<tr>";
				echo "<td>" . $j . "</td>";
				for($i=$start; $i<=$end ; $i++)
        		{echo "<td>" . ($j * $i) . "</td>";}}
		else{echo "<td>" . $j . "</td>";      
			for($i=$start; $i<=$end ; $i++)
        		{echo "<td>" . ($j * $i) . "</td>";}
		    }
		
		echo '</tr>';
    }
 echo '</table>'; 
 }
		
?>

</body>
</html>
