
@extends('layouts.usuario')

@section('content')

<!--**** Carrossel Boostrap ****-->
  <div class="">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

      </ol>
      <div class="carousel-inner imgcarosel">
        <div class="carousel-item active">
          <img src="{{ asset('img/IMG-20190916-WA0020.jpg') }}" width="320" height="505" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/IMG-20190916-WA0027.jpg') }}" width="320" height="505" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/IMG-20190916-WA0028.jpg') }}" width="320" height="505" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/IMG-20190916-WA0029.jpg') }}" width="320" height="505" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/IMG-20190916-WA0019.jpg') }}" width="320" height="505" class="d-block w-100" alt="...">
        </div>        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</br>

<section>
  <fieldset>
    <legend><em>IBNV - A Nossa Historia</em></legend>
      <div class="container text-justify">  
        Ninguém nasce grande. Apenas recebemos a preciosa semente, para crescermos com a ajuda do Espírito Santo de Deus como foi no início da Igreja. Havia muitos anos,  antes  de  se  concretizar  como  “igreja”,  que  a  IBNV  começou  no  coração  de uma  humilde  senhora.  Sentindo  um  grande  desejo  de  alcançar  as  crianças  de Jardim  Ingá  por  Cristo,  Deus  colocou  no  coração  da  “irmã”  Alzira  a  idea  de começar  uma  Classe  de  Boas  Novas  na  sua  casa.  Logo,  então  ela  decidiu começar aulas de futebol, também, como meio de atrair as crianças para sua casa. Sentindo  a  necessidade  de  um  professor  de  futebol,  ela  buscou  auxilio  da  sua igreja, Templo Batista de Indianópolis, e de outros amigos pastores, entre eles José Cerqueira, que cuidava da aula de esporte. As aulas sempre começavam com café da manhã e estudo bíblico, que deu início a lema “A bola no pé e Bíblia na mão”. Com a passagem do tempo outros obreiros e pastores ajuntaram as forças com o mesmo  propósito  de  alcançar  as  pessoas  com  o  evangelho.  Portanto  decidiram começar um estudo bíblico aos Domingos a tarde e no meio da semana. Daí entrou três obreiros de destaque, Haroldo (na época solteiro) para ensinar a Bíblia e Deo (na época seminarista) junto com a sua esposa, Josélia. Esses dividiram as tarefas, liderando os estudos bíblicos e ministério de futebol. Depois de algum tempo ficou evidente que a obra poderia continuar melhor se tivesse um missionário no tempo integral.  Foi  nessa  época  que  Alzira  fez  contato  com  os  missionários,  Sean  e Stephanie  Lunday,  que  recentemente  tinham  mudado  do  interior  paulista  para  o capital.  Então,  a  equipe  ficou  completa,  e  foi  concretizado  um  propósito  de trabalhar juntos para evangelização do Jardim Ingá, São Paulo e até os confins da terra. Nascemos em 2004 em uma casa no Jardim Ingá com em torno de umas 10 pessoas (seis adultos e quatro crianças).Haviam vários obreiros que tem apoiados os  ministérios  e por  vários  meios  temos  procurados  a  pregar  o  evangelho  no decorrer  dos  anos.  Foram  utilizados  esportes,  alfabetização,  aulas  de  reforço, inglês,   programa   de   radio,   férias   fantásticas,   e   aulas   bíblicas   nas   escolas municipais  que  ficam  perto.  Os  meios  foram  vários,  mas  a  mensagem  sempre  a mesma, “Só Jesus Salva e Transforma a Vida”. Eis o motivo de nomear a igreja Batista Nova Vida. O espaço não permite para nomear todas as pessoas que fez parte da história da IBNV. O primeiro culto da IBNV foi realizado no dia 1 de abril de 2004,  a  organização  foi  em  2005  e  o  registro  no  dia  18  de  março  2007.  A  igreja efetuou  a  compra  do  atual  local  na  Rua  Francisco  Soares  416,  em  2009  com  um prospectivo  de  ampliar  para  comportar  o  crescimento  numérico.  Em  2018  a  IBNV separou uma equipe de 14 membros da igreja implantou uma nova igreja no bairro Guacuri, a Igreja Batista Nova Vida da Vila Guacuri.
      </div>
  </fieldset>
</section><br />

<!--****** Início de cards ******-->
<div class="container">
  <div class="card-group">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ouça ao Vivo</h5>
        <p class="card-text">This is atitle wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="embed-responsive-item">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.1424755577846!2d-46.74934848563854!3d-23.635064270201926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x536be446a7140318!2sIgreja%20Batista%20Nova%20Vida!5e0!3m2!1spt-BR!2sbr!4v1571969069946!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
@endsection
