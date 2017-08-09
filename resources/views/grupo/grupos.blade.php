@extends('layouts.app')

@section('content')

    <div class="container marketing mt-5">
    
      <!-- Three columns of text below the carousel -->
      <div class="row">
    @foreach($grupos as $grupo)
        <div class="col-lg-4">
          <img class="rounded-circle chip" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>{{$grupo->sigla}}</h2>
          <h4>{{$grupo->nome}}</h4>
          <p>{{$grupo->descricao}}</p>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          <p><a class="btn btn-secondary" href="/espelho/{{$grupo->id}}" role="button">Ver Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    @endforeach

      </div><!-- /.row -->
      <div class="row">
        {{ $grupos->links() }}
         
      </div>

@endsection
