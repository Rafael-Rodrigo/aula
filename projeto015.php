<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Comando de Repetição - Do...While</title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			$a = 1;
			$b = 1;
			
			do{
				if($a == 1){
					echo "E-mail teste: $a <br/>";
				}else{
					echo "E-mail Enviado: $a <br/>";
				}
				$a++;
			}while ($a< $b);
			
		?>

		</body>
</html>