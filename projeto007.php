<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<title> operadores de Incremento e Decremento</title>
		<meta charset="utf-8">
		
	</head>

	<body>

		<?php
		//operadores de incremento e decremento
			echo"<h3>Pôs-incremento</h3>";
			$a = 5;
			echo "Deve ser 5: " . $a++ ."<br \>";
			echo "Deve ser 6: ". $a . "<br\>";

			echo"<h3>Pré-incremento</h3>";
			$a = 5;
			echo "Deve ser 6: " . ++$a ."<br \>";
			echo "Deve ser 6: ". $a . "<br\>";
			
			echo"<h3>Pôs-deremento</h3>";
			$a = 5;
			echo "Deve ser 5: " . $a-- ."<br \>";
			echo "Deve ser 4: ". $a . "<br\>";
			
			echo"<h3>Pré-decremento</h3>";
			$a = 5;
			echo "Deve ser 4: " . --$a ."<br \>";
			echo "Deve ser 4: ". $a . "<br\>";
		?>
	</body>
</html>