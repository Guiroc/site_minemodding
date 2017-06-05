<!DOCTYPE html>
<html lang="fr">
	<div id="unmod">
		<div id="description">
			<h2><?php echo $mod->mod_label; ?></h2>
		</div>
		<?php $i = 0; ?>
		<div id="lesversions">
			<?php do{ ?>
				<div class="versions">
					Minecraft <?php echo $mod->modversions[$i]->gameversion_label ;?>
					<?php $old_gameversion = $mod->modversions[$i]->gameversion_label; ?>
					<?php do{ ?>
					<a href="<?php echo str_replace(" ", "_", "http://127.0.0.1/mods/".$old_gameversion."/".$mod->mod_label."/".$old_gameversion."_".$mod->mod_label."_".$mod->modversions[$i]->modversion_label) ;?>">
						<div class="modversion">
							<?php echo $mod->modversions[$i]->modversion_label; ?>
						</div>		
					</a>
					<?php $i++;
					}while($i < count($mod->modversions) && $old_gameversion == $mod->modversions[$i]->gameversion_label);?>
				</div>
			<?php }while($i < count($mod->modversions));?>
		</div>
	</div>
</html>