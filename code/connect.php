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


	$conexao = new mysqli($host,$userbd,$senhabd,$bd);

	if($conexao -> connect_errno){
		echo "Erro de conexão: " . $mysqli -> connect_error;
	}else{
		echo "Conexao realizada com sucesso<br>";
	}

	
	$variaveis = '"' .  $nome . '","' . $q1 . '","' . $q2 . '","' . $q3 . '","' . $q4 . '","' . $q5 . '","' . $q6 . '","' . $q7 . '","' . $q8 . '","' . $q9 . '","' . $q10 . '"';
	echo $variaveis;
	echo "<br>";
	

	$auxiliar = $nome . ',' . $q1;
	echo $auxiliar;
	echo "<br>";

	$query = "INSERT INTO resultados (nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) 
	VALUES (" . $variaveis . ")";

	echo $query;
	echo "<br>";


	mysqli_query($conexao,$query);
	echo "Seu cadastro foi realizado com sucesso";

	mysqli_close($conexao);
?>