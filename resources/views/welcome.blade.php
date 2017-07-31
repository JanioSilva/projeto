@extends('layouts.app')

@section('content')


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>É importante questionar.</h1>
              <p>o quanto a revolução dos costumes assume importantes posições no estabelecimento dos modos de operação convencionais.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver Notícia</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Acima de tudo, é fundamental ressaltar que:</h1>
              <p>o aumento do diálogo entre os diferentes setores produtivos assume importantes posições no estabelecimento do processo de comunicação como um todo.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver Notícia</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>Nunca é demais lembrar.</h1>
              <p>o peso e o significado destes problemas, uma vez que a crescente influência da mídia obstaculiza a apreciação da importância das direções preferenciais no sentido do progresso.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver Notícia</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>GRUPO</h2>
          <h4>Grupo de Pesquisa</h4>
          <p>Pensando mais a longo prazo, a mobilidade dos capitais internacionais representa uma abertura para a melhoria dos conhecimentos estratégicos para atingir a excelência.</p>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          <p><a class="btn btn-secondary" href="{{ url('/espelho') }}" role="button">Ver Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>GRUPO</h2>
          <h4>Grupo de Pesquisa</h4>
          <p>Pensando mais a longo prazo, a mobilidade dos capitais internacionais representa uma abertura para a melhoria dos conhecimentos estratégicos para atingir a excelência.</p>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          <p><a class="btn btn-secondary" href="{{ url('/espelho') }}" role="button">Ver Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>GRUPO</h2>
          <h4>Grupo de Pesquisa</h4>
          <p>Pensando mais a longo prazo, a mobilidade dos capitais internacionais representa uma abertura para a melhoria dos conhecimentos estratégicos para atingir a excelência.</p>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          <p><a class="btn btn-secondary" href="{{ url('/espelho') }}" role="button">Ver Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <!--Link Ver Mais Grupos  -->
        <div class="container">
          <p class="float-right"><a href="/grupos">Ver Mais Grupos</a></p>
        </div>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('/img/default.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('/img/default.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('/img/default.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->

@endsection
