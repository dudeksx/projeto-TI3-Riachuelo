<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "config/conexao.php"; ?>

<!DOCTYPE html>
<html lang="PT-br" data-bs-theme="auto">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Matheus CEO,Guilherme, Alisson, Leo, Eduardo, Gustavo" />
  <meta name="generator" content="Astro v5.13.2" />
  <title>Alugue um local</title>
  <link rel="icon" type="image/png" href="estaticos/brand/logo.png" />

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/alugarLocal.css" />

  <!-- Script para Troca de Tema (Dark/Light) -->
  <script src="js/color-modes.js"></script>
  <meta name="theme-color" content="#712cf9" />
</head>

<body class="d-flex flex-column vh-100">
  <main>
    <!-- Área de Conteúdo Principal (Scrolável) -->
    <header class="py-3 container" style="height: 63px">
      <h2>Procure o lugar ideal para seu evento!</h2>
    </header>
    <!-- Album/Grid de Eventos -->
    <div class="album py-8 bg-body-tertiary mb-3">
      <div class="container">
        <div class="row row-cols-sm-3 g-3">
          <!-- Início do Loop PHP para Eventos -->
           <?php
          $sql = "SELECT * FROM evento";
          $resultado = $conn->query($sql);
          while (
            $evento =
            $resultado->fetch_assoc()
          ) { ?> 

            <div class="col">
              <div class="card shadow-sm">
                <img src="estaticos/img/saba.jpg" alt="Imagem da frente do local da Saba"
                  style="height: 225px; object-fit: cover" />
                <div class="card-body">
                  <p class="card-text">
                    <!-- <?php
                    echo $evento['endereco'], '<br>', "Data: ",
                      $evento['data']; ?> -->
                    Local: SABA <br />
                    <br />
                    Endereço: Avenida Central, n.º 5 - Centro, Xangri-lá - RS,
                    95588-000
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- Botão Abre Modal "Acessar" -->
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#modalEvento1">
                        Alugue
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      Alugado por: Zé Bananinha
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="estaticos/img/casaCultura.jpeg"
                  alt="Imagem da frente do local da Casa de Cultura Érico Veríssimo"
                  style="height: 225px; object-fit: cover" />
                <div class="card-body">
                  <p class="card-text">
                    <!-- <?php
                    echo $evento['endereco'], '<br>', "Data: ",
                      $evento['data']; ?> -->
                    Local: Casa de Cultura Érico Veríssimo <br />
                    <br />
                    Endereço: Av. Flávio Boianowski 789, Capão da Canoa, RS,
                    95555
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- Botão Abre Modal "Acessar" -->
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#modalEvento1">
                        Alugue
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      Alugado por: Elma Santa
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="estaticos/img/santaLuzia.jpeg" alt="Imagem da frente do local do Santa Luzia"
                  style="height: 225px; object-fit: cover" />
                <div class="card-body">
                  <p class="card-text">
                    <!-- <?php
                    echo $evento['endereco'], '<br>', "Data: ",
                      $evento['data']; ?> -->
                    Local: Hospitop Saint Louise <br />
                    <br />
                    Endereço: Rua Dom Luiz Guanella 2864, Capão da Canoa, RS,
                    95555
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- Botão Abre Modal "Acessar" -->
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#modalEvento1">
                        Alugue
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      Alugado por: Almo Saria
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="estaticos/img/saba.jpg" alt="Imagem da frente do local da Saba"
                  style="height: 225px; object-fit: cover" />
                <div class="card-body">
                  <p class="card-text">
                    <!-- <?php
                    echo $evento['endereco'], '<br>', "Data: ",
                      $evento['data']; ?> -->
                    Local: SABA <br />
                    <br />
                    Endereço: Avenida Central, n.º 5 - Centro, Xangri-lá - RS,
                    95588-000
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- Botão Abre Modal "Acessar" -->
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#modalEvento1">
                        Alugue
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      Alugado por: Zé Bananinha
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="estaticos/img/casaCultura.jpeg"
                  alt="Imagem da frente do local da Casa de Cultura Érico Veríssimo"
                  style="height: 225px; object-fit: cover" />
                <div class="card-body">
                  <p class="card-text">
                    <!-- <?php
                    echo $evento['endereco'], '<br>', "Data: ",
                      $evento['data']; ?> -->
                    Local: Casa de Cultura Érico Veríssimo <br />
                    <br />
                    Endereço: Av. Flávio Boianowski 789, Capão da Canoa, RS,
                    95555
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- Botão Abre Modal "Acessar" -->
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#modalEvento1">
                        Alugue
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      Alugado por: Elma Santa
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="estaticos/img/santaLuzia.jpeg" alt="Imagem da frente do local do Santa Luzia"
                  style="height: 225px; object-fit: cover" />
                <div class="card-body">
                  <p class="card-text">
                    <!-- <?php
                    echo $evento['endereco'], '<br>', "Data: ",
                      $evento['data']; ?> -->
                    Local: Hospitop Saint Louise <br />
                    <br />
                    Endereço: Rua Dom Luiz Guanella 2864, Capão da Canoa, RS,
                    95555
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- Botão Abre Modal "Acessar" -->
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#modalEvento1">
                        Alugue
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      Alugado por: Almo Sar
                    </small>
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
</body>

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
        <h4>Capacidade: 150 pessoas</h4>

        <p>Preço: R$ 3500/dia</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Fechar
        </button>
        <button type="button" class="btn btn-primary">
          Confirmar Aluguel
        </button>
      </div>
    </div>
  </div>
</div>

</html>