<?php
// 1. Inclui a conexão
include "../conexao.php";

// 2. Captura dos dados do formulário
$nome = $_POST['nome_usuario'];
$sobreNome = $_POST['sobrenome_usuario'];
$telefone = $_POST['telefone'];
$registro = $_POST['cpf'];
$email = $_POST['email'];
$dt_nascimento = $_POST['dt_nascimento'];
$senha = $_POST['senha'];
$enderecoUsuario = $_POST['endereco'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];

    // 3.2. O SQL com placeholders "?" para segurança
    $sql = "INSERT INTO usuario (nome_usuario, sobrenome_usuario, telefone, email, registro, dt_nascimento, senha, endereco, pais, estado) 
                    VALUES('$nome', '$sobreNome', '$telefone', '$email', '$registro', '$dt_nascimento', '$senha', '$enderecoUsuario', '$pais', '$estado')";
                // --    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $conn->query($sql);

    // 3.4. Executa o SQL, passando as variáveis com segurança

    // 3.5. Se tudo deu certo, redireciona para a página de login
    header("Location: ../../index.php");
    exit;
?>