<!DOCTYPE html>
<html lang="fr">
	<head>
	</head>
	<body>
		<div id="filter">
			
		</div>
		<div id="mods">
			<?php foreach($liste_modpacks as $unmodpack){ ?>
			 <a class="mod" href="<?php echo site_url("modpacks/unmodpack/". $unmodpack->modpack_id); ?>">
				<?php echo $unmodpack->modpack_label; ?>
				<div class="description">
					<div class="version">
						Supporté: <?php echo $unmodpack->versions; ?>
					</div>
					<div class="version">
						Mise à jour: <?php echo date("d/m/Y", strtotime($unmodpack->date)); ?>
					</div>
				</div>
			 </a>
			 <?php } ?>
		</div>
	</body>
</html>