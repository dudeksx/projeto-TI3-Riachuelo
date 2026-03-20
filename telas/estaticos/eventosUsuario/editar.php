<?php
include "../conexao.php";

$id = $_GET['id_evento'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $data = $_GET['data'];
    $hora = $_GET['hora'];
    $sql = "UPDATE evento SET nome = '$nome', endereco = '$endereco', `data`= '$data', hora = '$hora' WHERE id_evento=$id";
    $conn->query($sql);
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM evento WHERE id_evento=$id";
$resultado = $conn->query($sql);
$nome = $resultado->fetch_assoc();
?>

<h2>Editar Evento</h2>
<form method="post">
    Nome do Evento: <input type="text" name="nome" value="<?= $nome['nome'] ?>" required>
    Endereço: <input type="text" name="endereco" value="<?= $endereco['endereco'] ?>" required>
    Data: <input type="date" name="salario" value="<?= $data['data'] ?>" required>
    Hora: <input type="time" name="salario" value="<?= $hora['hora'] ?>" required>
    <button type="submit">Salvar</button>
</form>