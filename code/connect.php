<?php

	$host = 'localhost';
	$bd = 'resultados';
	$usuariobd = 'root';
	$senhabd = 'adrianotavares';

	$nome = $_POST['nome']
	$q1 = $_POST['q1']
	$q2 = $_POST['q2']
	$q3 = $_POST['q3']
	$q4 = $_POST['q4']
	$q5 = $_POST['q5']
	$q6 = $_POST['q6']
	$q7 = $_POST['q7']
	$q8 = $_POST['q8']
	$q9 = $_POST['q9']
	$q10 = $_POST['q10']

	// Conectar com o localhost MySQL

	$conexao = mysql_connect($host,$usuariobd,$senhabd);
	if (!$conexao)
		die("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

	// Conectar com a tabela do banco de dados

	$banco = mysql_select_db($bd,$conexao);
	if (!$banco)
		die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

	$query = "INSERT INTO resultados (nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) 
	VALUES ($nome,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10)";

	mysql_query($query,$conexao);
	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

	/*
	if($conexao->connect_error){
		die('Conexão Falhou : '.$conexao->connect_error);
	}else{
		$stmt = $conexao->prepare("insert into registration(nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
			values(?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssssss",$nome,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10);
		$stmt->execute();
		echo "Resultados armazenados";
		$stmt->close();
		$conexao->close();
	}
	*/
?>