<!DOCTYPE html>

<html lang="PT-br" data-bs-theme="auto">
<?php include "processos/usuario.php"; ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="Matheus R" content="Guilherme, Alisson, Leo, Eduardo, Gustavo" />
  <meta name="generator" content="Astro v5.13.2" />
  <title>Página Usuário</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />
  <script src="js/color-modes.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <meta name="theme-color" content="#712cf9" />
  <link href="css/carousel.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/usuario.css">
</head>

<body>
  <!-- Area dos dados do usuario -->

  <main>
    <div style="display: flex; justify-content: center">
      <img src="estaticos/img/user.jpg" alt="" width="128" height="128"
        class="rounded-circle me-2 img-icon" />
    </div>

    <br />

    <div class="username" style="
          margin: 1% 45% 1% 45%;
          background: rgb(66, 66, 95);
          border-radius: 5%;
        ">
      <h4><?php echo "Olá ", $_SESSION['usuario'], "!"; ?> </h4>
       
    </div>
    <li class="list-user" style="text-decoration: underline">
      Seguidores - Favoritos - Eventos Recentes
    </li>
    <h2 class="bio">Bio</h2>
    <div class="bio">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, cum
      dignissimos inventore tempora voluptatem pariatur dolorem aspernatur
      similique voluptas, quas illum, totam ex quia iusto velit earum. Quas,
      facere perspiciatis.
    </div>

    <hr />

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="estaticos/img/foto1.jpeg" alt="Foto de Evento" style="width: 100%; height: 100%" />

          <div class="container">
            <div class="carousel-caption text-start" style="background-color: white; border-radius: 15px">
              <h1>Esta tela serve.</h1>
              <p>
                Para apresentar de uma forma animada as fotos que você tirou
                ou os seus eventos em andamento.
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="estaticos/img/foto2.jpeg" alt="Foto de Evento" style="width: 100%; height: 100%" />
          <div class="container">
            <div class="carousel-caption" style="background-color: white; border-radius: 15px">
              <h1>Exemplo com 2 fotos.</h1>
              <p>
                Pode escrever algo aqui, um comentario seu ou uma descrição do
                evento.
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="estaticos/img/cursed.jpeg" alt="Foto de Evento" style="width: 100%; height: 100%" />
          <div class="container">
            <div class="carousel-caption text-end" style="
                  background-color: rgba(255, 255, 255, 0.329);
                  border-radius: 15px;
                ">
              <h1>Como centraliza.</h1>
              <br />
              <h3>div</h3>
              <p>
                "guanabara center, div center align items center>/guanabara>"
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#">Acessar evento</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4"></div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4"></div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>
        &copy; 2017–2025 Find&Go. &middot;
        <a href="#">Privacidade</a> &middot; <a href="#">Termos</a>
      </p>
    </footer>
  </main>
  <script src="js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>

</html>