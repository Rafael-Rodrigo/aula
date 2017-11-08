<!DOCTYPE html>
	<html>
		<head lang="pt-br">
			<title> Operadores Logico </title>
			<meta charset="utf-8">
			
		</head>

		<body>
		
		<?php
			$a = 10;
			$b = 8;
			$c = 2;
			
			if(($a == 10)and($b == 8)){
				echo "Utilizado E: Verdadeiro.  </br>";
			}
			
			if(($a == 10) or ($b == 7)){
				echo "Utilizado OU: Verdadeiro. <br/>";
			}
			
			if(($a == 10) xor ($b == 7)){
				echo "Utilizado XOR: Verdadeiro. <br/>";
			}
			
			if(!empty($c)){
				echo "Utilizado !: Verdadeiro. <br/>";
			}
			
			if(($a ==10) && ($b == 8)){
				echo "Utilizado &&: Verdadeiro. <br/>";
			}
			
			if(($a == 10) || ($b == 8)){
				echo "Utilizado ||: Verdadeiro. <br/>";
			}
			
				
		?>
		</body>
	</html>