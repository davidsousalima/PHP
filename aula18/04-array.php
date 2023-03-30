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
		<pre>
			<?php
				$v =array( 
				0=>5,
				1=>9,
				2=>8,
				3=>7);	
				unset($v[0]);
				print_r($v);
				
			?>
		</pre>
    </div>
</body>
</html>