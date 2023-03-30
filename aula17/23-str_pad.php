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
			//fazer com  que uma palavra ocupe determinida espaço
			$nome ="Guanabara";
			$novo =str_pad($nome,30," ",STR_PAD_RIGHT);//tambem tem str_pad_center e str_pad_left
			print("Meu professor $novo é lindo");
		?>
    </div>
</body>
</html>