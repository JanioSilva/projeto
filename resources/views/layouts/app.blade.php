<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>G-Group!</title>

        <!--Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/css/style.css') }}">
    </head>
    <body>
        
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">G-Group</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        @if(@Auth::check())
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pesquisadores') }}">Pesquisadores</a>
          </li>
        @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/grupos') }}">Grupos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/noticias') }}">Notícias</a>
          </li>
          
        </ul>
        
        <ul class="navbar-nav mr-auto navbar-toggler-right">
        
            @if(Auth::guest())
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/register') }}">Registro</a>
                </li>
         
            @else
        
                  <li class="dropdown nav-item">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                      
                    <ul class="dropdown-menu" role="menu">
                       <li>
                         <a class="dropdown-item" style=" color: rgba(0, 0, 0, 0.5);" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                     Logout
                             </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                       </form>
                      </li>
                  </li>
                
                </ul>
            @endif   
         </ul>
        
        <!-- busca
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         -->
      </div>
    </nav>
 

 @yield('content')
<div class="container">
     <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Voltar ao início</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>


</div>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('/css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js') }}" ></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    </body>
</html>