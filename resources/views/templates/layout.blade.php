<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
          crossorigin="anonymous">
</head>
<body>

    <!-- Cabeçalho escolhido no site do Bootstrap-->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.root')}}" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="{{ route('usuarios.authors')}}" class="nav-link px-2 link-dark">Autores mais lidos</a></li>
        <li><a href="{{ route('usuarios.temporary')}}" class="nav-link px-2 link-dark">Textos mais lidos</a></li>
        <li><a href="{{ route('usuarios.temporary')}}" class="nav-link px-2 link-dark">Sobre</a></li>

        <!-- Área reservada para login -->
        @if (session('usuario'))
          <li>
            <a href="{{ route('usuarios.temporary')}}" class="nav-link px-2 link-dark">Perfil</button>
            </a>
          </li>

          <li>
            <a href="{{ route('textos.writing')}}">
              <button type="button" class="btn btn-outline-primary me-2">Novo texto</button>
            </a>
          </li>
        @endif

      </ul>

      <!-- Botões do template - Não utilizados
      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
      -->

      <div>
        @if (session('usuario'))
        Usuário autenticado: <br>
        {{session('usuario.nome')}} | {{session('usuario.papel')}}
        <br>
        <a href="{{ route('usuarios.logout')}}">
          <button type="button" class="btn btn-outline-primary me-2">Logout</button>
        </a>
        @else
        <a href="{{ route('usuarios.index')}}"> 
          <button type="button" class="btn btn-outline-primary me-2">Login</button>
        </a>
        <a href="{{ route('usuarios.register')}}"> 
          <button type="button" class="btn btn-primary">Register</button>
        </a>

        @endif
      </div>
    </header>
    <!-- Fim do cabeçalho escolhido no site do Bootstrap-->
    
    
    <main class="container pt-2">
        @yield('content')
    </main>

</body>
</html>