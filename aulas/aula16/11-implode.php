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
			$vetor[0] = "Curso";
			$vetor[1] = "em";
			$vetor[2] = "Video";
			$texto =implode("#",$vetor);
			print_r($texto);
		?>
    </div>
</body>
</html>