@extends('layouts.app')

@section('content')

    <div class="container marketing mt-5">
     
      <div class="row">
      <!-- Three columns of text below the carousel -->
        @foreach($users as $user)
        
          <div class="col-lg-4">
            <img class="rounded-circle" src="/img/{{$user->avatar}}" alt="Generic placeholder image" width="140" height="140">
            <h2>{{$user->name}}</h2>
            <hr class="item-divider">
            <p>Universidade Federal de Alagoas</p>
            <hr class="item-divider">
            <p><a class="btn btn-secondary" href="/espelho-grupo" role="button">Ver Detalhes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        @endforeach
      
      </div><!-- /.row -->

@endsection
