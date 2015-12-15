<html>
<head><title>Question 4</title></head>
<body>
<?php

$grades = array(
    "Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
    "Bob" => array("test1" => 79, "hw1" => 84, "hw2" => 91, "midterm" => 85),
    "Alice" => array("test1" => 70, "hw1" => 60, "hw2" => 80, "midterm" => 95)
);

function averageScore()
{
//displaying array elements manually
echo "<strong>Grades array:</strong><br>";
echo $grades["Andrew"]."<br>";
echo $grades["Bob"]."<br>";
echo $grades["Alice"]."<br>";
 
//displaying array using for loop.
echo "<b>Grades:</b><br>";
for($r=0;$r<count($grades);$r++)
{
	for($c=0;$c<count($grades[$r]);$c++)
	{
		echo $grades[$r][$c]."   ";
	}
	echo "<br>";
}
}
//call function
echo averageScore();
?>
</body>
</html>
