<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// O bloco lógico abaixo simplesmente valida se a sessão já está ativa, se não, é criada a sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Após, verifica se existe um usuário criado na sessão, se não redireciona.
// if (!isset($_SESSION['usuario'])) {
//     header("Location: ../../telas/iniciais/login.php");
//     exit;
// }

$nomeUsuario = $_SESSION['usuario'] ?? '';
