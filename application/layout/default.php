<!DOCTYPE html>
<html lang="fr"> 
    <head>
        <title><?php echo $titre; ?></title>
        <meta charset="<?php echo $charset; ?>"/>
		<?php foreach($css as $url){ ?>
      		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>" />
		<?php } ?>
    </head>
    <body style="background-image: url(<?php echo base_url("assets/picture/P0KNEvT.jpg"); ?>">
    	<?php $this->load->view("layout/header"); ?>
    	<?php $this->load->view("layout/menu"); ?>
    	<div id="content">
    	    <?php echo $output; ?>
    	</div>
    	<?php $this->load->view("layout/footer"); ?>
    	
		<?php foreach($js as $url){ ?>
       		<script type="text/javascript" src="<?php echo $url; ?>"></script> 
		<?php } ?>
    </body>
</html>