<?php
require_once("header.php");
?>
<h1>More Information</h1>



<br/><br/><br/>
<?php
	
	//Opens eggInfo file to pull information from
	$eggTxt = fopen("eggInfo.txt", "r");
	
	
	if(!is_resource($eggTxt))
	{
		echo "could not open";
		exit();
	}
	
	//Takes egg titles and explodes it up till the | 
	while($eggArticle= fgets($eggTxt))
	{
		$eggArticles[] = explode("|",$eggArticle);
	}
	
	fclose($eggTxt);
	
	$count=0;
	
	
	foreach($eggArticles as $position=> $eggArticle)
	{
		echo "<a href='about.php?id=$position'>$eggArticle[0]</a>"; 
		echo "<br>";
		echo substr($eggArticle[1],0,100);
		echo "<br><br>";
		$count++;
	
		if($count==5)
		{
			break;
		}
	}
	?>
<?php
		$eggInfo = fopen("eggInfo.txt", "r");
		
		if(!is_resource($eggInfo))
		{
			echo "Could not open!";
			exit();
		}
		
		while($egg= fgets($eggInfo))
		{
			$eggs[] = explode("|",$egg);
		}
		fclose($eggInfo);
		
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{
			if(isset($_GET["id"]))
			{
				
				if(isset($eggs[$_GET["id"]]))
				{
					echo "<h2>" . $eggs[$_GET["id"]][0] . "</h2>";
					echo $eggs[$_GET["id"]][1];
					echo "<br><br>";
										
				}
				else
				{
					
				}
			}
		}	
?>

<?php
require("footer.php");
?>
