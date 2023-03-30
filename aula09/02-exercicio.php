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
			if($i < 16){
				$TipoVoto = "Não vota!";
			}elseif(($i >= 16 and $i <= 18) or ($i > 65)){
					$TipoVoto = "Voto opcional!";
				}else{
					$TipoVoto = "Voto obrigatorio!";
				}
			
			echo "Para essa idade $TipoVoto ";
        ?>
		<br>
		<a href="02-exercicio.html">Voltar</a>
    </div>
</body>
</html>