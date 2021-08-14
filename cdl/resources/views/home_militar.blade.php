@extends('layout.home_militar')
@section('home')

<div class="row_full">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner-1.jpg" id="id1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/banner-2.jpg" id="id2" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/banner-3.jpg" id="id3" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="visualizar">

    <h1>ÚLTIMOS <b> EX MILITARES </b> EM DESTAQUE</h1>
    <h5>5330 profissionais cadastrados na última semana</h5>
</div>


<div class="container" id="canditados">
    @for($i = 0; $i < 6; $i++) <div class=" d-inline-block" style="padding: 8px;">

        <div class="form-row" style="border: 0px;">
            <div class="form-group col-md-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">

                        <span style="color: #284D92"></span>
                        <p>
                            <h1>
                                <span style="color: #157347; margin-right:132px"><img src="/img/index-1.jpg"
                                        height="250px" width="150px" class="img-thumbnail" alt="..."></span><span
                                    style="color: #696969;"></span>
                            </h1>
                            <hr>
                            <br>
                            <span style="color: #97212d; margin-right:110px">Nome:</span><span
                                style="color: #696969"></span>
                            <br>
                            <span style="color: #22427c; margin-right:185px">Formação:</span>

                            <br>
                            <span style="color: #22427c; margin-right:185px">Trabalhando Atualmente:</span>
                            <span style="color: #696969;"></span>

                            <div class="text-center d-grid" style="margin-top: 20px;">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#visualizar">
                                    VISUALIZAR PERFIL
                                </button>

                            </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endfor
</div>


<div class="visualizar">

    <h1>Veja os Cursos que a <b> UTV </b> tem para você!</h1>

</div>
<div class="container" id="curso">
    @for($i = 0; $i < 3; $i++)
    
    <div class=" d-inline-block" style="margin-top: 20px;">

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h1>
                            <span style="color: #157347; margin-right:132px"><img src="/img/curso_de_ingles_imd.png"
                                    height="450px" width="350px" class="img-thumbnail" alt="..."></span><span
                                style="color: #696969;"></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card" style="padding: 15px">
                    <h5 class="card-title"><b style="color:#006CDE;">Curso: INGLÊS NÍVEL 1</b></h5>
                    <h6 class="card-title">Sobre Curso:</h6>
                    <p class="card-text">A CDL Manaus em parceria com o IMD Centro de Educação, apresentam o Curso
                        de Inglês – Presencial Nível 1.Associados da CDL Manaus tem 15% de desconto nas
                        mensalidades.Por que o inglês é....</p>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Horário:</th>
                                    <th scope="col">Dias:</th>
                                    <th scope="col">Período:</th>
                                    <th scope="col">Investimento:</th>
                                    <th scope="col">Estudante:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b style="color:#006CDE;">19h à 20h</b></td>
                                    <td><b style="color:#006CDE;">Terça- Feira e Quinta - Feira</b></td>
                                    <td><b style="color:#006CDE;">10/08 a 27/01/2022</b></td>
                                    <td><b style="color:#006CDE;">190.00</b></td>
                                    <td><b style="color:#006CDE;">0.00</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-left">
                        <p><b style="color:#006CDE;"> Mais Informações:</b></p><p style="color:#006CDE;">(92) 98409-0481/ 98480-9998, ou acesse o site: imd-ce.com.br </p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endfor
</div>

@endsection