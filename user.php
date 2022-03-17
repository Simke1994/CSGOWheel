<?php

	
	session_start();

	$_SESSION['steam_personaname'] = content['response']['players'][0]['personaname'];
	$_SESSION['steam_avatar'] = $content['response']['players'][0]['avatar'];


?>