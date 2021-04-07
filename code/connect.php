<?php

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

	mysqli_close($conexao);
?>