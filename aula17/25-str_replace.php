﻿<!DOCTYPE html>
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
			$frase ="Gosto de estudar Matematica!Matematica é muito legal";
			$novafrase =str_replace("Matematica","PHP",$frase);//pode utilizar o ireplace para ignorar maiusculas e minisculas
			echo $novafrase;
		?>
    </div>
</body>
</html>