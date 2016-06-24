<?php

//require_once "../app/start.php";
//require_once "../app/dropbox_auth.php";

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

$filliere= isset($_GET['choice']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['choice'])))) : "" ;
$annee= isset($_GET['annee']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['annee'])))) : "" ;
$file_destination="../files/".$filliere."/".$annee."/".$fileName;

//if didnt exist we create it !
if (!file_exists("../files/".$filliere."/".$annee)) {
    mkdir("../files/".$filliere."/".$annee, 0777, true);
}

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    //exit();
}

if(move_uploaded_file($fileTmpLoc,$file_destination)){
// if(move_uploaded_file($fileTmpLoc,"./")){
					
}else{
	echo "move_uploaded_file function failed";
}
		//$file=fopen($fileTmpLoc,'rb');
		//$size=filesize($fileTmpLoc);
		//$client->uploadFile($file_destination,Dropbox\WriteMode::add(),$file,$size);
//echo "$fileName upload is complete";
//echo 'fin';
?>