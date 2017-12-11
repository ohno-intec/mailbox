<?php
require_once 'bot.php';
use App\Functions;

	echo "hello world";
	$bot = new Functions\bot();

	echo($bot->homepath()."\n");
	echo($bot->docpath()."\n");


	$bot->getmailaddress();

?>