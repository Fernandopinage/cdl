<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/anucie_empresa.css" rel="stylesheet">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="icon" href="/img/title.png">
    <title>Empregabilidade | CDL Manaus</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #004691">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/empresa"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/vagas/disponivel/{{session('empresa_id')}}" style="color:#fff;">Vagas Disponíveis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/anuncio/empresa" style="color:#fff;">Anúncio de Vaga </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/filtra/candidato/empresa" style="color:#fff;">Buscar Candidatos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="color:#fff;">
              Opções
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/edita/empresa/{{session('empresa_id')}}">Editar Empresa</a></li>
              <li><a class="dropdown-item" href="/alterar/senha/empresa">Redefinir Senha</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/sair/empresa/{{session('empresa_id')}}">Sair</a></li>
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
    </div>

  </nav>
 
    <div class="container">

        @yield('anuncio')
        
    </div>
    <div id="footer-cadastro">

    </div>
</body>
<footer style="margin-top: 150px;" >
  <nav class="navbar bottom navbar-expand-sm navbar bg" style="background-color: #d0d0d056; margin-bottom:0px">
  
    <div class="container" id="container" style="color:#black; font-size:14px;">
        <div class="row">
            <div class="col-md-4 p-4">
                <h6>> CDL MANAUS - DJALMA BATISTA</h6>
                <span style="color: black">Cond. Amazonas Flat Service, 3000<br>
                    Loja A, Torre Sul<br>
                    Av. Djalma Batista | Chapada | 69.050-010<br>
                    Segunda a Quinta-feira das 08h às 18h<br>
                    Sexta-feira das 08h às 17h</span>
            </div>
            <div class="col-md-3 p-4">
                <h6>> CDL MANAUS - CENTRO</h6>
                <span style="color: black">Rua Rui Barbosa, 156<br>
                    Centro  |  69.010-220<br>
                    Segunda a Quinta-feira das 08h às 18h<br>
                    Sexta-feira das 08h às 17h</span>
            </div>
            <div class="col-md-3 p-4">
                <h6>>
                    UTV - RAIZ</h6>
                <span style="color: black">Rua Delfim de Souza, 125<br>
                    Raiz  |  69.068-020<br>
                    Segunda a Quinta-feira das 08h às 18h<br>
                    Sexta-feira das 08h às 17h</span>
            </div>
            <div class="col-md-2 p-4">
                <h6>> ATENDIMENTO</h6>
                <span style="color: black">Dúvidas<br>
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->

<script>

 $('#experiencia').change(function(){

    var valor =  document.getElementById('experiencia').value;
    if(valor === 'Sem Experiência'){

      $('#tempoexperiencia_div').hide();
      
    }else{

      $('#tempoexperiencia_div').show();
      
    }

 });


</script>

<script>


  $(document).ready(function(){
    $('#selecionarFoto').hide();
         
    $('#curso_div').hide();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();
    $('#institucao_div').hide();
  });



  $('#formacao').change(function(){

    
    if(document.getElementById('formacao').value === 'Ensino_Fundamental_Completo' || document.getElementById('formacao').value === 'Ensino_Fundamental_Incompleto'){
     
      $('#curso_div').hide();
      $('#termino_div').hide();
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
    }
  
    if(document.getElementById('formacao').value === 'Ensino_Médio_Completo'){
      
      $('#curso_div').hide();
      $('#termino_div').hide();
      $label = document.getElementById('termino_div_label');
      $label.innerHTML = "Ano de conclusão"
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
    }
  
    if(document.getElementById('formacao').value  === 'Ensino_Médio_Cursando'){
      $('#curso_div').hide();
      $('#termino_div').show();
      $label = document.getElementById('termino_div_label');
      $label.innerHTML = "Ano em curso"

      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').hide();
    }
  
    if(document.getElementById('formacao').value  === 'Ensino_Técnico_Completo'){
  
      $('#curso_div').show();
      $('#termino_div').hide();
      $label = document.getElementById('termino_div_label');
      $label.innerHTML = "Ano de conclusão"
      $('#semestre_div').hide();
      $('#periodo_div').hide();
      $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Ensino_Técnico_Cursando'){
  
  
      $('#curso_div').show();
      $('#termino_div').show();
      $('#semestre_div').show();
      $('#periodo_div').hide();
      $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Superior_Completo'){
  
        $('#periodo_div').hide();
        $('#curso_div').show();
        $('#termino_div').hide();
        $label = document.getElementById('termino_div_label');
        $label.innerHTML = "Ano de conclusão"
        $('#semestre_div').hide();
        $('#institucao_div').show();
        
  
    }
  
  
    if(document.getElementById('formacao').value  === 'Superior_Cursando'){
  
    $('#curso_div').show();
    $('#termino_div').show();
    $('#semestre_div').hide();
    $('#periodo_div').show();
    $('#institucao_div').show();
   
  
    }
  
    if(document.getElementById('formacao').value  === 'Pós-Graduação_Completo'){
  
    $('#curso_div').show();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();
    $label = document.getElementById('termino_div_label');
    $label.innerHTML = "Ano de conclusão"
    $('#institucao_div').show();
  
    }
  
    if(document.getElementById('formacao').value  === 'Pós-Graduação_Cursando'){
  
      $('#curso_div').show();
      $('#termino_div').show();
      $('#semestre_div').hide();
      $('#periodo_div').show();
      $('#institucao_div').show();
  
    }
  
  });
</script>



<script>

function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}

</script>

<script>
    $(document).ready(function() {

      $('#outro_idioma_div').hide();
      $('#nivel_idioma_div').hide();
      $('#descPCD').hide();
      $('#idioma_div').hide();
      
        $('#idioma_necessario').change(function(){

        if($("#idioma_necessario:checked").val() == undefined){
            $("#idioma_necessario").prop('checked', false);
            $('#idioma_div').hide(); 
            $('#nivel_idioma_div').hide();
           // $('#outro_idioma_div').hide();
            
        }else{
          $("#idioma_necessario").prop('checked', true);
          $('#idioma_div').show();  
          $('#nivel_idioma_div').show(); 
         // $('#outro_idioma_div').show();
          
        }


      });

      $('#idioma').change(function(){

        if(document.getElementById('idioma').value === 'outros'){
          $('#outro_idioma_div').show();
        }else{
          $('#outro_idioma_div').hide();
        }

      });

    });
      

</script>

   <!-- jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- ***** -->



<!-- Mesagem de validação de campos  -->


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/js/checkbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->
</html>