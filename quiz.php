<?php
require_once("header.php");
?>
<?php
if (isset($_POST['answer1'], $_POST['answer2'],$_POST['answer3'],$_POST['answer4'],$_POST['answer5']))
{
$hardBoiled =0;
$scrambled =0;
$friedEgg =0;
$poached =0;
$answer[0]=$_POST['answer1'];
$answer[1]=$_POST['answer2'];
$answer[2]=$_POST['answer3'];
$answer[3]=$_POST['answer4'];
$answer[4]=$_POST['answer5'];

for($i=0; $i<5;$i++)
{
	if($answer[$i]==0)
	{$hardBoiled++;}
	else if($answer[$i]==1)
	{$scrambled++;}
	else if($answer[$i]==2)
	{$friedEgg++;}
	else if($answer[$i]==3)
	{$poached++;}
}

if($hardBoiled >=$scrambled AND $hardBoiled>=$friedEgg AND $hardBoiled>=$poached)
{
	echo"<h2>CONGRATS YOU ARE A HARD BOILED EGG!!!!!!!</h2>";
echo "Boiled eggs are eggs (typically chicken eggs) cooked with their shells unbroken, usually by immersion in boiling water. Hard-boiled eggs are cooked so that the egg white and egg yolk both solidify."."<br>";
}

 else if($scrambled >=$hardBoiled AND $scrambled>=$friedEgg AND $scrambled>=$poached)
{
	echo"<h2>CONGRATS YOU ARE A SCRAMBLED EGG!!!!!!!</h2>";
echo "Scrambled eggs is a dish made from whites and yolks of eggs stirred, beaten, and cooked together typically with milk and butter and variable other ingredients."."<br>";
}
 else if($friedEgg >=$hardBoiled AND $friedEgg>=$scrambled AND $friedEgg>=$poached)
{
	echo"<h2>CONGRATS YOU ARE A FRIED EGG!!!!!!!</h2>";
echo "A fried egg is a cooked dish commonly made using a fresh hen's egg, fried whole with minimal accompaniment. Fried eggs are traditionally eaten for breakfast in English-speaking countries but may also be served at other times of the day."."<br>";
}
 else if($poached >=$hardBoiled AND $poached>=$scrambled AND $poached>=$friedEgg)
{
	echo"<h2>CONGRATS YOU ARE A POACHED EGG!!!!!!!</h2>";
echo "A poached egg is an egg that has been cooked by poaching, that is, in simmering liquid. This method of preparation is favored because a very consistent and predictable result can be obtained with precise timing, as the boiling point of water removes the temperature variability from the cooking process (except for the need to adjust for altitude, given that the boiling point of water decreases as altitude increases)."."<br>";
}



}

else if(isset($_POST['answer1'])OR isset($_POST['answer2'])OR isset($_POST['answer3'])OR isset($_POST['answer4']) OR isset($_POST['answer5']))
{
	echo"<h2>Find out what egg you are by answering the questions below!</h2>";
	echo "Please Answer all of the Questions!!!!!";
	echo"
<form method='post' action='quiz.php'>
<div id='section'>
<strong>Old Mr. Abernathy has locked himself in his quarters again, and you've been ordered to get him out. How do you proceed?</strong><br/>
	<input type ='radio' name = 'answer1' value='0'>Use a bobby pin to pick the lock on the door.<br/>
	<input type ='radio' name = 'answer1' value='1'>Trade a local hoodlum for some dynamite and blow open the lock.<br/>
	<input type ='radio' name = 'answer1' value='2'>Go to the alley behind walmart and, retrieve a laser pistol, and blow the lock off.<br/>
	<input type ='radio' name = 'answer1' value='3'>Walk away, and let the old coot rot.<br/>
</div>
<br/>

<div id='section'>
	<strong>Your grandmother invites you to tea, but you're surprised when she gives you a pistol and orders you to kill another human being. What do you do? </strong><br/>
	<input type ='radio' name = 'answer2' value='1'>Obey your elder and shoot the person with the pistol.<br/>
	<input type ='radio' name = 'answer2' value='3'>Offer your most prized possession for the resident's life.<br/>
	<input type ='radio' name = 'answer2' value='0'>Ask granny for a minigun instead. After all, you don't want to miss.<br/>
	<input type ='radio' name = 'answer2' value='2'>Throw your tea in granny's face.<br/>
</div>
<br/><br/>

<div id='section'>
	<strong>Oh, no! You've been exposed to radiation, and a mutated hand has grown out of your stomach! What's the best course of treatment?</strong><br/>
	<input type ='radio' name = 'answer3' value='3'>A bullet to the brain <br/>
	<input type ='radio' name = 'answer3' value='1'>Large doses of anti-mutagen agent<br/>
	<input type ='radio' name = 'answer3' value='0'>Prayer. Maybe God will spare you in exchange for a life of pious devotion.<br/>
	<input type ='radio' name = 'answer3' value='2'> Removal of the mutated tissue with a precision laser<br/>
</div>
<br/>


<div id='section'>
	<strong>You decide it would be fun to play a prank on your father. You enter his private restroom when no one is looking, and.... </strong><br/>
	<input type ='radio' name = 'answer4' value='1'>Put ketchup packets under the toilet seat so they explode when he sits down.<br/>
	<input type ='radio' name = 'answer4' value='0'>Put a firecracker in the toilet. That's sure to cause some chaos<br/>
	<input type ='radio' name = 'answer4' value='2'>Break into the locked medicine cabinet and replace his high blood pressure medication with sugar pills<br/>
	<input type ='radio' name = 'answer4' value='3'>Manipulate the power wattage on his razor, so he'll get an electric shock next time he shaves<br/>
</div>
<br/>

<div id='section'>
	<strong>While working as an intern in the Clinic, a patient with a strange infection on his foot stumbles through the door. The infection is spreading at an alarming rate, but the doctor has stepped out for a while. What do you do?</strong><br/> 
	<input type ='radio' name = 'answer5' value='3'>Amputate the foot before the infection spreads <br/>
	<input type ='radio' name = 'answer5' value='2'> Scream for help<br/>
	<input type ='radio' name = 'answer5' value='1'>Medicate the infected area to the best of your abilities<br/>
	<input type ='radio' name = 'answer5' value='0'>Restrain the patient, and merely observe as the infection spreads<br/>
</div>
<div id='submit'>
<input type='submit' value='Submit' name='submit'>
</div>
</form>
<br/>
";
}	
else{
echo"
<h2>Find out what egg you are by answering the questions below!</h2>
<form method='post' action='quiz.php'>
<div id='section'>
<strong>Old Mr. Abernathy has locked himself in his quarters again, and you've been ordered to get him out. How do you proceed?</strong><br/>
	<input type ='radio' name = 'answer1' value='0'>Use a bobby pin to pick the lock on the door.<br/>
	<input type ='radio' name = 'answer1' value='1'>Trade a local hoodlum for some dynamite and blow open the lock.<br/>
	<input type ='radio' name = 'answer1' value='2'>Go to the alley behind walmart and, retrieve a laser pistol, and blow the lock off.<br/>
	<input type ='radio' name = 'answer1' value='3'>Walk away, and let the old coot rot.<br/>
</div>
<br/>

<div id='section'>
	<strong>Your grandmother invites you to tea, but you're surprised when she gives you a pistol and orders you to kill another human being. What do you do? </strong><br/>
	<input type ='radio' name = 'answer2' value='1'>Obey your elder and shoot the person with the pistol.<br/>
	<input type ='radio' name = 'answer2' value='3'>Offer your most prized possession for the resident's life.<br/>
	<input type ='radio' name = 'answer2' value='0'>Ask granny for a minigun instead. After all, you don't want to miss.<br/>
	<input type ='radio' name = 'answer2' value='2'>Throw your tea in granny's face.<br/>
</div>
<br/><br/>

<div id='section'>
	<strong>Oh, no! You've been exposed to radiation, and a mutated hand has grown out of your stomach! What's the best course of treatment?</strong><br/>
	<input type ='radio' name = 'answer3' value='3'>A bullet to the brain <br/>
	<input type ='radio' name = 'answer3' value='1'>Large doses of anti-mutagen agent<br/>
	<input type ='radio' name = 'answer3' value='0'>Prayer. Maybe God will spare you in exchange for a life of pious devotion.<br/>
	<input type ='radio' name = 'answer3' value='2'> Removal of the mutated tissue with a precision laser<br/>
</div>
<br/>


<div id='section'>
	<strong>You decide it would be fun to play a prank on your father. You enter his private restroom when no one is looking, and.... </strong><br/>
	<input type ='radio' name = 'answer4' value='1'>Put ketchup packets under the toilet seat so they explode when he sits down.<br/>
	<input type ='radio' name = 'answer4' value='0'>Put a firecracker in the toilet. That's sure to cause some chaos<br/>
	<input type ='radio' name = 'answer4' value='2'>Break into the locked medicine cabinet and replace his high blood pressure medication with sugar pills<br/>
	<input type ='radio' name = 'answer4' value='3'>Manipulate the power wattage on his razor, so he'll get an electric shock next time he shaves<br/>
</div>
<br/>

<div id='section'>
	<strong>While working as an intern in the Clinic, a patient with a strange infection on his foot stumbles through the door. The infection is spreading at an alarming rate, but the doctor has stepped out for a while. What do you do?</strong><br/> 
	<input type ='radio' name = 'answer5' value='3'>Amputate the foot before the infection spreads <br/>
	<input type ='radio' name = 'answer5' value='2'> Scream for help<br/>
	<input type ='radio' name = 'answer5' value='1'>Medicate the infected area to the best of your abilities<br/>
	<input type ='radio' name = 'answer5' value='0'>Restrain the patient, and merely observe as the infection spreads<br/>
</div>
<div id='submit'>
<input type='submit' value='Submit' name='submit'>
</div>
</form>
<br/>
";}
?>


<?php
require("footer.php");
?>
