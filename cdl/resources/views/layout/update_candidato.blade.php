<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="/css/add_candidato.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="/img/title.png">
  <title>Empregabilidade | CDL Manaus</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home/candidato"><img id="logo" src="/img/cdl_logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/vagas/candidato">Buscar Vagas</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Opções
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/editar/candidato/{{session('can_id')}}">Editar Candidato</a></li>
                  <li><a class="dropdown-item" href="/alterar/senha/empresa">Redefinir Senha</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="/">Sair</a></li>
                </ul>
              </li>
            </ul>
    
          </div>
          <ul class="nav justify-content-end">
            <button type="button" class="btn btn position-relative" style="background-color:#F8F9FA; margin-right:10px">
              <img src="/icons/outline_notifications_black_24dp.png"> 
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
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
        </div>
    
      </nav>
      

    <div class="container">

        @yield('editar')

    </div>


    <footer style="margin-top: 150px">
        <nav class="navbar fixed-bottom navbar-expand-sm navbar bg" style="background-color: #284D92">
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
    </footer>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>

<script>
  $(document).ready(function(){

      document.getElementById('div_outro').style.display = 'none'


    })

    $('#idioma').change(function(){

      if(document.getElementById('idioma').value == 'Outros'){

      document.getElementById('div_outro').style.display = 'block'

      }else {
        document.getElementById('div_outro').style.display = 'none'
      
      }

    })


</script>


<script>
  $(document).ready(function(){
    document.getElementById('divMilitar').style.display ='none'
      $('#curso_div').hide();
      $('#termino_div').hide();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
  
  });
 document.getElementById('exmilitar').addEventListener('click',function(){
   
   if(document.getElementById('exmilitar').checked){

      document.getElementById('divMilitar').style.display = 'block'

    
   }else{
     document.getElementById('divMilitar').style.display ='none'
      
   }
 })

</script>

<script>

$(document).ready(function(){

   
if(document.getElementById('formacao').value === 'Ensino_Fundamental_completo' || document.getElementById('formacao').value === 'Ensino_Fundamental_incompleto'){
 
  $('#curso_div').hide();
  $('#termino_div').show();
  $('#semestre_div').hide();
  $('#periodo_div').hide();
  $('#institucao_div').hide();
}

if(document.getElementById('formacao').value === 'Ensino Médio_completo'){
  $('#curso_div').hide();
  $('#termino_div').show();
  $('#semestre_div').hide();
  $('#periodo_div').hide();
  $('#institucao_div').hide();
}

if(document.getElementById('formacao').value  === 'Ensino_Médio_cursando'){
  $('#curso_div').hide();
  $('#termino_div').show();
  $('#semestre_div').hide();
  $('#periodo_div').hide();
  $('#institucao_div').hide();
}

if(document.getElementById('formacao').value  === 'Ensino_Técnico_completo'){

  $('#curso_div').show();
  $('#termino_div').show();
  $('#semestre_div').hide();
  $('#periodo_div').hide();
  $('#institucao_div').show();

}

if(document.getElementById('formacao').value  === 'Ensino_Técnico_cursando'){


  $('#curso_div').show();
  $('#termino_div').show();
  $('#semestre_div').hide();
  $('#periodo_div').hide();
  $('#institucao_div').show();

}

if(document.getElementById('formacao').value  === 'Superior_Completo'){

$('#curso_div').show();
$('#termino_div').show();
$('#semestre_div').hide();
$('#periodo_div').hide();
$('#institucao_div').show();


}


if(document.getElementById('formacao').value  === 'Superior_Cursando'){

$('#curso_div').show();
$('#termino_div').hide();
$('#semestre_div').hide();
$('#periodo_div').show();
$('#institucao_div').show();

}

if(document.getElementById('formacao').value  === 'Pós-Graduação_Completo'){

$('#curso_div').show();
$('#termino_div').show();
$('#semestre_div').hide();
$('#periodo_div').hide();
$('#institucao_div').show();

}

if(document.getElementById('formacao').value  === 'Pós-Graduação_Cursando'){

  $('#curso_div').show();
  $('#termino_div').show();
  $('#semestre_div').hide();
  $('#periodo_div').hide();
  $('#institucao_div').show();

}

});




  $('#formacao').change(function(){

   
    if(document.getElementById('formacao').value === 'Ensino_Fundamental_completo' || document.getElementById('formacao').value === 'Ensino_Fundamental_incompleto'){
     
      $('#curso_div').hide();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
    }
  
    if(document.getElementById('formacao').value === 'Ensino Médio_completo'){
      $('#curso_div').hide();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
    }
  
    if(document.getElementById('formacao').value  === 'Ensino_Médio_cursando'){
      $('#curso_div').hide();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
    }
  
    if(document.getElementById('formacao').value  === 'Ensino_Técnico_completo'){
  
      $('#curso_div').show();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Ensino_Técnico_cursando'){
  
  
      $('#curso_div').show();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Superior_Completo'){
  
    $('#curso_div').show();
    $('#termino_div').show();
    $('#semestre_div').hide();
    $('#periodo_div').hide();
    $('#institucao_div').show();
    
  
    }
  
  
    if(document.getElementById('formacao').value  === 'Superior_Cursando'){
  
    $('#curso_div').show();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').show();
    $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Pós-Graduação_Completo'){
  
    $('#curso_div').show();
    $('#termino_div').show();
    $('#semestre_div').hide();
    $('#periodo_div').hide();
    $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Pós-Graduação_Cursando'){
  
      $('#curso_div').show();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').show();
  
    }
  
  });
  
</script>

<!--<script src="/js/checkbox.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->

</html>