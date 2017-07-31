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
            <nav class="nav flex-column">
              <a class="nav-link active" data-toggle="collapse" href="#collapseGrupos" aria-expanded="false" aria-controls="collapseGrupos">Meus Grupos</a>
               <div class="collapse" id="collapseGrupos">
                  <div class="card card-block">
                    <ul>
                      <li>Grupo 1</li>
                      <li>Grupo 2</li>
                      <li>Grupo 3</li>
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
          
        </div>
        
      </div><!-- /.row -->


     

     
@endsection