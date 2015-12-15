<?php

//Multidimensional array with keys assigned the arrays within the grades array
$grades = array(
    "Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
    "Bob" => array("test1" => 79, "hw1" => 84, "hw2" => 91, "midterm" => 85),
    "Alice" => array("test1" => 70, "hw1" => 60, "hw2" => 80, "midterm" => 95)
);

		echo "<h1>Grade info</h1>";
		
	
			var_dump($grades);
			echo"<br/>";
			
		function averageScore($grades, $item)
{
//some vars here

    foreach($grades[$_GET["scores"]] as $name => $value)
			{
				echo "<li>$name : $value</li>"; 
			}

    return;
}
//Iterate through array, displaying them in list
//foreach($grades as $gradeNumber => $gradeArray) //
		//{
			//echo "<li>{$gradeArray['test1']} - {$gradeArray['hw1']} - {$gradeArray['hw2']} - {$gradeArray['midterm']}</li>"; 
		//}
		//echo "</ul>";	
		//}	
$midtermAverage=(97+85+95)/3;
$hw1Average=(92+84+60)/3;
echo"<br/>";
echo "The average for the midterm is " . round($midtermAverage). "%<br/><br/>";
echo "The average for homework 1 is " . round($hw1Average) . "%";

?>
</body>
</html>
