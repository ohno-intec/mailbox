<?php

namespace App\Functions;

//メールディレクトリの容量をチェックする関数
class bot {
	public function homepath(){
		return $_SERVER['HOME'];
	}

	public function docpath(){
		return $_SERVER['DOCUMENT_ROOT'];
	}

	public function getmailaddress(){

		$dirList = array();
		//$mailPath = '/home/intec/indec1998.co.jp/mail/intec1998.co.jp';
		$mailPath = '../../mail/intec1998.co.jp';
		echo $mailPath;
		$mailAddresList = scandir($mailPath);
		print_r($mailAddresList);
		
	}

}




//メール送信する関数


?>