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
        <form action="03-exercicio.php" method="get">
            <label for="num1">Inicio:</label>
            <input type="number" name="n1" id="num1" max="100" min="0" required>
            <label for="num2">Final:</label>
            <input type="number" name="n2" id="num2" max="100" min="0" required>
            <label for="num3">Incremento</label>
            <select name="n3" id="num3">
                <?php
					$c = 1;
					while($c <= 5){
						echo "<option value='$c'>$c</option>";
						$c++;
					}
                ?>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>