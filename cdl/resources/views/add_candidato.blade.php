@extends('layout.add_candidato')

@section('cadastro')

<form action="/insert/candidato" method="POST" enctype="multipart/form-data" style="margin-bottom: 300px">

    @csrf
    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <div class="text-center">
                <div class="">
                    <img class="border border-success" id="perfil" src="/img/events/perfil.png" alt="profile Pic">
                </div>
                <div class="m-t-2">

                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem de Perfil </label>
                </div>
            </div>
            <h2 class="form-signin-heading">Dados Pessoais</h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome
                        <span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm" name="nome" placeholder="" required>
                </div>

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sobrenome
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="sobrenome" placeholder="" required>
                </div>

                <div class="col-md-4" id="selecionarFoto">
                    <label class="form-check-label" for="image">Selecione Sua foto</label>
                    <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                    <input type="file" name="foto" id="formFile" class="form-control-file">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CPF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder=""
                        onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);"
                        name="cnpj" id="cnpj" placeholder="99.999.999/9999-99" value="{{old('cnpj')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">RG</label>
                    <input type="text" maxlength="10" class="form-control form-control-sm"
                        onkeyup="somenteNumeros(this);" name="rg" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data Nascimento
                        <span><strong>*</strong></span> </label>
                    <input type="date" class="form-control form-control-sm" name="nascimento" placeholder="" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Local de Nascimento
                        <span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm" name="localnascimento" placeholder=""
                        required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cor/Ra??a</label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Branca">Branca</option>
                        <option value="Preta">Preta</option>
                        <option value="Parda">Parda </option>
                        <option value="Amarela">Amarela</option>
                        <option value="Ind??gena">Ind??gena</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
                    <input type="text" class="form-control form-control-sm" name="peso" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                    <input type="text" class="form-control form-control-sm" name="altura" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                    <select id="inputState" name="estadocivil" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                        <option value="Vi??vo">Vi??vo</option>
                        <option value="Separado">Separado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Possui filhos?</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="filiacao" id="gridRadios1" value="sim">
                        <label class="form-check-label" for="gridRadios1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="filiacao" id="gridRadios2" value="n??o" checked>
                        <label class="form-check-label" for="gridRadios2">
                            N??o
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">G??nero </label>
                    <select id="inputState" name="genero" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outros">Outros</option>

                    </select>

                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Pretens??o Salarial </label>
                    <input type="text" class="form-control form-control-sm" name="pretensao_salario" placeholder=""
                        onKeyPress="return(moeda(this,'.',',',event))">
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ex-militar? </label>
                    <select name="exmilitar" id="exmilitar" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Sim">Sim</option>
                        <option value="N??o">N??o</option>

                    </select>

                </div>

                <div class="col-md-2" id="divMilitar">
                    <label class="form-check-label" for="flexCheckIndeterminate">Unidade Militar</label>
                    <input type="text" class="form-control form-control-sm" name="unidademilitar" id="unidademilitar"
                        placeholder="">
                </div>
                <div class="col-md-2" id="divMatricula">
                    <label class="form-check-label" for="flexCheckIndeterminate">Matr??cula</label>
                    <input type="text" class="form-control form-control-sm" name="matricula" id="matricula"
                        placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail <span><strong>*</strong></span>
                    </label>
                    <input type="text" class="form-control form-control-sm" placeholder="" name="email" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="">Senha
                        <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" minlength="6" maxlength="12" name="senha" required >
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="">Confirmar Senha
                        <span><strong>*</strong></span> </label>
                    <input type="password" class="form-control form-control-sm" minlength="6" maxlength="12" name="confirma" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}"
                        name="telefone">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Celular
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}"
                        name="celular" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd1" value="sim">
                        <label class="form-check-label" for="pcd1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd2" value="n??o" checked>
                        <label class="form-check-label" for="pcd2">
                            N??o
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="endereco">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Endere??o</h2>
            <hr>
        </div>

        <div class="endereco">
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text" maxlength="9" class="form-control form-control-sm" name="cep" id="cep"
                        placeholder="" value="{{old('cep')}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" maxlength="2" name="uf" id="uf"
                        placeholder="" value="{{old('uf')}}" required onkeypress="return lettersOnly(event);">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        value="{{old('cidade')}}" required>
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                        value="{{old('bairro')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">N??</label></label><span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder=""
                        value="{{old('numero')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label>
                    <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder=""
                        value="{{old('rua')}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{old('complemento')}}">
                </div>
            </div>

        </div>


    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="academica">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Forma????o Acad??mica</h2>
            <hr>
        </div>

        <div class="academica">



            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Forma????o
                        <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="formacao" id="formacao"
                        aria-label="Default select example" required>
                        <option value="null" selected></option>
                        <option value="Ensino_Fundamental_Completo">Ensino Fundamental completo</option>
                        <option value="Ensino_Fundamental_Incompleto">Ensino Fundamental incompleto</option>
                        <option value="Ensino_M??dio_Completo">Ensino M??dio completo</option>
                        <option value="Ensino_M??dio_Cursando">Ensino M??dio cursando</option>
                        <option value="Ensino_T??cnico_Cursando">Ensino T??cnico cursando</option>
                        <option value="Ensino_T??cnico_Completo">Ensino T??cnico completo</option>
                        <option value="Superior_Cursando">Superior Cursando</option>
                        <option value="Superior_Completo">Superior Completo</option>
                        <option value="P??s-Gradua????o_Cursando">P??s-Gradua????o Cursando</option>
                        <option value="P??s-Gradua????o_Completo">P??s-Gradua????o Completo</option>
                    </select>
                </div>
                <div class="col-md-3" id="institucao_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Institui????o de Ensino </label>
                    <input type="text" class="form-control form-control-sm" name="instituicao" placeholder="">
                </div>
                <div class="col-md-3" id="curso_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
                </div>
                <div class="col-md-2" id="termino_div">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="termino_div_label">Ano em
                        Curso</label>
                    <input type="month" class="form-control form-select-sm" name="termino" placeholder="">
                </div>
                <div class="col-md-2" id="semestre_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                        <option selected></option>
                        <option value="1?? Semestre">1?? Semestre</option>
                        <option value="2?? Semestre">2?? Semestre</option>

                    </select>
                </div>
                <div class="col-md-3" id="periodo_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Per??odo em Curso </label>
                    <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
                        <option selected></option>
                        <option value="1?? Per??odo">1?? Per??odo</option>
                        <option value="2?? Per??odo">2?? Per??odo</option>
                        <option value="3?? Per??odo">3?? Per??odo</option>
                        <option value="4?? Per??odo">4?? Per??odo</option>
                        <option value="5?? Per??odo">5?? Per??odo</option>
                        <option value="6?? Per??odo">6?? Per??odo</option>
                        <option value="7?? Per??odo">7?? Per??odo</option>
                        <option value="8?? Per??odo">8?? Per??odo</option>
                        <option value="Ou Mais">Ou Mais</option>

                    </select>
                </div>
            </div>


            <div style="padding-top: 50px">

                <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso Extracurriculares
                </h4>
                <div class="text-end" style="padding-top: 10px">
                    <input type="button" class="btn btn-success btn-sm" onclick="addCampos()" value="Adicionar Curso">
                </div>
                <hr>

            </div>
            <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin:0px 20px 0px 20px; padding:20px;">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label>
                    <input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Carga
                        hor??ria</label>
                    <input type="text" class="form-control form-control-sm" id="curso_carga[]" name="curso_carga[]"
                        placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Emiss??o de Certificado</label>
                    <input type="month" class="form-control form-control-sm" name="curso_ano_termino[]" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ar??a de Atua????o</label>
                    <input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]"
                        id="areaatuacao">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Institui????o de Ensino</label>
                    <input type="text" class="form-control form-control-sm" name="curso_instituicao[]" placeholder="">
                </div>


            </div>

            <!-- div responsavel por adicionar outros campo -->
            <div id="lista" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->




            <div style="padding-top: 50px">

                <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso UTV
                </h4>
                <div class="text-end" style="padding-top: 10px">
                    <input type="button" class="btn btn-success btn-sm" onclick="addCamposUtv()"
                        value="Adicionar Curso">
                </div>
                <hr>

            </div>

            <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin:0px 20px 0px 20px; padding:20px;">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso</label>
                    <input type="text" class="form-control form-control-sm" id="utv_titlulo" name="utv_titlulo[]"
                        placeholder="" onblur="utvBlur()">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_carga_label">Carga
                        hor??ria</label>
                    <input type="text" class="form-control form-control-sm" id="utv_carga" name="utv_carga[]"
                        placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_data_label">Data de Emiss??o de
                        Certificado</label>
                    <input type="month" class="form-control form-control-sm" id="utv_data" name="utv_data[]"
                        placeholder="">
                </div>
                <div class="col-md-3" id="tempoexperiencia_div">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_area_atuacao_label">??rea de
                        Atua????o</label>
                    <input type="text" class="form-control form-control-sm" id="utv_area_atuacao"
                        name="utv_area_atuacao[]" placeholder="">
                </div>


            </div>
            <!-- div responsavel por adicionar outros campo -->
            <div id="listaUTv" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->


        </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="idioma">
                <span class="slider round"></span>
            </label>
        </div>



        <div class="text">
            <h2 class="form-signin-heading" style="padding-top: 50px; position: absolute;">Idiomas
            </h2>
            <div class="text-end" style="padding-top: 50px; position: relative; margin-right:10px">
                <input type="button" class="btn btn-success btn-sm" onclick="addIdioma()" value="Adicionar Idioma">
            </div>
            <hr>
        </div>

        <div class="idioma">

            <div class="endereco">
                <div class="row g-3 shadow p-3 mb-5 bg-body rounded" style="margin: 20px">

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma
                        </label>
                        <select class="form-select form-select-sm" name="idioma[]" id="idioma"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="Ingl??s">Ingl??s</option>
                            <option value="Franc??s">Franc??s</option>
                            <option value="Espanhol">Espanhol</option>
                            <option value="Outros">Outros</option>

                        </select>
                    </div>
                    <div class="col-md-3" id="div_outro">
                        <label class="form-check-label" for="flexCheckIndeterminate">Digite outro idioma</label>
                        <input type="text" name="outro_idioma[]" id="outro_idioma" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Escrita
                        </label>
                        <select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="B??sico">B??sico</option>
                            <option value="Intermedi??rio">Intermedi??rio</option>
                            <option value="Avan??ado">Avan??ado</option>


                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Leitura
                        </label>
                        <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="B??sico">B??sico</option>
                            <option value="Intermedi??rio">Intermedi??rio</option>
                            <option value="Avan??ado">Avan??ado</option>


                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Conversa????o
                        </label>
                        <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="B??sico">B??sico</option>
                            <option value="Intermedi??rio">Intermedi??rio</option>
                            <option value="Avan??ado">Avan??ado</option>


                        </select>
                    </div>

                </div>

                <!-- div responsavel por adicionar outros campo -->
                <div id="listaIdioma" style="padding: 30px 0px 30px 0px"> </div>
                <!-- ****************************************** -->

            </div>
        </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="profissional">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading" style="position:absolute;margin-top:50px;">Experi??ncia Profissional
            </h2>
            <div class="text-end" style="padding-top: 50px; position: relative; margin-right:10px">
                <input type="button" class="btn btn-success btn-sm" id="newExperiencia" onclick="addExperiencia()"
                    value="Adicionar Experi??ncia">
            </div>
            <hr id="hr">
        </div>

        <div class="profissional">

            <div class="row g-3">
                <div class="col-md-12">
                    <div>

                        <label class="form-check-label" for="flexCheckIndeterminate">Primeiro emprego? </label>
                    </div>


                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="area_profissional" value="sim"
                            id="area_profissional_sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="area_profissional" value="n??o"
                            id="area_profissional_nao" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            N??o
                        </label>
                    </div>

                </div>

                <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
                    <div class="col-md-6" id="01">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label>
                        <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder="">
                    </div>

                    <div class="col-md-5" id="02">
                        <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label>
                        <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder="">
                    </div>

                    <div class="col-md-2" style="margin-top: 40px;" id="03">
                        <label class="form-check-label" for="inlineCheckbox1">Empresa atual?</label>
                        <input class="form-check-input" type="checkbox" onclick="empresaAtual()" id="atual_empresa0" name="atual_empresa[]">

                    </div>
                    <div class="col-md-2" id="04">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data de Admiss??o </label>
                        <input type="month" class="form-control form-control-sm" placeholder=""
                            name="data_inicio_empresa[]">
                    </div>

                    <div class="col-md-2" id="05">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data de T??rmino </label>
                        <input type="month" id="data_termino" class="form-control form-control-sm" placeholder=""
                            name="data_termino_empresa[]">
                    </div>
                    <div class="col-md-2" id="06">
                        <label class="form-check-label" for="flexCheckIndeterminate">Sal??rio</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empresa[]"
                            onKeyPress="return(moeda(this,'.',',',event))">
                    </div>
                    <div class="mb-3">
                        <label for="atividades" class="form-label">Atividades desenvolvidas</label>
                        <textarea class="form-control" name="atividades" id="atividades" rows="3"></textarea>
                    </div>
   
                </div>

            </div>
            <!-- div responsavel por adicionar outros campo -->
            <div id="listaExperiencia" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->

        </div>
    </div>

    <div class="form-signin" style="margin-bottom: 50px">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="preferencia">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Prefer??ncias Profissionais
            </h2>

            <hr>
        </div>

        <div class="preferencia">


            <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
                <div class="row g-3">
                    <div class="col-md-6" id="tempoexperiencia_div">
                        <label class="form-check-label" for="flexCheckIndeterminate">Selecione Prefer??ncias
                            Profissionais</label>
                        <select class="form-select form-select-sm"id="tempoexperiencia"
                            aria-label="Default select example">
                            <option selected></option>
                            @foreach($Preferencia as $Preferencia)
                            <option value="{{$Preferencia->pre_preferencia}}">{{$Preferencia->pre_preferencia}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2" style="margin-top: 42px;">

                        <input type="button" class="btn btn-success btn-sm" onclick="addPreferencia()"
                            value="Adicionar Pref??rencias">

                    </div>
                </div>

                <!-- div responsavel por adicionar outros campo -->
                <div id="listaPreferencia" style="padding-top: 20px"> </div>
                <!-- ****************************************** -->

            </div>
        </div>
    </div>



    <div class="shadow-lg p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
        <style>
            .texto {
                max-height: 500px;
                overflow-y: auto;
                justify-content: center;
            }
        </style>

        <div class="texto">
            <p style="text-align: center;margin-top:10px"><b style="font-size: 20px">TERMO DE USO E POL??TICA DE PRIVACIDADE DO SITE CDL EMPREGABILIDADE</b></p>
            <p><b>1.    Quem somos</b></p>
            <p style="margin-left: 30px">O site CDL Empregabilidade ?? uma plataforma de recrutamento, mantido pela <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, desenvolvido para otimizar o processo seletivo de talentos, impulsionando em larga escala os ??ndices de empregabilidade. </p>
            <p style="margin-left: 30px"><b>A C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> ?? uma entidade voltada para o desenvolvimento da atividade mercantil, atrav??s da presta????o de servi??os. Sendo o associado seu objetivo e raz??o de suas a????es, tendo o compromisso de buscar constantemente a melhoria da qualidade dos servi??os prestados, com organiza????o e tecnologia.</p>
            <p><b>2.	Usu??rios </b></p>
            <p style="margin-left: 30px">O presente <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> tem por finalidade demonstrar o compromisso da <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> em rela????o a prote????o de dados pessoais e/ou sens??veis dos <b>USU??RIOS</b> do site CDL Empregabilidade, a seguir especificados:</p>
            <p style="margin-left: 30px"><b>a)	CANDIDATO: USU??RIO</b> interessado em cadastrar-se no site CDL Empregabilidade com o prop??sito de pesquisar e concorrer a oportunidades de emprego;</p>
            <p style="margin-left: 30px"><b>b)	EMPRESA: USU??RIO</b> Interessado em pesquisar, selecionar candidatos ou publicar oportunidades de emprego;</p>
            <p style="margin-left: 30px"><b>c)	FOR??AS ARMADAS:</b> Organiza????es Governamentais interessadas em cadastrar no site CDL Empregabilidade seus ex-integrantes com o prop??sito de fomentar a integra????o ao mercado de trabalho privado.</p>
            <p><b>3.	Hip??teses de tratamento aplic??veis aos dados pessoais e sens??veis</b></p>
            <p style="margin-left: 30px">Em conformidade com a Lei Geral de Prote????o de Dados, Lei Federal n?? 13.709/2018, a presente opera????o realizada com os dados pessoais e/ou sens??veis dos titulares de dados, ter?? como refer??ncia, mas n??o se limitando, o leg??timo interesse da <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, de seus clientes/associados ou parceiros; o cumprimento de obriga????o legal ou regulat??ria e o fornecimento de consentimento pelo titular de dados.</p>
            <p><b>4.	Consentimento </b></p>
            <p style="margin-left: 30px">Ao enviar informa????es pessoais e/ou efetivar cadastro, por interm??dio do site CDL Empregabilidade, os titulares de dados, especificados no ???item 2, al??nea a, b e c???, do <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> do site CDL Empregabilidade, autorizam a <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, mediante livre consentimento, a proceder com o tratamento dos seus dados pessoais e/ou sens??veis, especialmente no que se refere a coleta, produ????o, recep????o, classifica????o, utiliza????o, acesso, reprodu????o, transmiss??o, distribui????o, processamento, arquivamento, armazenamento, elimina????o, avalia????o ou controle da informa????o, modifica????o, comunica????o, transfer??ncia, difus??o ou extra????o de tais dados. Declarando ainda, estar ciente da utiliza????o dos seus dados pessoais e/ou sens??veis para realiza????o de eventual processo de recrutamento e sele????o.</p>
            <p style="margin-left: 30px"><b>4.1 </b>Os <b>USU??RIOS</b> especificados no ???item 2, al??nea a, b e c???, do <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> do site CDL Empregabilidade, autorizam o compartilhamento das informa????es imputadas no site CDL Empregabilidade com o todos os integrantes do site CDL Empregabilidade, para a finalidade de recrutamento e sele????o.</p>
            <p style="margin-left: 30px"><b>4.2 </b>Ao enviar informa????es pessoais e/ou sens??veis, por meio do site CDL Empregabilidade, os titulares de dados, especificados no ???item 2, al??nea a, b e c??? do <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> do site CDL Empregabilidade, confirmam que s??o maiores de idade ou que realizam o cadastro sob a orienta????o de uma pessoa respons??vel maior idade, e que se localizava em seu estado ou prov??ncia de resid??ncia.</p>
            <p style="margin-left: 30px"><b>4.3 </b>Caso o <b>USU??RIO</b> n??o possua domic??lio no Brasil, este se submete ?? legisla????o brasileira, concordando, portanto, que em havendo lit??gio a ser solucionado, a a????o dever?? ser proposta no Foro da Comarca de Manaus - Amazonas.</p>
            <p><b>5.	Direito de revoga????o de Consentimento </b></p>
            <p style="margin-left: 30px">Os <b>USU??RIOS</b> do site CDL Empregabilidade, poder??o revogar o seu Consentimento em rela????o aos Dados Pessoais e/ou Sens??veis fornecidos, gratuitamente, por meio de pedido de revoga????o de consentimento a ser realizado presencialmente pelo titular de dados, exclusivamente na <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL Manaus</b>, na Avenida Djalma Batista, Parque 10 de Novembro, Condom??nio Amazonas Flat Service, n??. 3000, Loja A - Torre Sul - CEP: 69055-038.</p>
            <p><b>6.	Arquivamento</b></p>
            <p style="margin-left: 30px">O site CDL Empregabilidade manter?? a guarda dos Dados Pessoais e/ou Sens??veis tratados, pelo per??odo adequado e necess??rio, em conformidade com a legisla????o aplic??vel e com as suas pol??ticas internas.</p>
            <p><b>7.	Seguran??a</b></p>
            <p style="margin-left: 30px">O site CDL Empregabilidade possui programa abrangente de seguran??a e governan??a de dados pessoais e/ou sens??veis, onde por meio de medidas t??cnicas e administrativas, protege as informa????es compartilhadas pelos <b>USU??RIOS</b>, presando sempre pelas obriga????es e finalidades compat??veis com as que justificaram o compartilhamento. </p>
            <p><b>8.	Compartilhamento</b></p>
            <p style="margin-left: 30px">Os dados pessoais e/ou sens??veis e os registros de atividade dos <b>USU??RIOS</b> do site CDL Empregabilidade poder??o ser compartilhados:  </p>
            <p style="margin-left: 60px"><b>a)</b>	Internamente entre os departamentos competentes da <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS;</b>  </p>
            <p style="margin-left: 60px"><b>b)</b>	Com terceiros, para finalidade de Recrutamento e Sele????o e/ou para desenvolvimento f??sico e t??cnico do site CDL Empregabilidade; </p>
            <p style="margin-left: 60px"><b>c)</b>	Com autoridades judiciais, administrativas ou governamentais competentes, sempre que houver determina????o legal, requerimento, requisi????o ou ordem judicial para tanto.</p>
            <p style="margin-left: 30px"><b>Par??grafo primeiro:</b> O banco de dados do site CDL Empregabilidade, n??o abrange informa????es de quaisquer outras solu????es e ferramentas ofertadas pela <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS.</b></p>
            <p style="margin-left: 30px"><b>Par??grafo segundo:</b> Tendo o <b>USU??RIO</b> d??vida no tocante ao compartilhamento dos dados pessoais e/ou sens??veis, poder?? entrar em contato com o atendimento disponibilizado neste <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> de Dados.</p>
            <p><b>9.	Transfer??ncia Internacional </b></p>
            <p style="margin-left: 30px">O site CDL Empregabilidade poder?? realizar a transfer??ncia internacional dos dados pessoais e/ou sens??veis atendendo ??s exig??ncias legais sobre a prote????o de dados pessoais, em especial aquelas previstas no Cap??tulo 5 da a Lei 13.709/18 (LGPD).</p>
            <p><b>10.	 Responsabilidade </b></p>
            <p style="margin-left: 30px">Em caso de incidentes que envolvam dados pessoais e/ou sens??veis causados em raz??o de conduta ??nica e exclusiva dos <b>USU??RIOS</b>, especificados no ???item 2, al??neas a, b e c??? deste termo, estes ficaram respons??veis por adimplir com quaisquer reclama????es, perdas e danos, despesas processuais judiciais, administrativas e arbitrais, em qualquer inst??ncia ou tribunal, que venham a ser ajuizadas em face da <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, multas, inclusive, mas n??o se limitando ??quelas aplicadas pela Autoridade Nacional de Prote????o de Dados, al??m de qualquer outra situa????o que exija o pagamento de valores pecuni??rios. </p>
            <p style="margin-left: 30px"><b>10.1.</b>	Ser?? de ??nica e exclusiva responsabilidade dos <b>USU??RIOS</b>, especificados no ???item 2, al??neas a, b e c??? deste termo, a repara????o por qualquer dano que estes, ou qualquer outra pessoa f??sica envolvida em seu nome no ??mbito deste termo, venha a causar ?? terceiros, ao passo que os <b>USU??RIOS</b> declaram, desde j??, que isentam expressamente a <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> de qualquer responsabilidade no que tange a eventuais danos de qualquer natureza, nas condi????es previstas neste item.</p>
            <p style="margin-left: 30px"><b>10.2.</b>	Os <b>USU??RIOS</b> especificados no ???item 2, al??neas a, b e c??? deste termo, declaram-se cientes que em caso de viola????o de qualquer uma das prote????es f??sicas, t??cnicas ou administrativas da <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, n??o h?? como garantir que as informa????es compartilhadas no site CDL Empregabilidade, n??o ser??o acessadas, divulgadas, alteradas ou destru??das.</p>
            <p style="margin-left: 30px"><b>10.3.</b>	Consentem os <b>USU??RIOS</b> especificados no ???item 2, al??neas a, b e c??? deste termo, que s??o respons??veis pela exatid??o, veracidade e atualiza????o dos dados pessoais e/ou sens??veis informados, nesse sentido, qualquer inconsist??ncia em decorr??ncia do fornecimento de informa????es no site CDL Empregabilidade, pode implicar em sac??o prevista no artigo 299 do C??digo Penal Brasileiro. Em igual teor, os USU??RIOS isentam a<b> C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> de qualquer responsabilidade no tocante a veracidade das informa????es prestadas ao site CDL Empregabilidade por interm??dio de seus <b>USU??RIOS.</b></p>
            <p style="margin-left: 30px"><b>10.4.</b>   Os <b>USU??RIOS</b> se responsabilizam pelo resguardo de seus usu??rios e senhas, recebidos em car??ter exclusivo, individual e intransfer??vel, n??o devendo repassar o referido acesso a terceiros, em hip??tese alguma.</p>
            <p><b>11.	Tratamento de Dados Pessoais e/ou Sens??veis</b></p>
            <p style="margin-left: 60px">Os dados imputados durante o acesso e utiliza????o do site CDL Empregabilidade, seguir??o as disposi????es constantes neste termo, bem como estar??o em conformidade com a Lei Geral de Prote????o de Dados (Lei Federal n. 13.709/2018) e demais normas que versem sobre a privacidade e prote????o de dados.</p>
            <p style="margin-left: 30px"><b>11.1.	O que fazemos com as suas informa????es?</b></p>
            <p style="margin-left: 60px"><b>a)</b>	Quando o <b>USU??RIO</b> realiza cadastro no site CDL Empregabilidade, coletamos informa????es pessoais e/ou sens??veis que voc?? nos fornece, tais como, n??o se limitando: nome, CPF, RG, endere??o eletr??nico, n??mero de telefone e/ou telefone celular, endere??o residencial, data de nascimento, grau de escolaridade, cursos de aprimoramento, informa????es profissionais e ??ltimas experi??ncias relacionadas a emprego;</p>
            <p style="margin-left: 60px"><b>b)</b>  De posse desses dados, ser??o distribu??das no site CDL Empregabilidade, para facilitar a conex??o entre os <b>USU??RIOS</b>, por meio de algoritmo criado especificamente para essa fun????o. Sendo assim, uma empresa ou uma institui????o, seja ela p??blica ou privada ter?? acesso aos dados;</p>
            <p style="margin-left: 60px"><b>c)</b>  ?? vedado o acesso total de <b>USU??RIOS</b> n??o cadastradas aos dados do site CDL Empregabilidade;  </p>
            <p style="margin-left: 60px"><b>d)</b>  Se faz necess??rio ressaltar, que ao aceitar o presente <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b>, mediante o presente consentimento t??cito, os USU??RIOS concordam tacitamente em receber, da <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> e de seus Provedores de Assinatura, e-mails, mensagens de texto, notifica????es em aplicativos, notifica????es por push ou outras comunica????es eletr??nicas. Tamb??m aceita receber mensagens, ofertas, pesquisas e outros materiais promocionais eletr??nicos. Em igual teor, declara estar ciente, que para tal finalidade, ser?? necess??rio o tratamento dos seus dados pessoais e/ou sens??veis, especialmente no que se refere a coleta, produ????o, recep????o, classifica????o, utiliza????o, acesso, reprodu????o, transmiss??o, distribui????o, processamento, arquivamento, armazenamento, elimina????o, avalia????o ou controle da informa????o, modifica????o, comunica????o, transfer??ncia, difus??o ou extra????o de tais dados;  </p>
            <p style="margin-left: 60px"><b>e)</b>  Todas as informa????es pessoais e/ou sens??veis relativos aos <b>USU??RIOS</b> ou visitantes que usem o site CDL Empregabilidade ser??o tratados em concord??ncia com a Lei da Prote????o de Dados Pessoais (Lei n?? 13.709/18).  </p>
            <p><b>11.2.	Os an??ncios de oferta de vagas e programa????o de treinamento e capacita????o da Universidade de Tecnologia do Varejo - UTV?</b></p>
            <p style="margin-left: 60px">A pol??tica de an??ncios do site CDL Empregabilidade, restringe sua publicidade de an??ncios ao tempo da visita e as p??ginas que acessaram os <b>USU??RIOS</b> dentro do site.  </p>
            <p><b>11.3.	O site CDL Empregabilidade realiza a coleta de cookies?</b></p>
            <p style="margin-left: 60px">O site CDL Empregabilidade, n??o utiliza cookies e n??o armazena dados de clientes para comercializar ou exibir an??ncios.</p>
            <p><b>11.4.	Liga????es a sites de terceiros?</b></p>
            <p style="margin-left: 60px">Quando o <b>USU??RIO</b> clicar em links no site CDL Empregabilidade, poder?? ser direcionado para fora da Home do site CDL Empregabilidade. Uma vez que o <b>USU??RIO</b> sair do site CDL Empregabilidade ou for redirecionado para um aplicativo ou site de terceiros, n??o estar?? mais regido pelo presente <b>TERMO DE USO E POL??TICA DE PRIVACIDADE.</b> As pr??ticas de privacidade aplicadas por outros sites s??o de responsabilidade exclusiva de seus desenvolvedores, recomendamos a leitura das referidas pol??ticas de privacidade.</p>
            <p><b>12.	 Disposi????es Gerais</b></p>
            <p style="margin-left: 60px">Em virtude do presente <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b>, as partes concordam com as obriga????es a seguir especificadas:  </p>
            <p style="margin-left: 60px"><b>a)</b>	Nenhuma das partes tem o direito de obrigar ou agir em nome da outra, n??o podendo, pois, vincul??-la a termos, contratos ou acordos com terceiros;  </p>
            <p style="margin-left: 60px"><b>b)</b>	A <b>C??MARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> reserva a si o direito de alterar o <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> a qualquer momento, independente de pr??via notifica????o, conforme a finalidade ou a necessidade, como para adequa????o com sua pol??tica interna, disposi????o legal ou norma que tenha for??a jur??dica equivalente, cabendo ao <b>USU??RIO</b> verificar a vers??o atualizada sempre que acessar o site CDL Empregabilidade;</p>
            <p style="margin-left: 60px"><b>c)</b>  As partes reconhecem e declaram que este contrato n??o estabelece qualquer v??nculo de natureza empregat??cia, associativa ou societ??ria entra elas, cabendo individualmente a cada uma das partes cumprir individualmente com todas as obriga????es, contribui????es e benef??cios da previd??ncia social e outros decorrentes da legisla????o trabalhista, previdenci??ria, social ou qualquer outro relacionada ?? rela????o de emprego ou de trabalho, isentando-se as partes mutualmente, de toda e qualquer responsabilidade nesse sentido;</p>
            <p style="margin-left: 60px"><b>d)</b>  Caso alguma disposi????o deste <b>TERMO DE USO E POL??TICA DE PRIVACIDADE</b> seja considerada inaplic??vel pela Autoridade Nacional de Prote????o de Dados ou qualquer outra autoridade competente, inclusive judicial, as demais condi????es permanecer??o em pleno vigor e efeito;</p>
            <p style="margin-left: 60px"><b>e)</b>  As partes, ser??o respons??veis por todos os atos praticados por seus empregados, prepostos ou procuradores, quando da execu????o do site CDL Empregabilidade, respondendo perante a terceiros pelos danos causados;</p>
            <p style="margin-left: 60px"><b>f)</b>  As partes responder??o, individualmente, pelas obriga????es assumidas perante terceiros.</p>
            <p><b>13.	  Central de Atendimento</b></p>
            <p style="margin-left: 60px">Permanecemos ?? disposi????o para dirimir eventuais d??vidas decorrentes das disposi????es constantes neste <b>TERMO DE POL??TICA DE PRIVACIDADE</b>, o USU??RIO poder?? entrar em contato por meio do endere??o eletr??nico  <a href = "mailto:cdlempregabilidade@cdlmanaus.org.br" style="color: blue">cdlempregabilidade@cdlmanaus.org.br</a> ou por interm??dio do telefone (92) 36272855. </p>
            
        </div>

        <div class="form-check" style="margin-top: 80px">
            <input class="form-check-input" type="checkbox" name="termo" id="termo" required>
            <label class="form-check-label" for="flexCheckChecked" style="color: #0d6efd">
                Li e aceito os Termos da Pol??tica de Dados do Site<span><strong>*</strong></span></label>
            </label>
        </div>
        <hr>
        <!--
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>

    -->
        <span> Campos Obrigat??rios <strong>*</strong></span>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>





</form>


@endsection

<script>

    function empresaAtual(){
        if(document.getElementById('atual_empresa0').checked){
            document.getElementById('data_termino').disabled = true;
        }else{
            document.getElementById('data_termino').disabled = false;
        }   
    }

</script>

<script>
    var cont01 =1;
    function addCampos(){
     
        if(cont01 < 4){

        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="div'+cont01+'" style="margin:0px 20px 0px 20px; padding:20px;">  <div class="text-end"><input type="button" class="btn btn-danger btn-sm" onclick="removeCampos('+cont01+')" value="Remover Curso">    </div><div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label> <input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder=""> </div><div class="col-md-2"><label class="form-check-label" for="flexCheckIndeterminate" id="utv_carga_label">Carga hor??ria</label><input type="text" class="form-control form-control-sm" id="utv_carga" name="curso_carga[]" placeholder=""> </div><div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">Data de Emiss??o de Certificado</label><input type="month" class="form-control form-control-sm" name="curso_ano_termino[]" placeholder="">    </div> <div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">Ar??a de Atua????o</label><input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]" id="areaatuacao">  </div><div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Institui????o de Ensino</label><input type="text" class="form-control form-control-sm" name="curso_instituicao[]" placeholder=""> </div>';
                 document.getElementById('lista').appendChild(div)
        cont01++;

        }
    }

    function removeCampos(id){

         document.getElementById('div'+id).remove();   
         cont01--;
    }
</script>

<script>
    var cont02 =1;
    function addCamposUtv(){
     
    if(cont02 < 4){

        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divUTv'+cont02+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposUTv('+cont02+')" value="Remover Curso"></div> <div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Nome do curso</label> <input type="text" class="form-control form-control-sm" name="utv_titlulo[]" placeholder=""> </div>  <div class="col-md-2">  <label class="form-check-label" for="flexCheckIndeterminate">Carga hor??ria</label> <input type="text" class="form-control form-control-sm" name="utv_carga[]" placeholder="">  </div> <div class="col-md-3">  <label class="form-check-label" for="flexCheckIndeterminate">Data de Emiss??o de Certificado</label><input type="month" class="form-control form-control-sm" name="utv_data[]" placeholder=""> </div><div class="col-md-3" id="tempoexperiencia_div"><label class="form-check-label" for="flexCheckIndeterminate">??rea de Atua????o</label><input type="text" class="form-control form-control-sm" name="utv_area_atuacao[]" placeholder=""> </div>';
                 document.getElementById('listaUTv').appendChild(div)
        cont02++;

        }
    }
    function removeCamposUTv(id){

         document.getElementById('divUTv'+id).remove();   
         cont02--;
    }
</script>

<script>
    var cont03 =1;
    function addIdioma(){

    if(cont03 < 4){
        
        if(document.getElementById('idioma').value != ''){

           
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divIdioma'+cont03+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposIdioma('+cont03+')" value="Remover Idioma"></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma </label><select class="form-select form-select-sm" name="idioma[]" id="idioma" aria-label="Default select example"> <option selected></option> <option value="Ingl??s">Ingl??s</option><option value="Franc??s">Franc??s</option>  <option value="Espanhol">Espanhol</option><option value="Outros">Outros</option> </select></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">N??vel de Escrita</label><select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita" aria-label="Default select example"><option selected></option> <option value="B??sico">B??sico</option> <option value="Intermedi??rio">Intermedi??rio</option> <option value="Avan??ado">Avan??ado</option> </select></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">N??vel de Leitura </label> <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura" aria-label="Default select example">  <option selected></option> <option value="B??sico">B??sico</option>  <option value="Intermedi??rio">Intermedi??rio</option> <option value="Avan??ado">Avan??ado</option>   </select></div>  <div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Conversa????o </label> <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao" aria-label="Default select example">                <option selected></option> <option value="B??sico">B??sico</option> <option value="Intermedi??rio">Intermedi??rio</option> <option value="Avan??ado">Avan??ado</option></select></div> </div>';
        document.getElementById('listaIdioma').appendChild(div)
         cont03++;

        }
    }
    }

    function removeCamposIdioma(id){

         document.getElementById('divIdioma'+id).remove();   
         cont03--;
    }
</script>




<script>
    var cont04 =1;
    function addExperiencia(){
        if(cont04 <4){

        var div = document.createElement('div');
        div.innerHTML = '<div  class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divExperiencia'+cont04+'" style="margin: 10px"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposEx('+cont04+')" value="Remover Experi??ncia"></div> <div class="col-md-6" id="01">  <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label> <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder=""> </div><div class="col-md-5" id="02"> <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label> <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder=""> </div> <div class="col-md-2" style="margin-top: 40px;" id="03"> <label class="form-check-label" for="inlineCheckbox1">Empresa atual? </label><input class="form-check-input" type="checkbox" onclick="EmpresaAtual('+cont04+')" id="atual_empresa'+cont04+'" name="atual_empresa[]"> </div> <div class="col-md-2" id="04"> <label class="form-check-label" for="flexCheckIndeterminate">Data de Admiss??o </label>  <input type="month" class="form-control form-control-sm" placeholder="" name="data_inicio_empresa[]"> </div> <div class="col-md-2" id="05"><label class="form-check-label" for="flexCheckIndeterminate">Data de T??rmino </label><input type="month" class="form-control form-control-sm" placeholder="" id="data_termino_empresa'+cont04+'" name="data_termino_empresa[]">  </div> <div class="col-md-2" id="06"><label class="form-check-label" for="flexCheckIndeterminate">Sal??rio</label>  <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empresa[]">  </div>  <div class="mb-3"><label for="atividades" class="form-label">Atividades desenvolvidas</label><textarea class="form-control" name="atividades[]" id="atividades" rows="3"></textarea></div> </div></div>';
                 document.getElementById('listaExperiencia').appendChild(div)
        cont04++;
       
        }
    }

    function removeCamposEx(id){

         document.getElementById('divExperiencia'+id).remove();   
         cont04--;
    }

    function EmpresaAtual(id){

        if($("#atual_empresa"+id).prop('checked') == true){
        $("#data_termino_empresa"+id).prop("disabled", true); 
        }
        if($("#atual_empresa"+id).prop('checked') == false){
            $("#data_termino_empresa"+id).prop("disabled", false); 
        }

    }
</script>


<script>
    var cont05 =1;
    function addPreferencia(){
        if(cont05 <4){
        var preferencia = document.getElementById('tempoexperiencia').value    
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3" id="divPreferencia'+cont05+'"><div class="col-md-6" id="tempoexperiencia_div"><label class="form-check-label" for="flexCheckIndeterminate">Selecione Prefer??ncias Profissionais</label> <select class="form-select form-select-sm" name="tempoexperiencia[]" id="tempoexperiencia" aria-label="Default select example"> <option>'+preferencia+'<option></select></div><div class="col-md-2" id="tempoexperiencia_div" style="margin-top:42px"><input type="button" class="btn btn-danger btn-sm" onclick="removeCamposPreferencia('+cont05+')" value="Remover Pref??rencias"> </div></div></div>';
                 document.getElementById('listaPreferencia').appendChild(div)
        cont05++;
        var preferencia = document.getElementById('tempoexperiencia').value ='';
        }
    }

    function removeCamposPreferencia(id){

         document.getElementById('divPreferencia'+id).remove();  
         cont05--;
    }
</script>


<script>
    function utvBlur(){
        
        if(document.getElementById('utv_titlulo').value != ''){
           document.getElementById('utv_carga_label').innerHTML= "Carga hor??ria <span><strong>*</strong></span>";
           document.getElementById('utv_carga').required = true
           document.getElementById('utv_data_label').innerHTML= "Data de Emiss??o <span><strong>*</strong></span>";
           document.getElementById('utv_data').required = true
           document.getElementById('utv_area_atuacao_label').innerHTML= "??rea de Atua????o <span><strong>*</strong></span>";
           document.getElementById('utv_area_atuacao').required = true

        }else{
            document.getElementById('utv_carga_label').innerHTML= "Carga hor??ria";
            document.getElementById('utv_carga').required = false
            document.getElementById('utv_data_label').innerHTML= "Data de Emiss??o";
            document.getElementById('utv_data').required = false
            document.getElementById('utv_area_atuacao_label').innerHTML= "??rea de Atua????o";
            document.getElementById('utv_area_atuacao').required = false
        }
    }

</script>


<!-- *************************validando cnpj ************************* -->
<script>
    function formatarCampo(campoTexto) {
        if (campoTexto.value.length <= 11) {
            campoTexto.value = mascaraCpf(campoTexto.value);
        } else {
            campoTexto.value = mascaraCnpj(campoTexto.value);
        }
    }
    function retirarFormatacao(campoTexto) {
        campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g,"");
    }
    function mascaraCpf(valor) {
        return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
    }
    function mascaraCnpj(valor) {
        return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g,"\$1.\$2.\$3\/\$4\-\$5");
    }

    function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }
</script>
<!-- *************************validando telefone ************** -->

<script>
    function mouseDown() {
  document.getElementById("termo_politica").style.color = "red";
}

function mouseUp() {
  document.getElementById("termo_politica").style.color = "green";
}


</script>


<script type="text/javascript">
    function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
    }
</script>

<!-- ----------------------------------------------------------------- -->
<!-- Adicionando JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {
  
          function limpa_formul??rio_cep() {
              // Limpa valores do formul??rio de cep.
              $("#rua").val("");
              $("#bairro").val("");
              $("#cidade").val("");
              $("#uf").val("");
              $("#ibge").val("");
          }
  
          //Quando o campo cep perde o foco.
          $("#cep").blur(function() {
  
              //Nova vari??vel "cep" somente com d??gitos.
              var cep = $(this).val().replace(/\D/g, '');
  
              //Verifica se campo cep possui valor informado.
              if (cep != "") {
  
                  //Express??o regular para validar o CEP.
                  var validacep = /^[0-9]{8}$/;
  
                  //Valida o formato do CEP.
                  if (validacep.test(cep)) {
  
                      //Preenche os campos com "..." enquanto consulta webservice.
                      $("#rua").val("...");
                      $("#bairro").val("...");
                      $("#cidade").val("...");
                      $("#uf").val("...");
                      $("#ibge").val("...");
  
                      //Consulta o webservice viacep.com.br/
                      $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
  
                          if (!("erro" in dados)) {
                              //Atualiza os campos com os valores da consulta.
                              $("#rua").val(dados.logradouro);
                              $("#bairro").val(dados.bairro);
                              $("#cidade").val(dados.localidade);
                              $("#uf").val(dados.uf);
                              $("#ibge").val(dados.ibge);
                          } //end if.
                          else {
                              //CEP pesquisado n??o foi encontrado.
                              limpa_formul??rio_cep();
                              alert("CEP n??o encontrado.");
                          }
                      });
                  } //end if.
                  else {
                      //cep ?? inv??lido.
                      limpa_formul??rio_cep();
                      alert("Formato de CEP inv??lido.");
                  }
              } //end if.
              else {
                  //cep sem valor, limpa formul??rio.
                  limpa_formul??rio_cep();
              }
          });
      });
</script>

<!--  Script campo RG onde s?? aceita numero -->

<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
</script>

<!---------------------------------------------------->


<!-- VALIDANDO DADOS APENAS LETRAS -->
<script>
    function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 31 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        
        return false;
    }
    return true;
}
</script>
<!--------------------------------------------------->

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
    function validaCPF(cpf)
     {
       var numeros, digitos, soma, i, resultado, digitos_iguais;
       digitos_iguais = 1;
       if (cpf.length < 11)
             return false;
       for (i = 0; i < cpf.length - 1; i++)
             if (cpf.charAt(i) != cpf.charAt(i + 1))
                   {
                   digitos_iguais = 0;
                   break;
                   }
       if (!digitos_iguais)
             {
             numeros = cpf.substring(0,9);
             digitos = cpf.substring(9);
             soma = 0;
             for (i = 10; i > 1; i--)
                   soma += numeros.charAt(10 - i) * i;
             resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
             if (resultado != digitos.charAt(0))
                   return false;
             numeros = cpf.substring(0,10);
             soma = 0;
             for (i = 11; i > 1; i--)
                   soma += numeros.charAt(11 - i) * i;
             resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
             if (resultado != digitos.charAt(1))
                   return false;
             return true;
             }
       else
           return false;
     }
</script>