<?php 
//include assets
include $dReponse['assets'];
if(isset($dReponse['style'])){
?>
<link href="<?php echo $dReponse['style'];?>" rel="stylesheet" />
<?php 
}
//include header
include $dReponse['header'];
//include content
include $dReponse['content'];
//include footer
include $dReponse['footer'];
?>