<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Comando de Repetição - Foreach</title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			$vetor = array(A, B, C, D);
			foreach($vetor as $item){
				echo"Valor atual do vetor: $item. <br/>";
			}
			
		?>

		</body>
</html>