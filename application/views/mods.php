<!DOCTYPE html>
<html lang="fr">
	<head>
	</head>
	<body>
		<div id="filter">
			
		</div>
		<div id="mods">
			<?php foreach($liste_mods as $unmod){ ?>
			 <a class="mod" href="<?php echo site_url("mods/unmod/". $unmod->mod_id); ?>">
				<?php echo $unmod->mod_label; ?>
				<div class="description">
					<div class="version">
						Supporté: <?php echo $unmod->versions; ?>
					</div>
					<div class="version">
						Mise à jour: <?php echo date("d/m/Y", strtotime($unmod->date)); ?>
					</div>
				</div>
			 </a>
			 <?php } ?>
		</div>
	</body>
</html>