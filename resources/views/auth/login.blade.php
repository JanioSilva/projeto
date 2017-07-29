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
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="">
                                <input placeholder="E-mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu a Senha?
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
          
      </div>
      <!--Fim Contato  -->
    <hr class="featurette-divider">

  </div>

@endsection