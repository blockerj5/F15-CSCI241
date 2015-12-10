<?php
require_once("header.php");
require_once("common.php");
?>
<h2>Admin</h2>
<tr>
	<td><a href="index.php">Home</a></td>
	<td><a href="index.php">Logout</a></td>
	<td><a href="mail">Email List</a></td>
</tr>
<?php
$events = readLines("myEvents.txt","r");
echo "<h2>Current Events:</h2>";
foreach($events as $position => $event)
{
	echo $event = explode("|", $event);
	echo "$event[0] - $event[1]";
	echo "<br>";
	
	?>
	<form method="post" action="admin.php">
			<input type="hidden" name="deleteEvent" value="<?php  echo $position; ?>">
			<button type="submit" >Remove</button><br><br>
	</form>
	<?php
}
?>

<h2>Add Event:</h2>

<form method="post" action="admin.php">
	<table>
		<tr>
			<td>Event Name:<input type="text" name="eventName"></td>
		</tr>
		<tr>
			<td>Event Location:<input type="text" name="eventLocation"></td>
		</tr>
		<tr>
			<td><button type="submit">submit</button></td>
		</tr>
	</table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["deleteEvent"]))
	{
		deleteLine("events.txt",$_POST["deleteEvent"]);
		
		header("Location: admin.php");
		
	}
	else if(isset($_POST["eventName"]))
	{
		$event[] = $_POST["eventName"];
		$event[] = $_POST["eventLocation"];
	
		appendLine("events.txt", implode("|",$event));
		header("Location: admin.php");
	}
}
?>

<?php
require("footer.php");
?>
