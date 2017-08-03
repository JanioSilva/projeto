@extends('layouts.app')

@section('content')

  

    <div class="container marketing mt-5">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="/img/{{Auth::user()->avatar}}" alt="Generic placeholder image" width="140" height="140">
          <h2 >{{Auth::user()->name}}</h2>
          <hr class="item-divider">
          <p>Universidade Federal de Alagoas</p>
          <hr class="item-divider">
          <div>
            <nav class="navbar-nav flex-column">
              <a class="nav-link active" data-toggle="collapse" href="#collapseGrupos" aria-expanded="false" aria-controls="collapseGrupos">Meus Grupos</a>
               <div class="collapse" id="collapseGrupos">
                  <div class="">
                    <ul class="list-group">
                        @foreach(Auth::user()->grupos as $grupo)  
                              <a href="/espelho/{{$grupo->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">{{$grupo->nome}}</h5>
                                  <small class="text-muted">{{$grupo->created_at}}</small>
                                </div>
                                <p class="mb-1">{{$grupo->descricao}}</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                              </a>
                        @endforeach
                      
                      
                    </ul>
                  </div>
               </div>
              <a class="nav-link active" data-toggle="collapse" href="#collapseProjetos" aria-expanded="false" aria-controls="collapseProjetos">Meus Projetos</a>
               <div class="collapse" id="collapseProjetos">
                  <div class="card card-block">
                    <ul>
                      <li>Grupo 1</li>
                      <li>Grupo 2</li>
                      <li>Grupo 3</li>
                    </ul>
                  </div>
               </div>
            </nav>
          </div>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
        <div class="p-2">
          <div class="card card-block">
              <h3><i class="fa fa-tablet" aria-hidden="true"></i>  Aqui ficará a timeline</h3>
              <hr class="item-divider">
          </div>
          
            <div class="list-group">
                <a href="#" class="mb-2 list-group-item list-group-item-action flex-column align-items-start active">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  <small>Donec id elit non mi porta.</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
              </div>

            </div>{{-- fim do p-2   --}}

        </div>
        
      </div><!-- /.row -->


     

     
@endsection