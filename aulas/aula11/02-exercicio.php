<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
		<form method="get" action="02-parte02.php">
			<?php
			$n = 1;
			while($n <= 5){
				echo "Valor $n :<input type='number' name='n $n' max='100' min='0' value='0'><br>";
				$n++;
			}
			?>
			<input type= "submit" value="Enviar">
		</form>
	</div>
</body>
</html>