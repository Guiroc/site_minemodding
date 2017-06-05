<!DOCTYPE html>
<html lang="fr">
	<head>
	</head>
	<body>
		<div id="filter">
			
		</div>
		<div id="mods">
			<?php foreach($liste_texturepacks as $untexturepack){ ?>
			 <a class="mod" href="<?php echo site_url("texturepacks/untexturepack/". $untexturepack->texturepack_id); ?>">
				<?php echo $untexturepack->texturepack_label; ?>
				<div class="description">
					<div class="version">
						Supporté: <?php echo $untexturepack->versions; ?>
					</div>
					<div class="version">
						Mise à jour: <?php echo date("d/m/Y", strtotime($untexturepack->date)); ?>
					</div>
				</div>
			 </a>
			 <?php } ?>
		</div>
	</body>
</html>