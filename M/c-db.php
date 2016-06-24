<?php 
class db {
	var $connect;
	var $bdd;
	
	function connect($dConnect){
		$this->bdd=new PDO('mysql:host='.$dConnect['host'].';dbname='.$dConnect['dbname'],$dConnect['user'],$dConnect['password']);
		$connect=true;
	}
	function disconnect(){
		$this->bdd->close();
		$connect=false;
	}
}
?>