<html>
	<div id="unmod">
		<h2><?php echo $unmod[0]->mod_label; ?></h2>
		Version de Minecraft : <?php echo $unmod[0]->gameversion_label; ?>
		<ul id="liste_modversion">
			<?php foreach($liste_modversion as $unmodversion){ ?>
				<li><a href="http://localhost/<?php echo $unmod[0]->gameversion_label."/".$unmod[0]->mod_label."/".$unmod[0]->gameversion_label."_".$unmod[0]->mod_label."_".$unmodversion->modversion_label; ?>.jar"> <?php echo $unmodversion->modversion_label; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</html>