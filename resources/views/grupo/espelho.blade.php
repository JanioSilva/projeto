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

      <hr class="featurette-divider">

     
@endsection