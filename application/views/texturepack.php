<!DOCTYPE html>
<html lang="fr">
	<div id="unmod">
		<div id="description">
			<h2><?php echo $texturepack->texturepack_label; ?></h2>
		</div>
		<?php $i = 0; ?>
		<div id="lesversions">
			<?php do{ ?>
				<div class="versions">
					Minecraft <?php echo $texturepack->texturepackversions[$i]->gameversion_label ;?>
					<?php $old_gameversion = $texturepack->texturepackversions[$i]->gameversion_label; ?>
					<?php do{ ?>
					<a href="<?php echo str_replace(" ", "_", "http://127.0.0.1/mods/".$old_gameversion."/".$texturepack->texturepack_label."/".$old_gameversion."_".$texturepack->texturepack_label."_".$texturepack->texturepackversions[$i]->texturepackversion_label) ;?>">
						<div class="modversion">
							<?php echo $texturepack->texturepackversions[$i]->texturepackversion_label; ?>
						</div>		
					</a>
					<?php $i++;
}while($i < count($texturepack->texturepackversions) && $old_gameversion == $texturepack->texturepackversions[$i]->gameversion_label);?>
				</div>
			<?php }while($i < count($texturepack->texturepackversions));?>
		</div>
	</div>
</html>