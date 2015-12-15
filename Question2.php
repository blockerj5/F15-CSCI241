<?php
require_once("q2Header.php");
?>
<?php

session_start();

if(isset($_SESSION["count"]))
{
	//Increments each time, so echo changes properly.
        $_SESSION["count"]++;
}//Else works for first time
else
{
        $_SESSION["count"]=1;
}
//Counts up each time I refresh
echo "I have seen you " . $_SESSION["count"] . " times!";
?>
<?php
require_once("q2Footer.php");
?>
