<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/filtra_candidato_empresa.css" rel="stylesheet">
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

        @yield('filtrocandidato')

    </div>
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
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {

      $('#letivo_medio').hide();
      $('#termino_medeio').hide();
      $('#curso_tecnico').hide();
      $('#semetre').hide();
      $('#curso_superior').hide();
      $('#periodo_superior').hide();
      $('#curso_pos').hide();
      $('modulo_pos').hide();
      $('#leitura_ingles').hide();
      $('#escrita_ingles').hide();
      $('#leitura_espanhol').hide();
      $('#escrita_espanhol').hide();
      $('#leitura_frances').hide();
      $('#escrita_frances').hide();
      $('#leitura_outros').hide();
      $('#escrita_outros').hide();

      $('#modulo_pos').hide();

      $('#ingle').change(function(){

        if($("#ingle:checked").val() == undefined){
            $("#ingle").prop('checked', false);
            $('#leitura_ingles').hide(); 
            $('#escrita_ingles').hide(); 
        }else{
          $("#ingle").prop('checked', true);
          $('#leitura_ingles').show();  
          $('#escrita_ingles').show();
        }


      });

      $('#espanhol').change(function(){

        if($("#espanhol:checked").val() == undefined){
            $("#espanhol").prop('checked', false);
            $('#leitura_espanhol').hide(); 
            $('#escrita_espanhol').hide(); 
        }else{
          $("#espanhol").prop('checked', true);
          $('#leitura_espanhol').show();  
          $('#escrita_espanhol').show();
        }


      });

      $('#frances').change(function(){

        if($("#frances:checked").val() == undefined){
            $("#frances").prop('checked', false);
            $('#leitura_frances').hide(); 
            $('#escrita_frances').hide(); 
        }else{
          $("#frances").prop('checked', true);
          $('#leitura_frances').show();  
          $('#escrita_frances').show();
        }


      });


      $('#formacao').change(function(){

        if(document.getElementById('formacao').value == 'Ensino_Fundamental_Completo'){

            $('#letivo_medio').hide();
            $('#termino_medeio').hide();
            $('#curso_tecnico').hide();
            $('#semetre').hide();
            $('#curso_superior').hide();
            $('#periodo_superior').hide();
            $('#curso_pos').hide();
            $('#modulo_pos').hide();
            $('#leitura').hide();
            $('#escrita').hide();
            $('#modulo_pos').hide();



        }else if(document.getElementById('formacao').value == 'Ensino_Fundamental_Incompleto' ){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Ensino_Médio_Completo' ){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Ensino_Médio_Cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').show();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();
              $label = document.getElementById('termino_div_label');
              $label.innerHTML = "Ano de conclusão"


        }else if(document.getElementById('formacao').value == 'Ensino_Técnico_Cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').show();
              $('#semetre').show();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Ensino_Técnico_Completo'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').show();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Superior_Cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').show();
              $('#periodo_superior').show();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Superior_Completo'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').show();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Pós-Graduação_Cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').show();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'Pós-Graduação_Completo'){
              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').show();
              $('#modulo_pos').hide();

        }else{
            $('#letivo_medio').hide();
            $('#termino_medeio').hide();
            $('#curso_tecnico').hide();
            $('#semetre').hide();
            $('#curso_superior').hide();
            $('#periodo_superior').hide();
            $('#curso_pos').hide();
            $('#modulo_pos').hide();

        }

      });
    });

</script>
@if(session('vazio'))
<script>
Swal.fire({
  position: 'center',
  icon: 'warning',
  text: 'Informe pelo menos um campo',
  showConfirmButton: false,
  timer: 5500
})
</script>
@endif


   <!-- jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- ***** -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->
</html>