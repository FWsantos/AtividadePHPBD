<?php
//Arquivo para importar conexão

$server = "localhost";
$user   = "root";
$pass   = "";
$dbname = "atividadephpbd";

//Abrindo Conexão
$conn = new mysqli($server,$user,$pass,$dbname);

if ($conn->connect_error) {
	die("Conexão falhou: ".mysqli_connect_error());
}
?>