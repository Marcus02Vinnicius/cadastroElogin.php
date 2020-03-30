<?php
$hostname = "localhost";
$user = "root";
$password ="";
$database = "loginmv";

$conexao = @mysqli_connect($hostname, $user, $password, $database);
mysqli_set_charset($conexao,"utf8");

if (!$conexao) {
	echo "Falha na conexao";
}
?>