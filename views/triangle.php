<?php ob_start() ; ?>
<div class="col-md-12 center">

	<svg width="750" height="750" class="center">
		
		<?php create_triangle($_GET['nb']); ?>

	</svg>

</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>