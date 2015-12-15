<?php

$cookieContent[] = "Is not that bad!";
$cookieContent[] = "Is in the way of my break!";

$finalExamCookie = implode("|", $cookieContent);

header("Set-Cookie: finalexam=" . $finalExamCookie);
//Both of the strings show up in the finalexamcookie and both are divided by the |
//Cookie has no expire date,but I guess thats fine.

?>
