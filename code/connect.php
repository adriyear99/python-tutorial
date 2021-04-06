<?php

	$host = '127.0.0.1';
	$bd = 'teste';
	$userbd = 'root';
	$senhabd = '';

	
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
	

	$conexao = mysqli_connect($host,$userbd,$senhabd,$bd);

	if($conexao){
		echo "A conexão foi estabelecida com o banco de dados<br>";
	}else{
		echo "Erro de conexão com o localhost<br>";
	}

	/*
	$query = "INSERT INTO resultados (id,nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) 
	VALUES (DEFAULT,$nome,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10)";
	*/

	$query = "INSERT INTO resultados (nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) 
	VALUES ('teste','a','a','a','a','a','a','a','a','a','a')";

	mysqli_query($conexao,$query);
	echo "Seu cadastro foi realizado com sucesso";

	mysqli_close($conexao);
?>