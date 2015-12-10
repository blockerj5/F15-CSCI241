<?php
require_once("header.php");
require_once("common.php");
?>
<form method="post" action="mail.php">
	Name: <input type="text" name="name" size="25" required>
	Email: <input type="text" class="email" name="email" size="25" required>
	<input type="submit" value="submit" name="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$to = $_POST["email"];
	$from = "no-reply@winthrop.edu";
	$headers = "From:" . $from . "\r\n";
	$subject = "Your Events List";
	$body = "http://deltona.birdnest.org/~acc.hayness4/F15-CSCI241/lab8/events.php";
	if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
	{ 
	    if (mail($to, $subject, $body, $headers, "-f " . $from))
	    {
	        echo '<h3>We have sent you your list!</h3>';
	    }
	    else
	    {
	       echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
	    }
	}
	else
	{
   	echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
	}
}
?>
<a href="index.php">Home</a>
<?php
require("footer.php");
?>
