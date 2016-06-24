<?php 
//assets
include $dReponse['assets'];
?>
<link rel="stylesheet" href="<?php echo $dReponse['style'];?>" />
<script type="text/javascript" src="<?php echo $dReponse['script'];?>"></script>

<?php 
//header
include $dReponse['header'];
//form
include $dReponse['form'];
?>
<section style="width:80%;margin-left:10%;">
<?php
//tableau
include $dReponse['tableau'];
?>
</section>
<?php
//footer
include $dReponse['footer'];
?>