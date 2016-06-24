<section id="tableau">
	<h1 style="display:inline;">Table de fichiers</h1>
	<!-- Table Section Start Here -->		
	<div class="bs-example" >
		<div class="table-wrap">
								
	    <table class="table table-striped" >
		
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Username</th>
	          <th>Mots cl&eacutes</th>
	          <th>Nom Du Prof</th>
	          <th>Categorie</th>
	          <th>Date de publication</th>
			  <th>Telecharger</th>
	        </tr>
	      </thead>
		  
	      <tbody class="main_table_body">
		  <?php 
		  $file=new File($dConfig['dns']);
		  if(isset($dReponse['files'][$dReponse['annee']])){
				$c=$dReponse['files'][$dReponse['annee']];
			}else{
				$c=$dReponse['files'];
			}
			//var_dump($c);
			for($i=0;$i<count($c);$i++){
		  ?>
	        <tr>
	          <td><?php echo $i+1; ?></td>
	          <td><a href="?action=profile&id=<?php echo $c[$i]['id_membre'];?>"><?php echo $file->username($c[$i]['id_membre']);?></a></td>
			  <td><?php echo $c[$i]['key_words']; ?></td>
	          <td><?php echo $c[$i]['nom_prof']; ?></td>
	          <td><?php echo $c[$i]['categorie']; ?></td>
	          <td><?php echo $c[$i]['date']; ?></td>
			  <td><a href="?action=telechargerfichier&choice=<?php echo $file->getFilliere($c[$i]['id']); ?>&id=<?php echo $c[$i]['id']; ?>"><?php echo $file->file_name($c[$i]['file']); ?></a></td>
	        </tr>
	        
	      <?php } ?>
	      </tbody>
	    </table>
	  </div>
	  <?php if($dReponse['chargerPlus']){?>
	  <center>
		<div style="display:none;" class="load_plus"><img width="100" height="100" src="Images/load2.gif" /></div>
		<button onclick="<?php echo $dReponse['chargerPlusFunction'];?>" class="btn btn-default btn-volunteer charger_plus" >Charger plus</button>
	  </center>
	  <?php }else{
	  ?>
	  <center>
		<div style="display:none;" class="load_plus"><img width="100" height="100" src="Images/load2.gif" /></div>
		<button style="display:none;" onclick="<?php echo $dReponse['chargerPlusFunction'];?>" class="btn btn-default btn-volunteer charger_plus" >Charger plus</button>
	  </center>
	  <?php
	  }?>
	  </div>
	<!-- Table Section End Here -->
</section>