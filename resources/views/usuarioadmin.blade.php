<!DOCTYPE html>
<html lang="pt-br">
<head>

<title>IBNV</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="#">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ asset('css/style_unico.css') }}" rel="stylesheet" type="text/css" media="all">
</head>

<body class="color-backgroundcont">
<!--Navbar-->
<div class="container">
    <section>
    <p class="nvbar-direita">Igreja Batista Nova Vida</p>
    </section>
<hr>
<nav class="navbar navbar-expand-lg navbar-light" >
  <a class="navbar-brand fonte-black" href="#"> <img src="{{ asset('img/arvore.png') }}" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link fonte-black" href="{{ route('welcome') }}">INÍCIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fonte-black" href="{{ route('devocional') }}">DEVOCIONAL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fonte-black" href="{{ route('comochegaraoceu') }}">COMO CHEGAR AO CÉU <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fonte-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CONTEÚDO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('mensagensbiblicas') }}">Mensagens Bíblicas</a>
          <a class="dropdown-item" href="{{ route('devocional') }}">Devocional</a>          
          <a class="dropdown-item" href="{{ route('fotos') }}">Fotos</a>
          <a class="dropdown-item" href="{{ route('papeisdeparede') }}">Papéis De Parede</a>
          <a class="dropdown-item" href="{{ route('assistapregacoes') }}">Assista Pregações</a>
          <a class="dropdown-item" href="{{ route('comochegaraoceu') }}">Como Chegar ao Céu</a>
          <a class="dropdown-item" href="{{ route('bibliaparaouvir') }}">Bíblia para Ouvir</a>          
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fonte-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MINISTÉRIOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fonte-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CONTRIBUA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('doe') }}">Doe</a>
          <a class="dropdown-item" href="#">Promessa de Fé</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Faça Uma Oferta</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <p><img src="{{ asset('img/lupa-menor.png') }}" /></p>
    </form>
  </div>
</nav>
</div>

@yield('content')
<div class="container">
    <div class="col-xs-12 col-sm-4">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de e-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém..</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembrar me</label>
            </div>
            <button type="submit" class="btn btn-outline-success">Login</button>
        </form>
    </div>
</div>

<!--Footer Informações-->
<div class="footer2">
  <section>
  <img id="imgfooter" src="{{ asset('img/logo.png') }}" />

  </section>
</div>
<!--Footer-->
<div class="footer">
  <section style="padding: 10px;">© 2019 - Igreja Batista Nova Vida Com Muito Amor <img src="{{ asset('img/like.png') }}" /> . Todos os direitos reservados.</section>
</div>


<!--Meu Javascript-->


<!--JAVASCRIPTS CDN BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>