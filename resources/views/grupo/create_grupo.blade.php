@extends('layouts.app')

@section('content')

    

    <div class="container marketing mt-5">
    
      <!-- Three columns of text below the carousel -->
      <form action="{{ url('/grupos/create') }}" method="post" >
        {{ csrf_field() }}
            
            <div class="row">
              <div class="col-lg-4">
              
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" >
                <div class="mt-3">
              
                  <input name="sigla" type="text" class="form-control" placeholder="SIGLA">
                  <textarea name="descricao" id="" cols="1" rows="3" class="form-control mt-4" placeholder="Descrição do Grupo"></textarea>
                  <hr class="item-divider">
                  <p>Universidade Federal de Alagoas</p>
                  <hr class="item-divider">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-8">
                  @if(session('success'))
                     <p class="alert-success"> {{session('success')}} </p>
                  @endif

              
              <input name="nome" class="form-control" type="text" placeholder="Nome do Grupo">
              
              <hr class="item-divider">
              
                <div class="form-group">
                  <strong>Área de Pesquisa:</strong>
                  <input name="area" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <strong>Instituição:</strong>
                  <input name="instituicao" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <strong>Unidade:</strong>
                  <input name="unidade" type="text" class="form-control">
                </div>
                <div class="form-group">
                 <strong>Ano de Formação:</strong>
                  <input name="data_formacao" type="text "class="form-control" placeholder="1970">
                </div>
                <div class="mt-5">
                  <input class="btn btn-primary" type="submit" value="Salvar">
                </div>

            </div>
            
        </form>
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

     
@endsection