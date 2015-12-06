<?php
//Used so do not have to retype html code at top and linking of stylesheet
require_once("header.php");
?>
		<?php
		//again opens articles txt file in read only so that this file can pull info from it
		$articlesTxt = fopen("articles.txt", "r");
		//if file is not available for whatever reason, then do this
		if(!is_resource($articlesTxt))
		{
			echo "Could not open!";
			exit();
		}
		//gets the txt info and explodes to the |
		while($article= fgets($articlesTxt))
		{
			$articles[] = explode("|",$article);
		}
		fclose($articlesTxt);
		
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{
			if(isset($_GET["id"]))
			{
				echo "<h1>News:</h1>";
				if(isset($articles[$_GET["id"]]))
				{
					echo "<h4>" . $articles[$_GET["id"]][0] . "</h4>";
					echo $articles[$_GET["id"]][1];
					echo "<br/><br/>";
					echo "<a href='index.php'>Home</a>";					
				}
				else
				{
					echo "<a href='index.php'>Home</a>";			
				}
			}
		}	
?>

</body>
</html>
