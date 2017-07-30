@extends('layouts.app')

@section('content')

    

    <div class="container marketing mt-5">

      <!-- Three columns of text below the carousel -->
      <form action="">
            
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
              
              
              <input name="nome" class="form-control" type="text" placeholder="Nome do Grupo">
              
              <hr class="item-divider">
              <strong>Área de Pesquisa:</strong>
              <input name="area" type="text" class="form-control">
              <strong>Ano de Formação:</strong>
              <input type="number" min="1970" step="1" class="form-control" placeholder="1970">
              <strong>Área Predominante:</strong>
              <input name="area" type="text" class="form-control">
            
              <div class="mt-5">
                <input class="btn btn-primary" type="submit" value="Salvar">
              </div>
            </div>
            
        </form>
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

     
@endsection