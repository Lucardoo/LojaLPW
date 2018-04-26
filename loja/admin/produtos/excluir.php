<?php
require_once('../inc/conexao.php');
if(isset($_SESSION['nome']))
{
	$id=$_GET['id'];

	$sql="DELETE FROM produtos WHERE id='$id'";
	$res=pg_query($conexao,$sql);
	header('Location: '.$base_url.'produtos/index.php');
}
else
{
  header('Location: '.$base_url.'index.php');
}
?>