<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
		$txt =isset($_GET["t"])?$_GET["t"]:"[Texto Generico....]";
		$tam =isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor =isset($_GET["cor"])?$_GET["cor"]:"black";
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="_css/style.css">
	<title>Curso de PHP - CursoemVideo.com</title>
	<style>
		span.texto{
			font-size: <?php echo $tam ;?>;
			color:<?php echo $cor ; ?>;
		}
	</style>
</head>
<body>
	<div>
		<?php
			echo "<span class='texto'>$txt</span>";
		?>
		<br>
		<a href="03-exercicio.html">Voltar</a>
	</div>
</body>
</html>