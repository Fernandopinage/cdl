@extends('layout.anucie_empresa')

@section('anuncio')

<form method="POST" action="/anucie/vaga/empresa">

    @csrf

    <div class="form-signin">

        <div class="text">
            <h2 class="form-signin-heading"> ANUNCIE UMA VAGA </h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">


                <input type="hidden" name="empresa_nome" value="{{session('empresa_nome')}}">
                <input type="hidden" name="id_empresa" value="{{session('empresa_id')}}">
               
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de início da divulgação </label>
                    <input type="date" name="datainicio" class="form-control form-control-sm" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de término da
                        publicação</label>
                    <input type="date" name="datafim" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cargo/Função
                        <span><strong>*</strong></span></label>

                    <input type="text" name="cargo" id="cargo" class="form-control form-control-sm" placeholder="" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tipo de Vaga
                        <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="tipo" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="CLT">CLT</option>
                        <option value="PJ">PJ</option>
                        <option value="Temporário">Temporário</option>
                        <option value="Menor Aprendiz">Menor Aprendiz</option>
                        <option value="Estágio">Estágio</option>
                        <option value="Trainee">Trainee</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Salário Oferecido</label>
                    <input type="text" class="form-control form-control-sm" name="salario" placeholder="R$"
                        onKeyPress="return(moeda(this,'.',',',event))">

                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Formação
                        <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="formacao" id="formacao"
                        aria-label="Default select example" required>
                        <option selected></option>
                        <option value="Ensino_Fundamental_Completo">Ensino Fundamental completo</option>
                        <option value="Ensino_Fundamental_Incompleto">Ensino Fundamental incompleto</option>
                        <option value="Ensino_Médio_Completo">Ensino Médio completo</option>
                        <option value="Ensino_Médio_Cursando">Ensino Médio cursando</option>
                        <option value="Ensino_Técnico_Cursando">Ensino Técnico cursando</option>
                        <option value="Ensino_Técnico_Completo">Ensino Técnico completo</option>
                        <option value="Superior_Cursando">Superior Cursando</option>
                        <option value="Superior_Completo">Superior Completo</option>
                        <option value="Pós-Graduação_Cursando">Pós-Graduação Cursando</option>
                        <option value="Pós-Graduação_Completo">Pós-Graduação Completo</option>
                    </select>
                </div>
                <div class="col-md-3" id="curso_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
                </div>

                <div class="col-md-2" id="termino_div">
                    <label class="form-check-label" id="label_Anotermino">Ano de Términio </label>
                    <input type="month" class="form-control form-select-sm" name="termino" placeholder="">
                </div>

                <div class="col-md-2" id="semestre_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                        <option selected></option>
                        <option value="1º Semestre">1º Semestre</option>
                        <option value="2º Semestre">2º Semestre</option>

                    </select>
                </div>
                <div class="col-md-3" id="periodo_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Período em Curso </label>
                    <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
                        <option selected></option>
                        <option value="1º Período">1º Período</option>
                        <option value="2º Período">2º Período</option>
                        <option value="3º Período">3º Período</option>
                        <option value="4º Período">4º Período</option>
                        <option value="5º Período">5º Período</option>
                        <option value="6º Período">6º Período</option>
                        <option value="7º Período">7º Período</option>
                        <option value="8º Período">8º Período</option>
                        <option value="Ou Mais">Ou Mais</option>

                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Experiência
                        <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="experiencia" id="experiencia"
                        aria-label="Default select example" required>
                        <option selected></option>
                        <option value="Sem Experiência">Sem Experiência</option>
                        <option value="Com Experiência">Com Experiência</option>
                        <option value="Primeiro Emprego">Primeiro Emprego</option>
                    </select>
                </div>
                <div class="col-md-2" id="tempoexperiencia_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tempo de Experiência
                        <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="tempoexperiencia" id="tempoexperiencia"
                        aria-label="Default select example" required>
                        <option selected value="0"></option>
                        <option value="Não informado">Não informado</option>
                        <option value="3 meses">3 meses</option>
                        <option value="6 meses">6 meses</option>
                        <option value="1 ano">1 ano</option>
                        <option value="3 anos">3 anos</option>
                        <option value="5 anos">5 anos</option>
                        <option value="10 anos">10 anos</option>
                        <option value="20 anos">20 anos</option>
                        <option value="30+ anos">30+ anos</option>
                    </select>
                </div>

                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF <span>*</span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="" required>
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        required>
                </div>
                <div class="col-md-8">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <!-- ************************************* -->
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma Necessário para a vaga ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="idioma_necessario"
                            id="idioma_necessario">
                        <label class="form-check-label" for="flexCheckDefault">

                        </label>
                    </div>
                </div>
                <div class="col-md-2" id="idioma_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma</label>
                    <select class="form-select form-select-sm" name="idioma" id="idioma"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="ingles">Inglês</option>
                        <option value="espanhol">Espanhol</option>
                        <option value="frances">Francês</option>
                        <option value="italiano">Itália</option>
                        <option value="outros">Outros</option>

                    </select>
                </div>
                <div class="col-md-3" id="outro_idioma_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Descreva qual idioma</label>
                    <input type="text" class="form-control form-control-sm" name="outro_idioma" id="outro_idioma"
                        placeholder="">
                </div>
                <div class="col-md-2" id="nivel_idioma_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel do Idioma</label>
                    <select class="form-select form-select-sm" name="nivel_idioma" id="nivel_idioma"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="Básico">Básico</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>


                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> Vaga remota</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vaga" id="vaga" value="sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vaga" id="vaga" value="não" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Não
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> Exibir nome da Empresa </span></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exibir_empresa" id="exibir_empresa"
                            value="sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exibir_empresa" id="exibir_empresa"
                            value="não" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Não
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd1" value="sim">
                        <label class="form-check-label" for="gridRadios1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd2" value="não" checked>
                        <label class="form-check-label" for="gridRadios2">
                            Não
                        </label>
                    </div>
                </div>
                <div class="mb-3" id="descPCD">
                    <label for="exampleFormControlTextarea1" class="form-label">Descreva a deficiência</label>
                    <textarea class="form-control" id="descricao_pcd" name="descricao_pcd" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Descrição da Vaga </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao"
                        rows="4"></textarea>
                </div>

            </div>
            <hr>
            <span>Campos Obrigatórios<strong>*</strong></span>
            <div class="text-end">
                <input type="submit" class="btn btn-primary" value="Anunciar" required>
            </div>
        </div>
    </div>

</form>
@endsection

<script>
    $('pcd1').click(function(){
    alert('sim')
    document.getElementById('descricao_pcd').style.display = "block";
  });

  $('pcd2').click(function(){
    alert('não')
    document.getElementById('descricao_pcd').style.display = "none";
  });

</script>