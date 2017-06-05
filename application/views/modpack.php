<!DOCTYPE html>
<html lang="fr">
	<div id="unmod">
		<div id="description">
			<h2><?php echo $modpack->modpack_label; ?></h2>
		</div>
		<?php $i = 0; ?>
		<div id="lesversions">
			<?php do{ ?>
				<div class="versions">
					Minecraft <?php echo $modpack->modpackversions[$i]->gameversion_label ;?>
					<?php $old_gameversion = $modpack->modpackversions[$i]->gameversion_label; ?>
					<?php do{ ?>
					<a href="<?php echo str_replace(" ", "_", "http://127.0.0.1/mods/".$old_gameversion."/".$modpack->modpack_label."/".$old_gameversion."_".$modpack->modpack_label."_".$modpack->modpackversions[$i]->modpackversion_label) ;?>">
						<div class="modversion">
							<?php echo $modpack->modpackversions[$i]->modpackversion_label; ?>
						</div>		
					</a>
					<?php $i++;
					}while($i < count($modpack->modpackversions) && $old_gameversion == $modpack->modpackversions[$i]->gameversion_label);?>
				</div>
			<?php }while($i < count($modpack->modpackversions));?>
		</div>
	</div>
</html>