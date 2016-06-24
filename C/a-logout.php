<?php 
session_destroy();
$dSession=null;
$dSession['connect']='init';
header("location:./");
?>