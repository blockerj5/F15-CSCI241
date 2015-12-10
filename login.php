<?php
require_once("header.php");
require_once("common.php");
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>
<form method="POST" action="admin.php">
	<table>
		<tr>
			<td>Username:<input type="text" name="username" required="required"></td>
		</tr>
		<tr>
			<td>Password:<input type="password" name= "password" required="required"></td>
		</tr>
		<tr>
			<td><input type="submit" value="submit" name="submit"></td>
		</tr>
	</table>
</form>
<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if($_POST["username"] == admin && $_POST["password"] == password)
	{
			$_SESSION["username"] = admin;
			$_SESSION["password"] = password;
	}
}
else {
	exit();
}
?>
<?php
require("footer.php");
?>
