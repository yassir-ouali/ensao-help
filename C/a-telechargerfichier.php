<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php 
$id= isset($_GET['id']) ? htmlspecialchars(trim($_GET['id'])) : "" ;
$filliere= isset($_GET['choice']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['choice'])))) : "" ;

//require_once "app/start-dowload.php";
//require_once "app/dropbox_auth.php";

$file=new File($dConfig['dns']);
$dFile=$file->download($id);
$des=$filliere."/".$dFile['annee']."/".$dFile['file'];
// echo $dFile['file'];
//$client->getFile("/files/".$des,fopen("tmp-download/".$dFile['file'],'wr'));
// echo "location:files/$des";
//header("location:files/".$des);
//include $dConfig['actions']['get:filliere']['url'];
?>
<script type="text/javascript" language="Javascript">
function openPopUp(urlToOpen) {
  var popup_window=window.open(urlToOpen,"myWindow");            
  // var popup_window=window.open(urlToOpen,"myWindow","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=yes, width=400, height=400");            
  try {
    popup_window.focus();   
  }catch(e){
    // alert("Pop-up Blocker is enabled! Please add this site to your exception list.");
	window.location=urlToOpen;
  }
}
	window.location="files/<?php echo $des; ?>";
 //openPopUp("files/<?php echo $des; ?>");
</script>
<?php
// echo $dFile['file'];
// header("location:?action=filliere&choice=".$filliere);

?>