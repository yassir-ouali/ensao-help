<?php
for($i=0;$i<count($dReponse['error']);$i++){
	 ?>
	<li class="error"><?php echo $dReponse['error'][$i];?></li>
	<?php 
}
?>