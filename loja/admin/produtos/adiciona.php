<?php
	require_once('../inc/conexao.php');
	
	$nome=$_POST['nome'];
	$preco=$_POST['preco'];
	$descricao=$_POST['descricao'];
	
	$sql="INSERT INTO produtos(nome,preco,descricao) VALUES ('$nome','$preco','$descricao')";
	$adiciona=pg_query($conexao,$sql);
	header('Location: '.$base_url.'produtos/index.php');
	
?>