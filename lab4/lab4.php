 <!DOCTYPE html>
 	<head></head>
 	<body>

 	
 <form name="table" id="table" action="lab4.php" method="post">
      <h1>Multiplication Table Creator</h1>
      <p>
    <label for="width">Rows:</label>
    <input type="number" name="width" id="width" />
      </p>
      <p>
    <label for="height">Columns:</label>
    <input type="number" name="height" id="height" />
      </p>
    <input type="submit" value="submit" name="submit">
    </form>
    
 
 <?php
 
 //Form needs to be created above to allow for get and post info, so that a user can input their own numbers to create a table
 
 if(isset($_POST['submit']))
 {
 	$start =(int) $_POST['width'];
	// 
 	$end = (int) $_POST['height'];  
	//
	
	echo "<table border='1'>";
  //Encompass this data printed out in a table
    for($r=0; $r<$end; $r++)
    {
       	echo "<tr>";
		echo "<td>" . $r . "</td>";
		
       for($c=1; $c<$start ; $c++)
        {
        	if($r==0)
			{
				echo "<td>" . $c. "</td>";
			}
			else {
				 echo "<td>" . ($r * $c) . "</td>";
				
			}
          //Creates columns
         
		  
        }
		echo '</tr>';
		
          
    }
 echo '</table>'; 

 }
 	
	
	
	
   

	
  
 
		
?>

</body>

</html>
