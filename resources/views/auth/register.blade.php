@extends('layouts.app')

@section('content') 
  
      
      
<div class="container">

<hr class="featurette-divider">
      <!-- Inicio Contato -->
      <div class="row">

        <div class="col-lg-6 text-center">
          <h1>O cuidado em identificar</h1>
          <h3>pontos críticos na estrutura atual da organização garante a contribuição de um grupo </h3>
        </div>
        
            <div class="col-lg-6">
              <form class="" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="">
                                <input placeholder="Nome" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="">
                                <input placeholder="E-mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="">
                                <input placeholder="Senha" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="">
                                <input placeholder="Confirme a Senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
          
      </div>

      <hr class="featurette-divider">
</div>
      <!--Fim Contato  -->
      

@endsection

