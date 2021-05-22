<!DOCTYPE HTML>
<html>
	<head>
		<title>Final</title>
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
				echo "<br><h4>Erro de conexão: " . $mysqli -> connect_error . "</h4>";
			}else{
				echo "<br><h4>Conexão realizada com sucesso</h4><br>";
			}

			$variaveis = '"' .  $nome . '","' . $q1 . '","' . $q2 . '","' . $q3 . '","' . $q4 . '","' . $q5 . '","' . $q6 . '","' . $q7 . '","' . $q8 . '","' . $q9 . '","' . $q10 . '","' . $certas . '"';

			$query = "INSERT INTO resultados (nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,certas) 
			VALUES (" . $variaveis . ")";

			$query2 = "SELECT * FROM resultados WHERE nome = '$nome'";
			$verify = mysqli_query($conexao,$query2);

			if(mysqli_num_rows($verify) > 0){
				echo "<h4>Nome de usuário já existe. Os resultados não serão salvos.</h4><br><br>";
			}else if(empty($nome)){
				echo "<h4>Nome de usuário vazio. Os resultados não serão salvos.</h4><br><br>";
			}else{
				mysqli_query($conexao,$query);
				echo "<h4>Seu cadastro foi realizado com sucesso</h4><br>";
				echo "<br><h4>Pontuação: " . $certas . "</h4><br><br>";
			}
		?>

		<nav class="centro">
			<button type="button" id="botao3" class="botao tipo1 borda" onclick="result()">Ver resultados</button>
			<button type="button" id="botao4" class="botao tipo1 borda" onclick="answer()">Ver gabarito</button>
		</nav>

		<br><br>

	</body>