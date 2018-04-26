<?php
session_start();
$base_url = 'http://localhost/loja/';
$conexao = pg_connect('host=localhost port=5432 dbname=lojalpw user=postgres password=senha5');
if(!$conexao){
	echo 'nao rolou';
}