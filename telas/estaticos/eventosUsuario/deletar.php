<?php
include "../conexao.php";

$id = $_GET['id_evento'];

$sql = "DELETE FROM evento WHERE id_evento=$id";
$conn->query($sql);

header("Location: index.php");
