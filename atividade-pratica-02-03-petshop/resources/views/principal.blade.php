<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>@yield('titulo', 'Home - AnalysesLab')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <p>AnalysesLab</p>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal">
        <span class="navbar-toggler-icon"> </span>
      </button>
      <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link active">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-4" href="#" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Clientes
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/testes"> Solicitar Exame</a>
                  <a class="dropdown-item" href="#"> Ver Exames</a>
                  <a class="dropdown-item" href="#"> Ver Cadastro</a>

              </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Área Administrativa</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/procedures"> Gerir Procedimentos</a>
              </div>
              </li>
            </ul>
      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item">
          <a href="/home" class="nav-link active">Login</a>
        </li>
      </ul>
    </div>
    </nav>
    <!-- Conteúdo - parte central //-->
    @yield('conteudo')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
