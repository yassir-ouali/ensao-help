<?php
session_start();
	require 'app/start.php';
	list($accessToken)=$webAuth->finish($_GET);
	$req=$db->prepare('UPDATE users_api SET token=:token WHERE id=:id');
	$req->execute(array(
	'token'=>$accessToken,
	'id'=>1
	));
	header('location:index.php');
?>