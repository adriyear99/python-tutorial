<!DOCTYPE html>
<html>
	<head>
		<title>Resultados</title>
		<meta charset="utf-8">
		<meta name="keywords" content="python,tutorial,html,css,js,ceub,programação">
		<meta name="author" content="Adriano Tavares">
		<meta name="description" content="Tutorial interativo online para aprender os conceitos básicos da linguagem Python em questão de minutos">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1">
		<link rel="stylesheet" href="main.css">
		<link href="img/favicon.ico" rel="icon" type="image/x-icon">
		<script src="main.js"></script>
	</head>

	<body>

		<table>
			<tr>
				<th>Nome</th>
				<th>Resultado</th>
			</tr>

			<?php
				// Exibição dos dados da tabela na página

				$conexao = new mysqli('127.0.0.1:3306','root','root','teste');

				$sql = "SELECT nome,certas FROM resultados WHERE nome != '' ORDER BY certas DESC";
				$resultado = $conexao -> query($sql);

				if($resultado -> num_rows > 0){
					while($row = $resultado -> fetch_assoc()){
						echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["certas"] . "</td></tr>";
					}
					echo "</table>";
				}else{
					echo "Nenhum resultado";
				}

				mysqli_close($conexao);
			?>
		</table>
	</body>
</html>