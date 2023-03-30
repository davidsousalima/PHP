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
        <?php
			$r =isset($_GET["estado"])?$_GET["estado"]:"Nenhum dado foi encotrado...";
			switch($r){
				case 1:
				case 3:
				case 4:
				case 14:
				case 22:
				case 23:
				case 27:
					echo "Voce mora na região Norte";
					break;
				case 2:
				case 5:
				case 6:
				case 10:
				case 15:
				case 17:
				case 18:
				case 20:
				case 26:
					echo "Você mora na região Nordeste";
					break;
				case 7:
				case 9:
				case 11:
				case 12:
					echo "Você mora na região Centro-Oeste";
					break;
				case 16:
				case 21:
				case 24:
					echo "Voce mora na região Sul";
					break;
				case 8:
				case 13:
				case 19:
				case 25:
					echo "Voce mora na região Sudeste";
			}
		?>
		<a href="03-exercicio.html">Volta</a>
    </div>
</body>
</html>