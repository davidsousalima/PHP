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
        $preco = $_GET["p"];
        echo "O preço do produto e R$ ".number_format($preco,2,",",".");
        $preco -=  ($preco*10/100);
        echo "<br>E o novo preço com 10% de desconto sera R$ $preco";
        ?>
    </div>
</body>
</html>