<?php
require_once("header.php");
require_once("common.php");
?>
<h2>Events</h2>
<tr>
	<td><a href="index.php">Home</a></td>
	<td><a href="events.php">Events</a></td>
	<td><a href="login.php">Login</a></td>
</tr>
<?php
$events = readLines("events.txt");
$myEvents = readLines("myEvents.txt");
echo "<h3>Current Events:</h3>";
foreach($events as $position =>$event)
{
	$eventFile = $event;
	$event = explode ("|",$event);
	echo "$event[0] - $event[1]";
	echo "<br>";
	if(!in_array ($eventFile, $myEvents))
	{
	?>
	<form method="post" action="events.php">
			<input type="hidden" name="addEvent" value="<?php  echo $position; ?>">
			<button type="submit" >Add to List</button><br><br>
		</form>
	<?php
	}
}
?><br>
<?php
{	
echo "<h3>Your List:</h3>";
foreach($myEvents as $myEventPosition =>$myEvent)
{
	$myEvent = explode ("|",$myEvent);
	echo "$myEvent[0] - $myEvent[1]";
	?>
	<form method="post" action="events.php">
			<input type="hidden" name="deleteEvent" value="<?php  echo $myEventPosition; ?>">
			<button type="submit">Remove</button><br><br>
	</form>
	<?php
}
?>
<br><a href="mail.php">Email List</a>
<?php
}if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["deleteEvent"]))
	{
		deleteLine("myEvents.txt",$_POST["deleteEvent"]);
		
		header("Location: events.php");
	}
	else if(isset($_POST["addEvent"]))
	{
		$events = readLines("events.txt");
		$event = $events[$_POST["addEvent"]];
		$event = explode("|", $event);
		appendLine("myEvents.txt", implode("|",$event));
		header("Location: events.php");
	}
}
?>
<?php
require("footer.php");
?>
