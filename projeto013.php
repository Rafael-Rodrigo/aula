<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Estrutura de controle Switch</title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			$a = 8;
			
			switch($a){
				case 1:
				echo "Sacar Dinheiro";
				break;
				case 2;
					echo "Depositar Dinheiro";
				break;
				case 3;
					echo "Imprimir Cheque";
				break;
				
				default:
					echo "Opção não Encontrada";
				break;
				}
		?>

		</body>
</html>