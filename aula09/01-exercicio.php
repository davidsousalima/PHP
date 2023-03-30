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
            $a =isset($_GET["ano"])?$_GET["ano"]:1900;
			$i = date("Y") - $a;
			echo "Você nasceu em $a e tera $i ano<br>";
			if($i >= 18){
				$v = "já pode votar";
				$d = "já pode dirigir";
			}else{
				$v = "Não ´pode votar";
				$d = "Não pode dirigir";
			}
			echo "Com essa idade voce $v e tambem $d ";
        ?>
		<br>
		<a href="01-exercicio.html">Voltar</a>
    </div>
</body>
</html>