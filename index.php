<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!--bootstrap-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!--css-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="bg-image">
<!--NavBar-->
<header>
 <nav class="navbar navbar-expand-sm navbar-light bg-pink">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="imagens/logo.png"> </img></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Bem vindo!<span class="visually-hidden">(current)</span></a>
                </li>
            </ul>
        </div>
   </div>
 </nav>
 </header>

 
 <!--Carrossel-->
 <div class="container-fluid col-md-9 col-lg-9 mt-3">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/slide1.png" class="d-block w-100" alt="Slide1">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/slide3.png" class="d-block w-100" alt="Slide2">
      <div class="carousel-caption d-none d-md-block">
        <h5>TBD</h5>
        <p>Logo a data de lançamento da pré-Alpha será revelada. Fique de olho!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/slide2.png" class="d-block w-100" alt="Slide3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Uma parceria entre</h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
</div>


<!--Cards-->
<div class="card mt-5 " style="background: pink; max-width: 840px;">
  <div class="row no-gutters">
    <div class="col-md-4 col-xs-4" style="background: pink; border-radius: 10px">
      <img src="imagens/card1.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8 col-xs-" style="background: pink; border-radius: 10px">
      <div class="card-body" style="background: pink; border-radius: 10px">
        <h5 class="card-title">Viva a vida de um gato!</h5>
        <p class="card-text">Explore o universo de Amy: The life of a real cat, um jogo de exploração, puzzle, e muito fofura!</p>
        <p class="card-text"><small class="text-muted">Com uma gatinha muito fofa!</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mt-5" style="background: pink; max-width: 840px;">
  <div class="row no-gutters">
    <div class="col-md-4" style="background: pink; border-radius: 10px">
      <img src="imagens/card3.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8" style="background: pink; border-radius: 10px">
      <div class="card-body" style="background: pink; border-radius: 10px">
        <h5 class="card-title">Veja as lembranças!</h5>
        <p class="card-text">Recorde os momentos importantes na vida de Amy, e sinta a emoção da vida de um gato.</p>
        <p class="card-text"><small class="text-muted">Meow!!!!!</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mt-5" style="background: pink; max-width: 840px;">
  <div class="row no-gutters">
    <div class="col-md-4" style="background: pink; border-radius: 10px">
      <img src="imagens/card2.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8" style="background: pink; border-radius: 10px">
      <div class="card-body" style="background: pink; border-radius: 10px">
        <h5 class="card-title">Sorria para a foto!</h5>
        <p class="card-text">Revele as fotos sem perder nenhum pelo no processo!</p>
        <p class="card-text"><small class="text-muted">Xis! *barulho de flash*</small></p>
      </div>
    </div>
  </div>
</div>


<!--OffCanvas Only Smartphone-->
<div class="d-block d-sm-none col-5 my-auto mx-auto" >
<button class="btn btn-primary d-block d-sm-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Fale conosco</button>
<div class="offcanvas-md offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Fale conosco</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-block d-sm-none">
    <a href="https://wa.me/+5545999142496"><p class="" id="offcanvasResponsiveLabel"><button type="button" class="btn btn-success" ><i class="bi bi-whatsapp"></i> Whatsapp</button></p><a>
    <a href="https://www.instagram.com/catstepstudio/"><p class="" id="offcanvasResponsiveLabel"><button type="button" class="btn btn-danger"><i class="bi bi-instagram"></i> Instagram</button></p><a>
    <div class="accordion accordion-flush" id="offcanvasResponsiveLabel accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Contatos comerciais
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">contato.catstepstudio@gmail.com<br><br> gaming.techudyr@gmail.com</div>
    </div>
    
  </div>
  </div>
</div>
</div>



<!--Rodapé-->
</div>
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3" >
      <li class="nav-item d-none d-sm-block"><a href="https://wa.me/+5545999142496" class="nav-link py-2 text-muted" ><i class="bi bi-whatsapp"></a></i></li>
      <li class="nav-item d-none d-sm-block"><a href="https://www.instagram.com/catstepstudio/" class="nav-link px-2 text-muted"><i class="bi bi-instagram"></i></a></li>
      <li class="nav-item"><p class="nav-link py-2 text-muted">Design Gráfico: Vick</p></li>
      <li class="nav-item"><p class="nav-link py-2 text-muted">Diretor de Programação: Gabriel</p></li>
      <li class="nav-item"><p class="nav-link py-2 text-muted">Setor de Ideias: Nikolas</p></li>
    </ul>
    <p class="text-center text-muted">© 2022 CatStep, Studio</p>
  </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>