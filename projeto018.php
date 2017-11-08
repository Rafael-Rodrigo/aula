<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Função</title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			function promocao($codigo){
				if($codigo == "cursophp"){
					$erro = true;
				}
				return $erro;
			}
			
			$codigo = "cursophp";
			if (promocao($codigo)){
				echo "codigo Válido";
			}else{
				echo"Codigo Inválido";
				}
			
			
		?>

		</body>
</html>