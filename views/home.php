<?php ob_start() ; ?>
<div class="col-md-12">
	<form action="/index.php/damier" method="get">
		
		<h3>Taille du damier</h3>

		<input type="number" value="1" min="1" max="50" name="nb">

			<br>
			<br>

		<input type="submit" value="Générer" class="btn btn-default">
	</form>

	<form action="/index.php/triangle" method="get">
		
		<h3>Taille de la base du triangle</h3>

		<input type="number" step="2" value="1" min="1" max="50" name="nb">

			<br>
			<br>

		<input type="submit" value="Générer" class="btn btn-default">
	</form>
</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>