﻿<!DOCTYPE html>
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
        <?php
			$ds =isset($_GET["ds"])?$_GET["ds"]:0;
			switch($ds){
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "levanda e vai estudar! :)";
					break;
				case 7:
				case 8:
					echo "Descanse pequeno gafanhoto ;)";
					break;
				default:
					echo "Dia da semana invalido!";
			}
		?>
		<br><a href="javascript:history.go(-1)" class="">voltar</a>
    </div>
</body>
</html>