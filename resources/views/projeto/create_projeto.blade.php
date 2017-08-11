@extends('layouts.app')

@section('content')

    

    <div class="container marketing mt-5">
      <h3>Criando um novo Projeto para o grupo "{{$grupo->nome}}"</h3>
      <!-- Three columns of text below the carousel -->
      <form action="{{ url('/projeto/create') }}" method="post" >
        {{ csrf_field() }}
            
            <div class="row">
              <div class="col-lg-12">
                  @if(session('success'))
                     <p class="alert-success"> {{session('success')}} </p>
                  @endif

                  <input name ="grupo_id" type="hidden" value="{{$grupo->id}}">

                  <input name="nome" class="form-control" type="text" placeholder="Nome do Projeto">
              
                  <textarea name="descricao" id="" cols="1" rows="3" class="form-control mt-4" placeholder="Descrição do Projeto"></textarea>
            
                  <input name="area" type="text" class="form-control" placeholder="Area de Pesquisa">
                
                  <input name="data_formacao" type="text "class="form-control" placeholder="Data de Formação">

                <div class="mt-5">
                  <input class="btn btn-primary" type="submit" value="Salvar">
                </div>

            </div>
            
        </form>
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">


     
@endsection