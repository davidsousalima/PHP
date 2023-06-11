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
        <form action="03-exercicio.php" method="post">
            <label for="num">Número:</label>
            <select name="n1" id="num">
                <?php
                    $n = 1;
                    while($n <= 10){
                        echo "<option value='$n'>$n</option>";
                        $n++;
                    }
                ?>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>