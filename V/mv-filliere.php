<!DOCTYPE html>
<html lang="en">
	<head>
<?php 
//include assets
include $dReponse['assets'];
//include ajax funcions
?>
<script src="<?php echo $dReponse['ajaxFunctions'];?>"></script>
</head>
<?php
//include header 
include $dReponse['header'];
//print error
if(isset($dReponse['error'])){
	include $dReponse['listError'];
}
//include onglet + tables
include $dReponse['onglets'];

//include forms
$dReponse['numform']=1;
include $dReponse['form'];
//include forms
$dReponse['numform']=2;
include $dReponse['form'];
//include forms
$dReponse['numform']=3;
include $dReponse['form'];
//include footer
include $dReponse['footer'];
?>