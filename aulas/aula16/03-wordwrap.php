<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
		<?php
			
		$t = "Aqui temos um texto gigante criando pelo PHP e vai mostrar o funcionamento da função wordwrap";
		$r =wordwrap($t,8,"<br>\n");
		echo $r;
		?>
    </div>
</body>
</html>