<?php

include "telas/processos/processoIndex.php"; ?>


<!DOCTYPE html>
<html lang="PT-br" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Matheus R, Guilherme, Alisson, Leo, Eduardo, Gustavo" />
  <title>Página Principal</title>
  <link rel="icon" type="image/png" href="telas/estaticos/brand/logo.png" />
  <meta name="generator" content="Astro v5.13.2" />
  <script src="telas/js/color-modes.js"></script>
  <link href="telas/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="theme-color" content="#712cf9" />
  <link href="telas/css/index.css" rel="stylesheet" />
</head>

<body>

  <!-- Ícones da barra lateral -->
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="home" viewBox="0 0 16 16">
      <path
        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
      </path>
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path
        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
      </path>
      <path fill-rule="evenodd"
        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
      </path>
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path
        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
      </path>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
      <path fill-rule="evenodd"
        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
      </path>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path
        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z">
      </path>
    </symbol>
  </svg>

  <main class="d-flex flex-nowrap">
    <!-- Barra Lateral -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="telas/estaticos/brand/logo.png" alt="logo empresa" class="bi pe-none me-2" width="40" height="32"
          aria-hidden="true" />
        <span class="fs-4">Find&Go</span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page" id="menu-home"
            data-page="telas/telaEventosGlobal.php">
            <svg class="bi" width="16" height="16" aria-hidden="true">
              <use xlink:href="#home"></use>
            </svg>
            Página Inicial
          </a>
        </li>

        <li>
          <a href="#" class="nav-link text-white" id="menu-locacao" data-page="telas/telaAlugarLocal.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-up"
              viewBox="0 0 16 16">
              <path
                d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z" />
              <path
                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 1 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.707l1.5-1.5a.5.5 0 0 1 .708 0Z" />
            </svg>
            Locação
          </a>
        </li>
        <li>
          <a type="button" id="btnCriarEvento" class="nav-link text-white" href="#"
            data-page="telas/eventosUsuario.php">
            <svg class="bi" width="16" height="16" aria-hidden="true">
              <use xlink:href="#grid"></use>
            </svg>
            Seus Eventos
          </a>
        </li>

        <li>
          <a href="#" class="nav-link text-white" id="menu-favoritos" data-page="telas/WIP.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-bookmark-heart" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
              <path
                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
            </svg>
            Favoritos
          </a>
        </li>

        <li>
          <a href="#" class="nav-link text-white" id="fav" data-page="telas/WIP.php">
            <svg class="bi" width="16" height="16" aria-hidden="true">
              <use xlink:href="#people-circle"></use>
            </svg>
            Convidados
          </a>
        </li>
      </ul>
      <hr />
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="telas/estaticos/img/user.jpg" alt="" width="32" height="32" class="rounded-circle me-2" />
          <strong><?php echo htmlspecialchars($_SESSION['usuario'] ?? "Usuário"); ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li>
            <a class="dropdown-item" href="#" data-page="telas/WIP.php">Configurações</a>
          </li>
          <li>
            <a class="dropdown-item" href="telas/usuario.php" data-page="telas/usuario.php"
              target="conteudoPagina">Perfil</a>
            <input type="checkbox" id="perfil" style="position: absolute; left: -999px" />
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li>
            <a class="dropdown-item" href="telas/login.php">Sair ->

            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="b-example-divider b-example-vr"></div>
    <!-- iframe user -->
    <div class="row w-100">
      <div class="col-lg-12 my-1" id="containerIframeUser">
        <iframe title="Conteúdo da página" name="conteudoPagina" id="iframeUser" width="100%" height="100%"
          style="border: 0" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
          src="telas/telaEventosGlobal.php">
        </iframe>
      </div>
    </div>
  </main>

  <script src="telas/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
  <script src="telas/js/index.js" class="astro-vvvwv3sm"></script>
  <script src="telas/js/main.js"></script>
</body>

</html>