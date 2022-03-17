<?php

    $dbhost = 'localhost'; 
	$dbuser = 'root';
	$dbpass = ''; 
	$dbname = 'myroulette'; 

	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e){
		echo $e->PokaziUlog();
	}
	
	if( isset($_REQUEST['action']) ){
	    switch( $_REQUEST['action'] ){
            case "PostaviUlogct":
                session_start();
                $query = $db->prepare("INSERT INTO `ulozi` (`kolicina`,`user`,`slika`) VALUES ('".$_REQUEST['message']."','".$_SESSION['steam_personaname']."','".$_SESSION['steam_avatar']."')");
    			$query->execute([$_SESSION['steam_avatar'],$_SESSION['steam_personaname'], $_REQUEST['message']]);
                
            break;
            
            case "PostaviUlogk":
                session_start();
                $query = $db->prepare("INSERT INTO `ulozik` (`kolicina`,`user`,`slika`) VALUES ('".$_REQUEST['message']."','".$_SESSION['steam_personaname']."','".$_SESSION['steam_avatar']."')");
    			$query->execute([$_SESSION['steam_avatar'],$_SESSION['steam_personaname'], $_REQUEST['message']]);
                
            break;
            
            case "PostaviUlogt":
                session_start();
                $query = $db->prepare("INSERT INTO `ulozit` (`kolicina`,`user`,`slika`) VALUES ('".$_REQUEST['message']."','".$_SESSION['steam_personaname']."','".$_SESSION['steam_avatar']."')");
    			$query->execute([$_SESSION['steam_avatar'],$_SESSION['steam_personaname'], $_REQUEST['message']]);
                
            break;

		    case "PokaziUlogct":
                $query = $db->prepare("SELECT * from ulozi");
                $query->execute();
                $rs = $query->fetchAll(PDO::FETCH_OBJ);
                $ulog = '';
                foreach( $rs as $r ){
                    $ulog .=  '<div class="ulogic"><strong><img id="avatar" src='.$r->slika.'> '.$r->user.'  </strong><span><img src="slike/coins.png">'.$r->kolicina.'</span></div>';
                }
                echo $ulog;
		    break;
		    
		    case "PokaziUlogk":
                $query = $db->prepare("SELECT * from ulozik");
                $query->execute();
                $rs = $query->fetchAll(PDO::FETCH_OBJ);
                $ulog = '';
                foreach( $rs as $r ){
                    $ulog .=  '<div class="ulogic"><strong><img id="avatar" src='.$r->slika.'> '.$r->user.'  </strong><span><img src="slike/coins.png">'.$r->kolicina.'</span></div>';
                }
                echo $ulog;
		    break;
		    
		    case "PokaziUlogt":
                $query = $db->prepare("SELECT * from ulozit");
                $query->execute();
                $rs = $query->fetchAll(PDO::FETCH_OBJ);
                $ulog = '';
                foreach( $rs as $r ){
                    $ulog .=  '<div class="ulogic"><strong><img id="avatar" src='.$r->slika.'> '.$r->user.'  </strong><span><img src="slike/coins.png">'.$r->kolicina.'</span></div>';
                }
                echo $ulog;
		    break;
		    /*<?php foreach ($rounds as $round): ?>
                <small>Played at: <?php echo $round['played_at']; ?></small><br>
                <small>Steamid: <?php echo $round['steamid']; ?></small><br>
                <a>Bet amount: <?php echo $round['user_bet']; ?></a><br>
                <a>Profit made: <?php echo $round['user_profit']; ?></a><br>
                <a>Crashed at: <?php echo $round['crashed_at']; ?></a><br>
                <br>
              <?php endforeach; ?>*/
		    case "BrisiUlogct":
                $sql = 'DELETE FROM ulozi';
	            $db->exec($sql);
	            
		    break;
		    
		    case "BrisiUlogk":
                $sql = 'DELETE FROM ulozik';
	            $db->exec($sql);
	            
		    break;
		    
		    case "BrisiUlogt":
                $sql = 'DELETE FROM ulozit';
	            $db->exec($sql);
	            
		    break;
	    }
    }

?>