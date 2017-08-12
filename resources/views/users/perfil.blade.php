@extends('layouts.app')

@section('content')

  

    <div class="container marketing mt-5">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle chip" src="/img/{{$user->avatar}}" alt="User Image" width="140" height="140">
          <h2 >{{$user->name}}</h2>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
          
        </div>
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

     
@endsection