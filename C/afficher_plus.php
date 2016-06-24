<?php 
session_start();
include "conf.php";
include "../M/c-file.php";
$offset=isset($_GET['offset'])?utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['offset'])))):"";
$id=isset($_GET['id'])?utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['id'])))):"";
$action=isset($_GET['action'])?utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['action'])))):"";
$annee=isset($_GET['annee'])?utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['annee'])))):"";
$choice=isset($_GET['choice'])?utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['choice'])))):"";

$file=new File($dConfig['dns']);
$offset=$offset*$dConfig['nbLignes'];
if($action=='profile'){
	$c=$file->afficherPlusProfile($id,$dConfig['nbLignes'],$offset);
}else{
	$c=$file->afficherPlusFilliere($choice,$annee,$dConfig['nbLignes'],$offset);
}
// var_dump($_SESSION);
for($i=0;$i<count($c);$i++){
		  ?>
	        <tr>
	          <td><?php echo $i+$offset+1; ?></td>
	          <td><a href="?action=profile&id=<?php echo $c[$i]['id_membre'];?>"><?php echo $file->username($c[$i]['id_membre']);?></a></td>
			  <td><?php echo $c[$i]['key_words']; ?></td>
	          <td><?php echo $c[$i]['nom_prof']; ?></td>
	          <td><?php echo $c[$i]['categorie']; ?></td>
	          <td><?php echo $c[$i]['date']; ?></td>
			  <td><a href="?action=telechargerfichier&choice=<?php echo $file->getFilliere($c[$i]['id']); ?>&id=<?php echo $c[$i]['id']; ?>"><?php echo $file->file_name($c[$i]['file']); ?></a></td>
			  <?php if($action=='profile' && unserialize($_SESSION["session"])["membre"]["id"]==$id){ ?>
			  <td style="cursor:pointer;" onclick="lightboxDelete(<?php echo utf8_decode($c[$i]['id']); ?>)"><a>Supprimer</a></td>
			  <?php } ?>
	        </tr>
	        
	      <?php } ?>