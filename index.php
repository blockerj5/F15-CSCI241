<?php
//Used so do not have to retype html code at top and linking of stylesheet
require_once("header.php");
?>
	<h1>Index:</h1>
	<?php
	
	//Opens articles.txt file in read mode to begin pulling article titles, and info from
	$articlesTxt = fopen("articles.txt", "r");
	
	//If  articles.txt file is not available then echo to screen could not open
	if(!is_resource($articlesTxt))
	{
		echo "could not open";
		exit();
	}
	
	//Takes articles.txt titles and explodes it up till the | 
	while($article= fgets($articlesTxt))
	{
		$articles[] = explode("|",$article);
	}
	
	fclose($articlesTxt);
	
	$count=0;
	
	//Used to link the titles to the news php file, to see rest of article
	foreach($articles as $position=> $article)
	{
		echo "<a href='news.php?id=$position'>$article[0]</a>"; 
		echo "<br>";
		echo substr($article[1],0,100);
		echo "<br><br>";
		$count++;
	
		if($count==3)
		{
			break;
		}
	}
	//creates cookie to monitor article views
	if (isset($_COOKIE['views']))
	{
		$cookie = ++$_COOKIE['views'];
		setcookie("views", $cookie);
					
		if ($cookie > 5)
		{
			header("Location: subscription.php"); 
		}
	}
	else
	{
		$cookie = 1;
		setcookie("views", $cookie);
	}
	?>

</body>
</html>
