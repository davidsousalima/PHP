﻿<!DOCTYPE html>
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
		<form method="get" action="02-tabuada.php">
			<select name="num">
				<?php
					for($c =1;$c <= 10;$c++){
						echo "<option>$c</option>";
					}
				?>
			</select>
			<input type="submit" value="Tabuada">
		</form>
    </div>
</body>
</html>