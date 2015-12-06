<?php
//Used so do not have to retype html code at top and linking of stylesheet
	require_once("header.php");
	
	
?>

	<head>
		<title>Lab 7</title>
	</head>
	<body>
		<h1>Subscription:</h1>
		<form method="post" action="index.php">
			Name: <input type="text" name="name" size="50" required><br/>
			Email: <input type="text" class="email" name="email" size="50" required><br/>
			<input type="submit" value="submit" name="submit"><br/>
		</form><br/>
		
<a href="index.php">Home</a>
</body>
</html>
