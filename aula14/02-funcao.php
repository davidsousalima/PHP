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
			function soma($a, $b){
				return $a + $b;
			}
			$x = 3;
			$y = 7;
			$r = soma($x, $y);
			echo "A soma entre $x e $y e igual a $r";
		?>
    </div>
</body>
</html>