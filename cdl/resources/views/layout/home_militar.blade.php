<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="/css/home_militar.css" rel="stylesheet">
  <link rel="icon" href="/img/title.png">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title>Empregabilidade | CDL Manaus</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0E5836">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/militar"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/busca/militar" style="color:#fff;">Buscar por Ex-Militares</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="color:#fff;">
              Opções
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <li><a class="dropdown-item" href="/edita/oms/{{session('oms_id')}}">Editar Organização Militar</a></li>
              @php
                $id = session('oms_id');
              @endphp
              <li><a class="dropdown-item" href="/alterar/senha/oms">Redefinir Senha</a></li>
              <li><a class="dropdown-item" onclick="excluir()" >Excluir Conta</a></li>
          
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/sair/oms/{{session('oms_id')}}">Sair</a></li>
            </ul>
          </li>
        </ul>

      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" target="_blank" aria-current="page" href="https://www.linkedin.com/company/cdlm/"><img src="/icons/1.png" width="25px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" target="_blank" aria-current="page" href="https://pt-br.facebook.com/cdlmanausoficial/"><img src="/icons/2.png" width="25px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.instagram.com/cdlmanaus/?hl=en"><img src="/icons/4.png" width="25px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.youtube.com/channel/UCyjD5GbQuRrztgyRxlVAZdQ"><img src="/icons/3.png" width="25px"></a>
          </li>

    </ul>
  </nav>
  <!--
    <div id="menu">

    </div>
  -->
  <div class="container-fluid">

    @yield('home')

  </div>
  <footer style="margin-top: 150px;" >
    <nav class="navbar bottom navbar-expand-sm navbar bg" style="background-color: #0e5836; margin-bottom:0px">
    
      <div class="container" id="container" style="color:#fff; font-size:14px;">
          <div class="row">
              <div class="col-md-3 p-4">
                  <h6 style="color: #fff">> CDL MANAUS - DJALMA BATISTA</h6>
                  <span style="color: #fff">Cond. Amazonas Flat Service, 3000<br>
                      Loja A, Torre Sul |
                      Av. Djalma Batista | Chapada | 69.050-010<br>
                      Segunda a Quinta-feira das 08h às 18h<br>
                      Sexta-feira das 08h às 17h</span>
              </div>
              <div class="col-md-3 p-4">
                  <h6 style="color: #fff">> CDL MANAUS - CENTRO</h6>
                  <span style="color: #fff">Rua Rui Barbosa, 156<br>
                      Centro  |  69.010-220<br>
                      Segunda a Quinta-feira das 08h às 18h<br>
                      Sexta-feira das 08h às 17h</span>
              </div>
              <div class="col-md-3 p-4">
                  <h6 style="color: #fff">>
                      UTV - RAIZ</h6>
                  <span style="color: #fff">Rua Delfim de Souza, 125<br>
                      Raiz  |  69.068-020<br>
                      Segunda a Quinta-feira das 08h às 18h<br>
                      Sexta-feira das 08h às 17h</span>
              </div>
              <div class="col-md-2 p-4">
                  <h6 style="color: #fff">> ATENDIMENTO</h6>
                  <span style="color: #fff">Dúvidas<br>
                      + 55 92 3627-2867<br>
                      + 55 92 3627-2868<br>
                      suporte@cdlmanaus.org.br</span>
              </div>
          </div>
    

        </div>
      </div>
    </nav>
    <!--
    <nav class="navbar bottom navbar-expand-sm navbar bg" style="background-color: #284D92">
       <div class="container" style="margin-top: 8px">
            <div class="col-6 input-group-sm">
                <p class="text-start" style="color:#fff">Progride® é uma marca registrada ©
                    <?php echo date('Y')?>
                </p>
            </div>
            <div class="col-6 input-group-sm">
                <p class="text-end" style="color:#fff">Desenvolvido por <img src="/icons/progride.png" width="25">
                    Progride </p>
            </div>

        </div>
    </nav>
  -->
</footer>

  @if(session('mensagem'))
  <script>
    Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'Email ou senha invalidas',
    showConfirmButton: false,
    timer: 1500
  })
  </script>
  @endif


  <!-- se cadastra ok -->
  @if(session('empresa_cadastro'))
  <script>
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Organização Militar cadastrada com sucesso ',
    //text: 'Organização Militar cadastrada com sucesso',
    showConfirmButton: false,
    timer: 2500
  })
  </script>
  @endif

  <!-- Mensagem de Alteração com sucesso -->
  @if(session('alterar'))
  <script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Alteração',
  text:'Realizada com sucesso!"',
  showConfirmButton: false,
  timer: 3500
})
</script>
@endif

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


<script>
function excluir(){

   

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Tem certeza?',
  text: "Que deseja excluir sua conta ?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Deletar!',
  cancelButtonText: 'Cancelar!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

    location.href="/delete/conta/oms/<?php echo $id; ?>";
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {

  }
})

  }


</script>

<script>
  function star1(id){

    
    
    if(document.getElementById('str_01'+id).checked == true){
      document.getElementById('str_01'+id).checked = false
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star.png" width="50">';
      
    }else{
      document.getElementById('str_01'+id).checked = true
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star_on.png" width="50">';

      document.getElementById('str02'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str05'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str_02'+id).checked = false;
      document.getElementById('str_03'+id).checked = false;
      document.getElementById('str_04'+id).checked = false;
      document.getElementById('str_05'+id).checked = false;


    }
  }

  function star2(id){
    
    if(document.getElementById('str_02'+id).checked == true){
      document.getElementById('str_02'+id).checked = false
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star.png" width="50">';
    }else{
      document.getElementById('str_02'+id).checked = true
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str05'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str_01'+id).checked = false;
      document.getElementById('str_03'+id).checked = false;
      document.getElementById('str_04'+id).checked = false;
      document.getElementById('str_05'+id).checked = false;
    }
  }

  function star3(id){
    
    if(document.getElementById('str_03'+id).checked == true){
      document.getElementById('str_03'+id).checked = false
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star.png" width="50">';
    }else{
      document.getElementById('str_03'+id).checked = true
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str05'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str_01'+id).checked = false;
      document.getElementById('str_02'+id).checked = false;
      document.getElementById('str_04'+id).checked = false;
      document.getElementById('str_05'+id).checked = false;
    }
  }


  function star4(id){
    
    if(document.getElementById('str_04'+id).checked == true){
      document.getElementById('str_04'+id).checked = false
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star.png" width="50">';
    }else{
      document.getElementById('str_04'+id).checked = true
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str05'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str_01'+id).checked = false;
      document.getElementById('str_02'+id).checked = false;
      document.getElementById('str_03'+id).checked = false;
      document.getElementById('str_05'+id).checked = false;
    }
  }

  function star5(id){
    
    if(document.getElementById('str_05'+id).checked == true){
      document.getElementById('str_05'+id).checked = false
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star.png" width="50">';
      document.getElementById('str05'+id).innerHTML = '<img src="/img/star.png" width="50">';
    }else{
      document.getElementById('str_05'+id).checked = true
      document.getElementById('str01'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str02'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str03'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str04'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str05'+id).innerHTML = '<img src="/img/star_on.png" width="50">';
      document.getElementById('str_01'+id).checked = false;
      document.getElementById('str_02'+id).checked = false;
      document.getElementById('str_03'+id).checked = false;
      document.getElementById('str_04'+id).checked = false;
    }
  }


</script>

</html>