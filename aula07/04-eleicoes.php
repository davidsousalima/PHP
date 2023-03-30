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
            $ano =$_GET["an"];
            $idade = date("Y") - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos ";
            $tipo =($idade>18 and $idade <=65)?"OBRIGATORIO":"NAO OBRIGATORIO";
            echo "<br>E dessa forma seu voto e $tipo";
        ?>
    </div>
</body>
</html>