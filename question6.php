<!DOCTYPE html>
<html>
<head>
    <title>Lottery</title>
</head>
<body>


<h1>Always Lucky Lotto</h1>
<p>Similar (obviously not the same as) labs, so no luck really involved.</p>

<h2>Chosen Numbers</h2>
<ul>
    <?
    //Our lotto uses 5 numbers
    //No repeats
    ?>
</ul>
	<form method="post" action="question6.php">
		Choose a lotto Number from 1-6: <input type="number" name="lottoNumber"></input><br/>
		<input type="submit" value="submit" name="submit">
	</form>
	
	
<h2>Number Selection</h2>
<table>
<tr>
<?php
$totalLottoNumbers = 6;
$numbersPerRow = 3;

	//counts up through potential numbers
    for($ct = 1; $ct <= $totalLottoNumbers; $ct++)
    {
        echo "<td>";

        echo $ct; //submit and hidden input?

        echo "</td>";

        if($ct%$numbersPerRow==0 && $ct != $totalLottoNumbers )
        {
            echo "</tr><tr>";
        }
    }
?>
</tr>
</table>
<?php
	$count=1;
//need to allow user to pick at most 5
if(isset($_POST['submit']))
 {
 	$lotteryNumber =$_POST['lottoNumber'];
	echo "<h1>Your chosen number was:".$lotteryNumber."</h1>";
	$winningNumber =rand(1,6);
	$guesses=1;
	$guesses++;
	$timesWon=0;
	$timesLost=0;
 //if count is less than 5 run this code to show chosen numbers
	 if($count<5){
		
	 if($winningNumber=$lotteryNumber){
	 	echo "<h1>The winning number was:".$winningNumber." </h1>";
		echo "You guessed ".$lotteryNumber." so you won!";
		$timesWon++;
		return $timesWon;
	 }
	 else{
	 	$lotteryNumber ="nothing";
	 	echo "You guessed ".$lotteryNumber." so you lost, try again";
		 $timesLost++;
		return $timesLost;
	 }
	 $count++;
	 return $count;
	 }
	 //else if the count is equal to 5 then show times won and times lost
	 if($count==5)
		{
			echo "You've won ". $timesWon. " this many times";
			echo "You've lost". $timesLost. " this many times";
			break;
			
		}
		 }
	
	
	
?>

   <?php
   	//For some reason you always win
     //Then once total guesses is reached display message, and prevent user from guessing anymore
     //Show number of wins and number of losses at end, count isn't working propery
     //Need to use sessions to save guessed numbers , used variables couldn't get sessions to work properly
	  //Increment by 1 until total guesses is reached
	  ?>
		</body>
</html>
