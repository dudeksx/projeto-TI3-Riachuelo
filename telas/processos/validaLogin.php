<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conexao.php";

// Inicia a sessão para armazenar o status do login do usuário.
session_start();

// O uso de '?' (operador coalescente) evita erros se os campos POST não existirem.
$usuario = $_POST['usuario'] ?? '';
$senha_digitada = $_POST['senha'] ?? '';


$sql = "SELECT id_usuario, senha, nome_usuario FROM usuario WHERE nome_usuario = '$usuario' AND senha = '$senha_digitada'";


$resultado = $conn->query($sql);

// Valida se a conexão foi um sucesso e se a busca puxou apenas um usuário, visto que só pode haver um usuario com esse nome
if ($resultado && $resultado->num_rows === 1) {
    // LOGIN BEM-SUCEDIDO
    $usuarioLogin = $resultado->fetch_assoc();

    // Define variáveis de sessão
    $_SESSION['id_usuario'] = $usuarioLogin['id_usuario'];
    $_SESSION['usuario'] = $usuarioLogin['nome_usuario'];
    $_SESSION['logado'] = true;

    // Redireciona para a página principal
    header("Location: ../index.php");
    exit;

}

?>