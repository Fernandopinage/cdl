<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/busca_exmilitar.css" rel="stylesheet">
    <link rel="icon" href="/img/title.png">
    <title>Empregabilidade | CDL Manaus</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/militar"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/busca/militar">Buscar por Ex-Militares</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Opções
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/edita/oms/{{session('oms_id')}}">Editar Organização Militar</a></li>
              <li><a class="dropdown-item" href="/alterar/senha/oms">Redefinir Senha</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/login/militar">Sair</a></li>
            </ul>
          </li>
        </ul>

      </div>
  </nav>
    <div id="menu">

    </div>
    
    <div class="container">
        
        @yield('buscarExmilitar')

    </div>
    <footer>
      <nav class="navbar fixed-bottom navbar-expand-sm navbar bg" style="background-color: #2D2C31">
          <div class="container">
              <div class="col-6 input-group-sm">
                  <p class="text-start" style="color:#fff">Progride® é uma marca registrada © <?php echo date('Y')?>
                  </p>
              </div>
              <div class="col-6 input-group-sm">
                  <p class="text-end" style="color:#fff">Desenvolvido por <img src="/icons/progride.png" width="18">
                      Progride </p>
              </div>

          </div>
      </nav>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>