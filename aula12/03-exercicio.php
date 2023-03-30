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
			$c =isset($_POST["n1"])?$_POST["n1"]:0;
			echo "Mostrado a tabuada de $c<br>";
			$fat =1;
			do{
				$res = $c * $fat;
				$fat++;
				echo "$c X $fat = $res<br>";
			}while($fat <= 10);
        ?>
		<br>
		<a href="03-parte.php">Volta</a>
    </div>
</body>
</html>