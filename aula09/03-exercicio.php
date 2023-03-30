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
			$nota01 =isset($_GET["nota1"])?$_GET["nota1"]:"Nenhum dado foi  encontrado....";
			$nota02 =isset($_GET["nota2"])?$_GET["nota2"]:"Nenhum dado foi encontrado....";
			$media = ($nota01 + $nota02)/2;
			echo "A média entre $nota01 e $nota02 é igual à ".number_format($media,1);
			if($media >= 7 and $media <= 10){
				echo "<br>Situação do Aluno:Aprovado";
			}elseif($media <= 5 and $media <= 7 ){
				echo "<br>A Situação do Aluno: recuperação";
			}else{
				echo "<br>A situação do Aluno:Reprovado";
			}
		?>
		<br>
		<a href="03-exercicio.html">Volta</a>
    </div>
</body>
</html>