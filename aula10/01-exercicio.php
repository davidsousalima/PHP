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
			$n =isset($_GET["num"])?$_GET["num"]:0;
			$o =isset($_GET["oper"])?$_GET["oper"]:1;
			switch ($o){
				case 1:
					$r = $n * 2;
					break;
				case 2:
					$r = $n ^ 3;
					break;
				case 3:
					$r = $n ^ (1/2);	
			}
			echo "O resultado da operação solicitado  foi $r"; 
	   ?> 
	   <br>
	   <a href="01-exercicio.html">Voltar</a>
	</div>
</body>
</html>