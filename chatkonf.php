<?php

    $dbhost = 'localhost'; 
	$dbuser = 'root';
	$dbpass = ''; 
	$dbname = 'myroulette'; 

	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	if( isset($_REQUEST['action']) ){
	    switch( $_REQUEST['action'] ){
		    case "SendMessage":
    			session_start();
    			$query = $db->prepare("INSERT INTO `chat` (`message`,`user`,`slika`) VALUES ('".$_REQUEST['message']."','".$_SESSION['steam_personaname']."','".$_SESSION['steam_avatar']."')");
    			$query->execute([$_SESSION['steam_avatar'],$_SESSION['steam_personaname'], $_REQUEST['message']]);
		    break;

		    case "getChat":
    			$query = $db->prepare("SELECT * from chat");
    			$query->execute();
    			$rs = $query->fetchAll(PDO::FETCH_OBJ);
    			$chat = '';
    			foreach( $rs as $r ){
    
    				$chat .=  '<div class="porukica"><strong><img src='.$r->slika.'> '.$r->user.':  </strong>'.$r->message.'</div>';
    			}
    			echo $chat;
    		break;
    	}
    }

?>