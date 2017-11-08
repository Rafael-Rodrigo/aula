
<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Estrutura de controle IF, ELSE e ElSEIF</title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			$a = 5;
			echo "Valor da variavel:$a <br/>";
			If($a == 2){
				echo "Depositar dinheiro";
			}elseif($a == 3){
				echo "Sacar Dinheiro";
			}elseif ($a == 4){
				echo"Imprimir Cheque";
			}elseif($a == 5){
				echo"Pagar Conta";
			}
			else{
			echo "Opção não encontrada";
			}
		?>

		</body>
</html>