@extends('layouts.app')

@section('content') 
  
  


      <hr class="featurette-divider">
      
<div class="container">
      <!-- Inicio Contato -->
      <div class="row">

        <div class="col-lg-6 text-center">
          <h1>O cuidado em identificar</h1>
          <h3>pontos críticos na estrutura atual da organização garante a contribuição de um grupo </h3>
        </div>
        
            <div class="col-lg-6">
              <form class="">
      
                <input class="form-control form-group" placeholder="Nome" type="text" name="nome" value="">
            
                <input class="form-control form-group" placeholder="E-mail" type="text" name="email" value="">
                
                <select name="instituicao" id="" class="form-control form-group" placeholder="Instituição" >
                  <option value="">Universidade Federal de Alagoas</option>
                
                </select>

                <input class="form-control form-group" placeholder="Senha" type="password" name="senha" value="">
                <button class="form-control btn btn-primary " type="submit">Enviar</button>
                
              </form>
            </div>
          
      </div>
</div>
      <!--Fim Contato  -->
      <hr class="featurette-divider">

@endsection
