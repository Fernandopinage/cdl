@extends('layout.buscar_filtro_candidato')


@section('busca')



<div class="container">

    @foreach ($dados as $dados)
    <form action="/avaliar/candidato/oms/" method="get">

        <div class="row g-3 shadow p-4 mb-5 bg-body rounded">
            <div class="text-end">

                <a href="/gerar/pdf/{{$dados->can_id}}"><img src="/icons/baseline_print_black_24dp.png"></a>

            </div>

            <div class="text">
                <div class="text-center">

                    @if(!empty($dados->can_foto))

                    <img id="perfil" src="/img/events/{{$dados->can_foto}}" alt="profile Pic">
                    @else
                    <img id="perfil" src="/img/events/perfil.png" alt="profile Pic">
                    @endif
                </div>
                <h2 class="form-signin-heading" style="color:#284D92;">Dados Pessoais</h2>
                <hr>
            </div>

            <div class="pessoais">

                <div class="row g-3">
                    <input type="hidden" name="id" value="{{$dados->can_id}}">
                    <div class="col-md-6">
                        <label class="form-check-label" for="flexCheckIndeterminate">Primeiro Nome
                        </label>
                        <input type="text" class="form-control form-control-sm" name="nome" placeholder=""
                            value="{{$dados->can_nome}}" disabled>
                    </div>

                    <div class="col-md-6">
                        <label class="form-check-label" for="flexCheckIndeterminate">Sobrenome
                            </label>
                        <input type="text" class="form-control form-control-sm" name="sobrenome" placeholder=""
                            value="{{$dados->can_sobrenome}}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">CPF
                            </label>
                        <input type="text" class="form-control form-control-sm" name="cpf" value="{{$dados->can_cpf}}"
                            disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">RG</label>
                        <input type="text" maxlength="10" class="form-control form-control-sm"
                            onkeyup="somenteNumeros(this);" name="rg" placeholder="" value="{{$dados->can_rg}}"
                            disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data Nascimento
                             </label>
                        <input type="date" class="form-control form-control-sm" name="nascimento" placeholder=""
                            value="{{$dados->can_nascimento}}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Local de Nascimento
                             </label>
                        <input type="text" class="form-control form-control-sm" name="localnascimento"
                            value="{{$dados->can_localnascimento}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Cor/Ra??a</label>
                        <input type="text" class="form-control form-control-sm" name="localnascimento"
                            value="{{$dados->can_cor}}" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
                        <input type="text" class="form-control form-control-sm" name="peso" placeholder=""
                            value="{{$dados->can_peso}}" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_altura}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_estadocivil}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Possui filhos</label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_filiacao == 'n??o' ? 'N??o' :'Sim'}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">G??nero </label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_genero}}" disabled>

                    </div>

                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Pretens??o Salarial </label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_pretensao_salario}}" disabled>
                    </div>

                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Ex-militar? </label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_exmilitar}}" disabled>

                    </div>

                    <div class="col-md-2" id="divMilitar">
                        <label class="form-check-label" for="flexCheckIndeterminate">Unidade Militar</label>
                        <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                            value="{{$dados->can_unidademilitar}}" disabled>
                    </div>
                    <div class="col-md-2" id="divMatricula">
                        <label class="form-check-label" for="flexCheckIndeterminate">Matr??cula</label>
                        <input type="text" class="form-control form-control-sm" name="matricula" id="matricula"
                            value="{{$dados->can_matricula}}" disabled>
                    </div>
                    <div class="col-md-2" id="divMatricula">
                        <label class="form-check-label" for="flexCheckIndeterminate"><span style="color:red;">Avalia????o
                                Candidato</span></label>
                        <select class="form-select form-select-sm" name="avalicao" aria-label="Default select example"
                            value="{{$dados->can_nota}}" disabled>

                            <option {{$dados->can_nota == '1'? 'selected':'' }} value="1">1</option>
                            <option {{$dados->can_nota == '2'? 'selected':'' }} value="2">2</option>
                            <option {{$dados->can_nota == '3'? 'selected':'' }} value="3">3</option>
                            <option {{$dados->can_nota == '4'? 'selected':'' }} value="4">4</option>
                            <option {{$dados->can_nota == '5'? 'selected':'' }} value="5">5</option>
                        </select>
                    </div>


                </div>
            </div>
        </div>


        <div class="row g-3 shadow p-4 mb-5 bg-body rounded">
            <div class="text-end">
                <!--
                <label class="switch">
                    <input type="checkbox" id="informacoesContato" checked>
                    <span class="slider round"></span>
                </label>
            -->
            </div>

            <div class="text">
                <h2 class="form-signin-heading" style="color:#284D92;">Informa????es de Contato</h2>
                <hr>
            </div>

            <div class="informacoesContato">
                <div class="row g-3">

                    <div class="col-md-4">
                        <label class="form-check-label" for="flexCheckIndeterminate">E-mail </label>
                        <input type="text" class="form-control form-control-sm" placeholder="" name="email"
                            value="{{$dados->can_email}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                        <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                            onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" name="telefone"
                            value="{{$dados->can_telefone}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Celular </label>
                        <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                            onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" name="celular"
                            value="{{$dados->can_celular}}" disabled>
                    </div>

                </div>
            </div>

        </div>

        <div class="row g-3 shadow p-4 mb-5 bg-body rounded">
            <div class="text-end">
                <!--
                <label class="switch">
                    <input type="checkbox" checked id="endereco">
                    <span class="slider round"></span>
                </label>
            -->
            </div>

            <div class="text">
                <h2 class="form-signin-heading" style="color:#284D92;">Endere??o</h2>
                <hr>
            </div>

            <div class="endereco">
                <div class="row g-3">
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">CEP
                            </label>
                        <input type="text" maxlength="9" class="form-control form-control-sm" name="cep" id="cep"
                            placeholder="" required value="{{$dados->can_cep}}" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-check-label" for="flexCheckIndeterminate">UF
                            </label>
                        <input type="text" class="form-control form-control-sm" maxlength="2" name="uf" id="uf"
                            placeholder="" required onkeypress="return lettersOnly(event);" value="{{$dados->can_uf}}"
                            disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                            </label>
                        <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                            required value="{{$dados->can_cidade}}" disabled>
                    </div>
                    <div class="col-md-7">
                        <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                            </label>
                        <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                            required value="{{$dados->can_bairro}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label"
                            for="flexCheckIndeterminate">N??</label></label>></label>
                        <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder=""
                            required value="{{$dados->can_numero}}" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label>
                        <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder=""
                            value="{{$dados->can_rua}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                        <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                            placeholder="" value="{{$dados->can_complemento}}" disabled>
                    </div>
                </div>

            </div>
        </div>


        <div class="row g-3 shadow p-4 mb-5 bg-body rounded">
            <div class="text-end">
                <!--
                <label class="switch">
                    <input type="checkbox" checked id="academica">
                    <span class="slider round"></span>
                </label>

            -->
            </div>

            <div class="text">
                <h2 class="form-signin-heading" style="color:#284D92;">Forma????o Acad??mica</h2>
                <hr>
            </div>
            <div class="academica">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-check-label" for="flexCheckIndeterminate">Forma????o
                            </label>
                        <select class="form-select form-select-sm" name="formacao" id="formacao"
                            aria-label="Default select example" disabled>
                            <option value="null"></option>
                            <option {{$dados->can_formacao == 'Ensino_Fundamental_completo' ? 'selected' :''}}
                                value="Ensino_Fundamental_completo">Ensino Fundamental completo</option>
                            <option {{$dados->can_formacao == 'Ensino Fundamental_incompleto' ? 'selected'
                                :''}}value="Ensino Fundamental_incompleto">Ensino Fundamental incompleto</option>
                            <option {{$dados->can_formacao == 'Ensino_M??dio_completo' ? 'selected' :''}}
                                value="Ensino_M??dio_completo">Ensino M??dio completo</option>
                            <option {{$dados->can_formacao == 'Ensino_M??dio_cursando' ? 'selected' :''}}
                                value="Ensino_M??dio_cursando">Ensino M??dio cursando</option>
                            <option {{$dados->can_formacao == 'Ensino_T??cnico_cursando' ? 'selected' :''}}
                                value="Ensino_T??cnico_cursando">Ensino T??cnico cursando</option>
                            <option {{$dados->can_formacao == 'Ensino_T??cnico_completo' ? 'selected' :''}}
                                value="Ensino_T??cnico_completo">Ensino T??cnico completo</option>
                            <option {{$dados->can_formacao == 'Superior_Cursando' ? 'selected' :''}}
                                value="Superior_Cursando">Superior Cursando</option>
                            <option {{$dados->can_formacao == 'Superior_Completo' ? 'selected' :''}}
                                value="Superior_Completo">Superior Completo</option>
                            <option {{$dados->can_formacao == 'P??s-Gradua????o_Cursando' ? 'selected' :''}}
                                value="P??s-Gradua????o_Cursando">P??s-Gradua????o Cursando</option>
                            <option {{$dados->can_formacao == 'P??s-Gradua????o_Completo' ? 'selected' :''}}
                                value="P??s-Gradua????o_Completo">P??s-Gradua????o Completo</option>

                        </select>
                    </div>
                    <div class="col-md-3" id="institucao_div">
                        <label class="form-check-label" for="flexCheckIndeterminate">Institui????o de Ensino </label>
                        <input type="text" class="form-control form-control-sm" name="instituicao" placeholder=""
                            value="{{$dados->can_instituicao}}" disabled>
                    </div>
                    <div class="col-md-3" id="curso_div">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                        <input type="text" class="form-control form-control-sm" name="curso" placeholder=""
                            value="{{$dados->can_curso}}" disabled>
                    </div>
                    <div class="col-md-2" id="termino_div">
                        <label class="form-check-label" for="flexCheckIndeterminate" id="termino_div_label">Ano em
                            Curso</label>
                        <input type="month" class="form-control form-select-sm" name="termino" placeholder=""
                            value="{{$dados->can_termino}}" disabled>
                    </div>
                    <div class="col-md-2" id="semestre_div">
                        <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                        <select class="form-select form-select-sm" name="semestre" aria-label="Default select example"
                            value="{{$dados->can_semestre}}" disabled>
                            <option selected></option>
                            <option {{$dados->can_semestre == '1?? Semestre' ? 'selected' :''}} value="1?? Semestre">1??
                                Semestre</option>
                            <option {{$dados->can_semestre == '2?? Semestre' ? 'selected' :''}} value="2?? Semestre">2??
                                Semestre</option>

                        </select>
                    </div>
                    <div class="col-md-3" id="periodo_div">
                        <label class="form-check-label" for="flexCheckIndeterminate">Per??odo em Curso</label>
                        <select class="form-select form-select-sm" name="periodo" aria-label="Default select example"
                            value="{{$dados->can_periodo}}" disabled>
                            <option></option>
                            <option {{$dados->can_periodo == '1?? Per??odo' ? 'selected' :''}} value="1?? Per??odo">1??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '2?? Per??odo' ? 'selected' :''}} value="2?? Per??odo">2??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '3?? Per??odo' ? 'selected' :''}} value="3?? Per??odo">3??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '2?? Per??odo' ? 'selected' :''}} value="4?? Per??odo">4??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '2?? Per??odo' ? 'selected' :''}} value="5?? Per??odo">5??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '2?? Per??odo' ? 'selected' :''}} value="6?? Per??odo">6??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '2?? Per??odo' ? 'selected' :''}} value="7?? Per??odo">7??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == '2?? Per??odo' ? 'selected' :''}} value="8?? Per??odo">8??
                                Per??odo
                            </option>
                            <option {{$dados->can_periodo == 'Ou Mais' ? 'selected' :''}} value="Ou Mais">Ou Mais
                            </option>

                        </select>
                    </div>
                </div>


                <div style="padding-top: 50px">

                    <h4 style="color: #284D92;">Curso Extracurriculares
                    </h4>
                    <hr>

                </div>

                @php

                if(!empty($dados->can_curso_extra)){

                $tamanho = count($dados->can_curso_extra);
                }else{
                $tamnho = 1;
                }

                @endphp


                @for($i = 0; $i <$tamanho; $i++) <div class="row g-3 shadow p-4 mb-5 bg-body rounded"
                    id="div<?php echo $i;?>" style="margin:0px 20px 0px 20px; padding:20px;">

                    <div class="col-md-4">
                        <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label>
                        <input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder=""
                            value="{{$dados->can_curso_extra[$i]}}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Ano termino</label>
                        <input type="month" class="form-control form-control-sm" name="curso_ano_termino[]"
                            placeholder="" value="{{$dados->can_curso_ano_termino[$i]}}" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-check-label" for="flexCheckIndeterminate">Ar??a de Atua????o</label>
                        <input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]"
                            id="areaatuacao" value="{{$dados->can_curso_area_atuacao[$i]}}" disabled>
                    </div>



            </div>

            @endfor

            <!-- div responsavel por adicionar outros campo -->
            <div id="lista" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->
            <div style="padding-top: 50px">

                <h4 style="color: #284D92;">Curso UTV
                </h4>
                <hr>

            </div>

            @php



            if(!empty($dados->can_utv_titlulo)){

            $tamanho2 = count($dados->can_utv_titlulo);
            }else{
            $tamanho2 = 1;
            }

            @endphp

            @for($i = 0; $i <$tamanho2; $i++) <div class="row g-3 shadow p-4 mb-5 bg-body rounded"
                id="divUTv<?php echo $i; ?>" style="margin:0px 20px 0px 20px; padding:20px;">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">T??tulo do curso</label>
                    <input type="text" class="form-control form-control-sm" name="utv_titlulo[]" placeholder=""
                        value="{{$dados->can_utv_titlulo[$i]}}" disabled>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Carga hor??ria</label>
                    <input type="text" class="form-control form-control-sm" name="utv_carga[]" placeholder=""
                        value="{{$dados->can_utv_carga[$i]}}" disabled>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Emiss??o</label>
                    <input type="month" class="form-control form-control-sm" name="utv_data[]" placeholder=""
                        value="{{$dados->can_utv_data[$i]}}" disabled>
                </div>

        </div>
        @endfor

        <div class="text">
            <h2 class="form-signin-heading" style="color:#284D92;">Idiomas
            </h2>

            <hr>
        </div>

        <div class="idioma_check">

            @php
            $tamanho3 = count($dados->can_idioma);

            if(!empty($dados->can_idioma)){

            $tamanho3 = count($dados->can_idioma);
            }else{
            $tamanho3 = 1;
            }


            @endphp

            @for($i = 0; $i <$tamanho3; $i++) <div class="endereco">
                <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divIdioma<?php echo $i;?>"
                    style="margin: 20px">
                    <div class="text-end">

                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma
                        </label>
                        <select class="form-select form-select-sm" name="idioma[]" id="idioma"
                            aria-label="Default select example" disabled>
                            <option selected></option>
                            <option {{$dados->can_idioma[$i] == 'Ingl??s' ? 'selected' :''}} value="Ingl??s">Ingl??s
                            </option>
                            <option {{$dados->can_idioma[$i] == 'Franc??s' ? 'selected' :''}} value="Franc??s">Franc??s
                            </option>
                            <option {{$dados->can_idioma[$i] == 'Espanhol' ? 'selected' :''}}
                                value="Espanhol">Espanhol</option>
                            <option {{$dados->can_idioma[$i] == 'Outros' ? 'selected' :''}} value="Outros">Outros
                            </option>

                        </select>
                    </div>
                    @if(!empty($can_outro_idioma[$i]))

                    <div class="col-md-3" id="div_outro">
                        <label class="form-check-label" for="flexCheckIndeterminate">Digite outro idioma</label>
                        <input type="text" name="outro_idioma[]" id="outro_idioma" class="form-control form-control-sm"
                            value="{{$dados->$can_outro_idioma[$i]}}" disabled>
                    </div>
                    @endif

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Escrita
                        </label>
                        <select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita"
                            aria-label="Default select example" disabled>
                            <option></option>
                            <option {{$dados->can_idioma_escrita[$i] == 'B??sico' ? 'selected' :''}}
                                value="B??sico">B??sico</option>
                            <option {{$dados->can_idioma_escrita[$i] == 'Intermedi??rio' ? 'selected' :''}}
                                value="Intermedi??rio">Intermedi??rio</option>
                            <option {{$dados->can_idioma_escrita[$i] == 'Avan??ado' ? 'selected' :''}}
                                value="Avan??ado">Avan??ado</option>


                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Leitura
                        </label>
                        <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura"
                            aria-label="Default select example" disabled>
                            <option></option>
                            <option {{$dados->can_idioma_escrita[$i] == 'B??sico' ? 'selected' :''}}
                                value="B??sico">B??sico</option>
                            <option {{$dados->can_idioma_escrita[$i] == 'Intermedi??rio' ? 'selected' :''}}
                                value="Intermedi??rio">Intermedi??rio</option>
                            <option {{$dados->can_idioma_escrita[$i] == 'Avan??ado' ? 'selected' :''}}
                                value="Avan??ado">Avan??ado</option>


                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">N??vel de Conversa????o
                        </label>
                        <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao"
                            aria-label="Default select example" disabled>
                            <option></option>
                            <option {{$dados->can_idioma_escrita[$i] == 'B??sico' ? 'selected' :''}}
                                value="B??sico">B??sico</option>
                            <option {{$dados->can_idioma_escrita[$i] == 'Intermedi??rio' ? 'selected' :''}}
                                value="Intermedi??rio">Intermedi??rio</option>
                            <option {{$dados->can_idioma_escrita[$i] == 'Avan??ado' ? 'selected' :''}}
                                value="Avan??ado">Avan??ado</option>


                        </select>
                    </div>

                </div>
        </div>
        @endfor
        <!-- div responsavel por adicionar outros campo -->
        <div id="listaIdioma" style="padding: 30px 0px 30px 0px"> </div>
        <!-- ****************************************** -->
</div>
</div>
</div>

<!------- -->

<div class="row g-3 shadow p-3 mb-5 bg-body rounded" style="margin-bottom: 50px">
    <div class="text-end">
        <!--
            <label class="switch">
                <input type="checkbox" checked id="profissional">
                <span class="slider round"></span>
            </label>
        -->
    </div>

    <div class="text">
        <h2 class="form-signin-heading" style="color:#284D92;">Experi??ncia Profissional
        </h2>

        <hr>
    </div>

    <div class="profissional">
        <div class="row g-3">

            <div class="col-md-12">
                @php
                $tamanho4 = count($dados->can_cargo_empresa);

                if(!empty($dados->can_cargo_empresa)){

                $tamanho4 = count($dados->can_cargo_empresa);
                }else{
                $tamanho4 = 1;
                }


                @endphp

                @for($i = 0; $i <$tamanho4; $i++) <div class="row g-3 shadow p-3 mb-5 bg-body rounded"
                    id="divExperiencia<?php echo $i;?>" style="margin: 10px">

                    <div class="col-md-6" id="01">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label>
                        <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder=""
                            value="{{$dados->can_nome_empresa[$i]}}" disabled>
                    </div>

                    <div class="col-md-4" id="02">
                        <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label>
                        <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder=""
                            value="{{$dados->can_cargo_empresa[$i]}}" disabled>
                    </div>

                    <div class="col-md-2" id="04">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data de Admiss??o </label>
                        <input type="month" class="form-control form-control-sm" placeholder=""
                            name="data_inicio_empresa[]" value="{{$dados->can_data_inicio_empresa[$i]}}" disabled>
                    </div>

                    <div class="col-md-2" id="05">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data de T??rmino </label>
                        <input type="month" class="form-control form-control-sm" placeholder=""
                            name="data_termino_empresa[]" value="{{$dados->can_data_termino_empresa[$i]}}" disabled>
                    </div>
                    <div class="col-md-2" id="06">
                        <label class="form-check-label" for="flexCheckIndeterminate">Sal??rio</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empres[]"
                            value="{{$dados->can_salario_empresa[$i]}}" onKeyPress="return(moeda(this,'.',',',event))"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="atividades" class="form-label">Atividades desenvolvidas</label>
                        <textarea class="form-control" name="atividades" id="atividades"
                            value="{{isset($dados->can_atividades[$i]) != null  ? $dados->can_atividades[$i] :''}}"
                            rows="3">{{isset($dados->can_atividades[$i]) != null  ? $dados->can_atividades :''}}</textarea>
                    </div>

            </div>
            @endfor

        </div>
    </div>
    <div class="text">
        <h2 class="form-signin-heading" style="color:#284D92;">Pref??rencias Profissionais
        </h2>

        <hr>
    </div>
    <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin-top: 30px">

        @php
         
    
        $t  = count($dados->can_tempoexperiencia);


        @endphp

            
    <label class="form-check-label" for="flexCheckIndeterminate" style="margin-bottom: 5px"> Prefer??ncias
        Profissionais do Candidato
    </label>
        @for($i = 0; $i < $t; $i++)

        <div class="row g-3">
            <div class="col-md-6">
                  <li style="">  {{$dados->can_tempoexperiencia[$i]}} </li>
                
            </div>

        </div>
        
        @endfor
       
    </div>

</div>
@endforeach



<div class="text-end">
    <input type="submit" class="btn btn-primary" value="Salvar Registros">
</div>
</form>
</div>

@endsection