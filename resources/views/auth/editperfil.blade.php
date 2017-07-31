@extends('layouts.app')

@section('content')

  

    <div class="container marketing mt-5">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="/img/{{Auth::user()->avatar}}" alt="User Image" width="140" height="140">
          <form enctype="multipart/form-data" action="/perfil" method="post">
            <div class="form-group">
            <span class="btn btn-default btn-file">
            
              <input class="" type="file" name="avatar">
            </span>  
              <input type="submit" class="pull-right btn btn-sm btn-primary">
            </div>
            {{ csrf_field() }}
          </form>
          <h2 >{{Auth::user()->name}}</h2>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
          
        </div>
        
      </div><!-- /.row -->


@endsection