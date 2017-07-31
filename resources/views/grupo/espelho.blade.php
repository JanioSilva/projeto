@extends('layouts.app')

@section('content')

    

    <div class="container marketing mt-5">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2 >{{$grupo->sigla}}</h2>
          
          <p>{{$grupo->descricao}}</p>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">

            <div>
            <nav class="nav flex-column">
              <a class="nav-link active" data-toggle="collapse" href="#collapseGrupos" aria-expanded="false" aria-controls="collapseGrupos">Projetos do {{$grupo->sigla}}</a>
               <div class="collapse" id="collapseGrupos">
                  <div>
                    <ul class="list-group">
                      <li class="list-group-item">Projeto 1</li>
                      <li class="list-group-item">Projeto 2</li>
                      <li class="list-group-item">Projeto 3</li>
                    </ul>
                  </div>
               </div>
              <a class="nav-link active" data-toggle="collapse" href="#collapseProjetos" aria-expanded="false" aria-controls="collapseProjetos">Pesquisadores do Grupo</a>
               <div class="collapse" id="collapseProjetos">
                  <div>
                    <ul class="list-group">
                      <li class="list-group-item">Pesquisador 1</li>
                      <li class="list-group-item">Pesquisador 2</li>
                      <li class="list-group-item">Pesquisador 3</li>
                    </ul>
                  </div>
               </div>
            </nav>
          </div>


          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
          <h2>{{$grupo->nome}}</h2>
          <hr class="item-divider">
          <strong>Área de Pesquisa:</strong> 
          <p>{{$grupo->area}}</p>
          <strong>Ano de Formação:</strong> 
          <p>{{$grupo->data_formacao}}</p>
          <strong>Lideres do Grupo:</strong> <p>Jânio Alves da Silva</p>
          <strong>Área Predominante:</strong> <p>Engenharia de Produção</p>
        </div>
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <div class="container">

<hr class="featurette-divider">
      <!-- Inicio Contato -->
      <div class="row">

        <div class="col-lg-6 text-center">
          <h1 class="mt-5">Entre em contato!</h1>
          <h3>É importante questionar o quanto o consenso sobre a necessidade de qualificação.</h3>
        </div>
        
            <div class="col-lg-6">
              <form class="" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="">
                                <input placeholder="Nome" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="">
                                <input placeholder="E-mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <div>
                              <textarea class="form-control" name="" id="" cols="1" rows="3"></textarea>
                          
                          </div>
                        
                        </div>

                        
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
          
      </div> <!--  /Fim do Contato  -->

      
</div>
      


     
@endsection