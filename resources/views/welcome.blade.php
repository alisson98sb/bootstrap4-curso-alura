<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fruta e fruto</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="">
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"> -->

  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">fruta & fruto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end"
            id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Início</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Receitas</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Quem somos</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>  

    <main>
      <!--Carousel-->
      <section class="corrossel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./src/img/carrossel-img1.jpg" class="d-block w-100 imagem-carrossel" alt="...">
              <div class="carousel-caption d-none d-md-block h-50">
                <h1 class="fonte-titulo display-4">Reaproveite melhor os alimentos!</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./src/img/carrossel-img2.jpg" class="d-block w-100 imagem-carrossel" alt="...">
              <div class="carousel-caption d-none d-md-block h-50">
                <h1 class="fonte-titulo display-4">Economize e ganhe em saúde!</h1>
              </div>
            </div>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      
      <section id="titulo">
        <h1 class="text-center fonte-titulo cor-especial pt-5">Receitas para economizar e ganhar saúde</h1>
        <p class="text-center text-secondary pb-5">Nossas receitas ajudam você a aproveitar melhor os alimentos, economizar, ganhar tempo e praticidade</p>
      </section>
          
      <section class="container-fluid bg-light" id="receitas">
        <div class="row justify-content-center">

          <!--Abacate-->
          <article class="card borda-cor-especial card-largura p-0 m-4 col-12 coll-md-4">
            <img src="src/img/receita-abacate.jpg" class="card-img-top card-position-imagem" alt="tigela com salada de abacate,
            vista superior">
            <div class="card-body">
              <h5 class="card-title">Tigela de abacate</h5>
              <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
              <a href="#" class="btn botao-cor-especial-background">Veja a receita</a>
            </div>
          </article>
          
          <!--Kiwi-->
          <article class="card borda-cor-especial card-largura p-0 m-4 col-12 coll-md-4">
            <img src="src/img/receita-kiwi.jpg" class="card-img-top card-position-imagem" alt="prato com mix de vegetais e mão de pessoa adicionando azeite, vista superior">
            <div class="card-body">
              <h5 class="card-title">Salada de kiwi</h5>
              <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
              <a href="#" class="btn botao-cor-especial-background">Veja a receita</a>
            </div>
          </article>
          
          <!--Mix de vegetais-->
          <article class="card borda-cor-especial card-largura p-0 m-4 col-12 coll-md-4">
            <img src="src/img/receita-mix.jpg" class="card-img-top card-position-imagem" alt="prato com mix de vegetais e mão de pessoa adicionando azeite, vista superior">
            <div class="card-body">
              <h5 class="card-title">Mix de vegetais</h5>
              <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
              <a href="#" class="btn botao-cor-especial-background">Veja a receita</a>
            </div>
          </article>
          
          <!--Pimentões à Juliana-->
          <article class="card borda-cor-especial card-largura p-0 m-4 col-12 coll-md-4">
            <img src="src/img/receita-pimentoes.jpg" class="card-img-top card-position-imagem" alt="prato de salada de pimentões com alguns ingredientes ao lado, vista superior">
            <div class="card-body">
              <h5 class="card-title">Pimentões à Juliana</h5>
              <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
              <a href="#" class="btn botao-cor-especial-background">Veja a receita</a>
            </div>
          </article>
        
          <!--Prato oriental-->
          <article class="card borda-cor-especial card-largura p-0 m-4 col-12 coll-md-4">
            <img src="src/img/receita-oriental.jpg" class="card-img-top card-position-imagem" alt="tigela com salada de vegetais estilo oriental, vista de cima">
            <div class="card-body">
              <h5 class="card-title">Prato oriental</h5>
              <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
              <a href="#" class="btn botao-cor-especial-background">Veja a receita</a>
            </div>
          </article>
          
          <!--Beterrabas assadas-->
          <article class="card borda-cor-especial card-largura p-0 m-4 col-12 coll-md-4">
            <img src="src/img/receita-beterrabas.jpg" class="card-img-top card-position-imagem" alt="tigela com beterrabas e dentes de alho assados em primeiro plano, com ingredientes ao fundo">
            <div class="card-body">
              <h5 class="card-title">Beterrabas assadas</h5>
              <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
              <a href="#" class="btn botao-cor-especial-background">Veja a receita</a>
            </div>
          </article>
        </div>
      </section>
      
    </main>
    
    <footer>

    </footer>


    <p>contato:<a href="mailto:email@frutafruto.com.br">email@frutafruto.com.br</a></p>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"></script>
  </body>
</html>
