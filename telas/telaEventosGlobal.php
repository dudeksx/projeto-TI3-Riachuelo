<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "config/conexao.php";

// LÓGICA DA BARRA DE BUSCA SIMPLIFICADA

// Os dois pontos de interrogação ao final (??) garantem que o PHP não retorne um erro se o campo estiver vazio
$campoBusca = $_GET['search_field'] ?? '';
// Protege APENAS para que a query não quebre com apóstrofos (''),
$campoBuscaSeguro = $conn->real_escape_string($campoBusca);
$sql = "SELECT * FROM evento"; 
  // Se o campoBuscaSegura NÃO está vazio, realiza o SQL com o filtro 
// if (!empty($campoBuscaSeguro)) {
//   $sql .= " WHERE nome LIKE
//   '%$campoBuscaSeguro%'";
// }
$resultado = $conn->query($sql); ?>

<!DOCTYPE html>
<html lang="PT-br" data-bs-theme="auto">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Matheus CEO,Guilherme, Alisson, Leo, Eduardo, Gustavo" />
  <meta name="generator" content="Astro v5.13.2" />
  <title>Tela de Eventos</title>
  <link rel="icon" type="image/png" href="estaticos/brand/logo.png" />

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/eventosGlobal.css" />

  <!-- Script para Troca de Tema (Dark/Light) -->
  <script src="js/color-modes.js"></script>
  <meta name="theme-color" content="#712cf9" />
</head>

<body class="d-flex flex-column vh-100">
  <!-- SVGs para Ícones do Bootstrap -->
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
      </path>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
      </path>
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
      </path>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
      </path>
    </symbol>
  </svg>

  <main>
    <!-- Área de Conteúdo Principal (Scrolável) -->
    <!-- Cabeçalho do Conteúdo -->
    <header class="py-3 text-center container">
      <section class="d-flex justify-content-center align-items-center gap-3" id="sectionCriarEvento">
        <form action="../processos/eventosGlobal/busca.php" method="get" class="flex-grow-1" role="search"
          style="height: 73px; margin-top: 2%">
          <input type="search" class="form-control" name="search_field" placeholder="Busca..." aria-label="Search" />
        </form>
      </section>
    </header>

    <!-- Album/Grid de Eventos -->
    <div class="album py-10 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-12 g-3">
          <!-- Início do Loop PHP para Eventos -->
          <?php
          while (
            $evento =
            $resultado->fetch_assoc()
          ) { ?>

            <div class="col">
              <div class="card shadow-sm">
                <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225"
                  preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                  <title><?php echo $evento['nome']; ?></title>
                  <rect width="100%" height="100%" fill="#55595c"></rect>
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                    <?php echo $evento['nome']; ?>
                  </text>
                </svg>
                <div class="card-body">
                  <p class="card-text">
                    <?php
                    echo $evento['endereco'], '<br>', "Data: ", $evento['data'];
                    ?>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- Botão Abre Modal "Acessar" -->
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                      data-bs-target="#modalEvento1">
                      Acessar
                    </button>
                    <small class="text-body-secondary">
                      <?php echo "Evento criado há: 2 horas"; ?>
                    </small>
                    <div class="btn-group"></div>
                  </div>
                </div>
              </div>
            </div>

            <?php
          } // Fim do while loop
          ?>
          <!-- Fim do Loop PHP -->
        </div>
      </div>
    </div>
  </main>

  <!-- ================================================== -->
  <!--          DEFINIÇÕES DOS MODAIS                   -->
  <!-- ================================================== -->
  <!-- É uma prática melhor manter os modais fora do fluxo principal, 
         aqui no final do <body>, para evitar bugs. -->

  <!-- Modal: Alugar Local (Chamado pelos Cards do Loop) -->
  <div class="modal fade" id="modalEvento1" tabindex="-1" role="dialog" aria-labelledby="modalEvento1Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEvento1Label">Local:</h5>
        </div>
        <div class="modal-body">
          <h4>Dados do evento</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Fechar
          </button>
          <button type="button" class="btn btn-primary">
            Confirmar Presença
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ================================================== -->
  <!--                 SCRIPTS JS                       -->
  <!-- ================================================== -->

  <!-- Bootstrap JS Bundle (vem com Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>