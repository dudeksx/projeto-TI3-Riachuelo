<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include  "config/conexao.php";
// LÓGICA DA BARRA DE BUSCA SIMPLIFICADA

// Os dois pontos de interrogação ao final (??) garantem que o PHP não retorne um erro se o campo estiver vazio
$campoBusca = $_GET['search_field'] ?? '';

// Protege APENAS para que a query não quebre com apóstrofos (''),
$campoBuscaSeguro = $conn->real_escape_string($campoBusca);

$sql = "SELECT * FROM evento WHERE id_usuario = {$_SESSION['id_usuario']}";
// Se o campoBuscaSegura NÃO está vazio, realiza o SQL com o filtro
if
(!empty($campoBuscaSeguro)) {
  $sql .= " AND nome LIKE '%$campoBuscaSeguro%'";
}
$resultado = $conn->query($sql); ?>

<!DOCTYPE html>
<html lang="PT-br" data-bs-theme="auto">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Matheus CEO,Guilherme, Alisson, Leo, Eduardo, Gustavo" />
  <meta name="generator" content="Astro v5.13.2" />
  <title>Gerencie seus eventos</title>
  <link rel="icon" type="image/png" href="estaticos/brand/logo.png" />
  <link rel="stylesheet" href="css/eventoUsuario.css" />

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Script para Troca de Tema (Dark/Light) -->
  <script src="js/color-modes.js"></script>
  <meta name="theme-color" content="#712cf9" />
</head>

<body class="d-flex flex-column vh-100">
  

  <main>
    <!-- Área de Conteúdo Principal (Scrolável) -->
    <!-- Cabeçalho do Conteúdo -->
    <header class="py-3 text-center container">
      <!-- Sestion contendo o botão Criar Evento e o campo de busca-->
      <section class="d-flex justify-content-center align-items-center gap-3" id="sectionCriarEvento">
        <form action="inserir.php" method="get">
          <button type="button" id="btnCriarEvento" class="btn btn-info text-white d-flex align-items-center gap-2"
            data-bs-toggle="modal" data-bs-target="#modalEvento">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
              viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
              <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
            Criar Evento
          </button>
        </form>
          
        
        
        <form action="" method="get" class="flex-grow-1" role="search">
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
  <!--                 SCRIPTS JS                       -->
  <!-- ================================================== -->

  <!-- Bootstrap JS Bundle (vem com Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- ================================================== -->
  <!--          DEFINIÇÕES DOS MODAIS                   -->
  <!-- ================================================== -->
  <!-- É uma prática melhor manter os modais fora do fluxo principal, 
         aqui no final do <body>, para evitar bugs. -->

<div class="modal fade" id="modalEvento" tabindex="-1" aria-labelledby="modalEventoLabel" aria-hidden="true">
    <div class="modal-dialog">
          <div class="modal-content">

              <div class="modal-header">
                  <h5 class="modal-title" id="modalEventoLabel">Digite as informações do evento:</h5>
              </div>

              <div class="modal-body">
                  <form action="inserir.php" method="post">

                      <div class="form-group mb-3">
                          <label for="nome_evento">Nome do Evento:</label>
                          <input type="text" name="nome" class="form-control" required>
                      </div>

                      <div class="form-group mb-3">
                          <label for="endereco_evento">Endereço:</label>
                          <input type="text" name="endereco" class="form-control" required>
                      </div>

                      <div class="form-group mb-3">
                          <label for="data_evento">Data:</label>
                          <input type="date" name="data" class="form-control" required>
                      </div>

                      <div class="form-group mb-3">
                          <label for="hora_evento">Hora:</label>
                          <input type="time" name="hora" class="form-control" required>
                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                          <button type="submit" class="btn btn-primary">Criar Evento</button>
                      </div>

                  </form>
              </div>

          </div>
      </div>
</div>

<div class="modal fade" id="modalEvento1" tabindex="-1" aria-labelledby="modalEvento1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalEvento1Label">Evento:</h5>
            </div>

            <div class="modal-body">
                <p>Detalhes do evento...</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Confirmar Presença</button>
            </div>

        </div>
    </div>
</div>
</body>



</html>