<?php
// 1. Inclui a conexão
include "assets/modules/signIn/conexao.php";

// 2. Captura dos dados do formulário
$nome = $_POST['nome_usuario'];
$sobreNome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$dt_nascimento = $_POST['dt_nascimento'];
$senha = $_POST['senha'];
$enderecoUsuario = $_POST['endereco'];
$complemento = $_POST['complemento'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];

// 3. Insere o SQL com placeholders "?" para segurança
$sql = "INSERT INTO usuario (nome_usuario, sobrenome_usuario, telefone, usuario, email, dt_nascimento, senha, endereco, complemento, pais, estado) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$conn->query($sql);

// 4. Se tudo deu certo, redireciona para a página de login
header("Location: login.php");
exit;
?>