<?php
session_start();
include "conexao.php";

$nome = $_POST['nome'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$data = $_POST['data'] ?? '';
$hora = $_POST['hora'] ?? '';
$usuario = $_SESSION['id_usuario'] ?? '';


$sql = "INSERT INTO evento (id_usuario, nome, endereco,`data`,hora) VALUES ('$usuario' ,'$nome', '$endereco' ,'$data' ,'$hora')";
$conn->query($sql);

header ("location: eventosUsuario.php");
exit;
?>
