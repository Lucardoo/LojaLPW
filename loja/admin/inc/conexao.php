<?php
session_start();

//configura com o TEU caminho de instalação
$base_path = 'C:/Bitnami/wappstack-7.1.12-0/apache2/htdocs/loja/admin/';
$base_url = 'http://localhost/loja/admin/';

$conexao = pg_connect('host=localhost port=5432 dbname=lojalpw user=postgres password=senha5');
if(!$conexao){
	echo 'nao rolou';
}