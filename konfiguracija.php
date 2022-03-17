<?php	
	$servername = 'localhost'; 
	$username = 'root';
	$password = ''; 
	$dbname = 'myroulette'; 

	$identifier = "";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) 
	{
		die("Neuspesna konekcija " . $conn->connect_error);
	}
	//$sql3 = "SELECT id FROM users WHERE referredBy = '".$_SESSION['steamid']."'";
	//$result3 = $conn->query($sql3);
	//$affiliateVisitors = $result3->num_rows;
	
	if(isset($_SESSION['steamid']))
	{
		//Obtain steam user details from database
		$sql = "SELECT * FROM `users` WHERE `steamid` = ".$_SESSION['steamid'];
		$result = $conn->query($sql);
		while($row = mysqli_fetch_assoc($result)) {
			// Create Vars from database for steamids
			$identifier = $row['identifier'];
			$balance = number_format($row['balance'], 2);
			$tradeLink = $row['tlink'];
			$userRank = $row['rank'];
			$afiliateLifeTimeEarnings = $row['lifeTimeEarnings'];
			$affiliateAvailableEarnings = $row['availableEarnings'];
			$refferalCode = $row['referralCode'];
		}
		//Obtain steam user details from database
		
		//Check if new user exists in database, if not add
		$sql2 = "SELECT id FROM users WHERE steamid='".$_SESSION['steamid']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows == 0) // If user already exists in the db
		{
			$user = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=7F52572F3BF94162B065EDB106F1B675&steamids='.$_SESSION['steamid'].'&format=json');
			$userdecoded = json_decode($user, true);
			$identifierLength = 40;
			$todaysDate = date("m.d.y.h.s"); // e.g. "03.10.01"
			$identifier = substr(hash('md5', mt_rand(0,1000000000)), 0, $identifierLength); 
			$nickname = $userdecoded['response']['players'][0]['personaname'];
			
			$sql2 = "INSERT INTO users (identifier, steamid, nickname, balance, tlink, rank, muted, referralCode, redeemedCode, referredBy, lifeTimeEarnings, availableEarnings) VALUES ('".$identifier."', '".$_SESSION['steamid']."', '". $nickname."', '0.00', '', 'User', 0, '', 0, '', 0, 0)";
			$conn->query($sql2);
		}
	}
?>