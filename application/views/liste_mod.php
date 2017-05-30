<html>
	<div id="liste_mod">
	 <?php foreach($liste_mod as $unmod){ ?>
		 <div class="mod">
			<a href="<?php echo site_url("mods/unmod/". $unmod->mod_id); ?>"><?php echo $unmod->mod_label." ".$unmod->gameversion_label; ?></a>
		 </div>
	 <?php } ?>
	</div>
</html>