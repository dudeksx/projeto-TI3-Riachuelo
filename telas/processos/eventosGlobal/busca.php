<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../conexao.php";

session_start();

$campoBusca = $_GET['search_field'] ?? '';
// O campoBuscaSeguro abaixo realiza uma limpeza na string do campo de busca, sem isso um apóstrofo pode quebrar o código
$campoBuscaSeguro = $conn->real_escape_string($campoBusca);

$sql = "SELECT nome FROM evento WHERE nome LIKE '%$campoBusca%'";

//Armazena o termo de busca na sessão para usar na página HTML
$_SESSION['filtro_busca'] = $campoBusca;

header("Location: ../../event.php");
exit;
?>