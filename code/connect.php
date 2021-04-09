<!DOCTYPE HTML>
<html>
	<head>
		<title>Teste Python</title>
		<meta charset="utf-8">
		<meta name="keywords" content="python,tutorial,html,css,js,ceub,programação">
		<meta name="author" content="Adriano Tavares">
		<meta name="description" content="Tutorial interativo online para aprender os conceitos básicos da linguagem Python em questão de minutos">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1">
		<!-- <meta http-equiv="Refresh" content="10;index.html"> -->
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

				// Conexão com banco de dados

				$host = '127.0.0.1:3306';
				$bd = 'teste';
				$userbd = 'root';
				$senhabd = 'root';

				
				$nome = $_POST['nome'];
				$q1 = $_POST['q1'];
				$q2 = $_POST['q2'];
				$q3 = $_POST['q3'];
				$q4 = $_POST['q4'];
				$q5 = $_POST['q5'];
				$q6 = $_POST['q6'];
				$q7 = $_POST['q7'];
				$q8 = $_POST['q8'];
				$q9 = $_POST['q9'];
				$q10 = $_POST['q10'];

				$respostas = ['b','e','c','b','c','b','a','d','a','b'];
				$perguntas = [$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10];
				$certas = 0;

				for($i = 0; $i < count($perguntas); $i++){
					if($perguntas[$i] == $respostas[$i]){
						$certas += 1;
					}
				}


				$conexao = new mysqli($host,$userbd,$senhabd,$bd);

				if($conexao -> connect_errno){
					echo "Erro de conexão: " . $mysqli -> connect_error;
				}else{
					echo "Conexão realizada com sucesso<br>";
				}

				$variaveis = '"' .  $nome . '","' . $q1 . '","' . $q2 . '","' . $q3 . '","' . $q4 . '","' . $q5 . '","' . $q6 . '","' . $q7 . '","' . $q8 . '","' . $q9 . '","' . $q10 . '","' . $certas . '"';
				
				$query = "INSERT INTO resultados (nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,certas) 
				VALUES (" . $variaveis . ")";

				mysqli_query($conexao,$query);
				echo "Seu cadastro foi realizado com sucesso<br>";
				echo $query;
				echo "<br>Pontuação: " . $certas;


				// Exibição dos dados da tabela na página

				$sql = "SELECT id,nome,certas FROM resultados";
				$resultado = $conexao -> query($sql);

				if($resultado -> num_rows > 0){
					while($row = $resultado -> fetch_assoc()){
						echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["certas"] . "</td></tr>";
					}
					echo "</table>";
				}else{
					echo "Nenhum resultado";
				}

				mysqli_close($conexao);
			?>
		</table>


	</body>