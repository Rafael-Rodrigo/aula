<!DOCTYPE html>
	<html>
		<head lang="pt-br">
			<title> Operadores de Comparação</title>
			<meta charset="utf-8">
			
		</head>

		<body>
		
		<?php
			$a = 10;
			$b = 8;
			
			if($a == 10){
				echo "Verdadeiro: O número $a é igual a 10 <br/>";
			}
			
			if($a != 9) {
				echo "Verdadeiro: O número $a é diferente de 9 <br/>";
			}
			
			if($a < 11){
				echo "Verdadeiro: O número $a é menor que 11 <br/>";
			}
			
			if($a > 9) {
				echo "Verdadeiro:  O número $a é maior que 9 <br/>";
			}
			
			if($a <= 10){
				echo "verdadeiro:  O número $a é menor ou igual a 10 <br/>";
			}
			
			if($a>= 10){
				echo "verdadeiro:  O número $a é maior ou igual a 10 <br/>";
			}
			
		?>
		</body>
	</html>