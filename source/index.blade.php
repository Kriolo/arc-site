@extends('_layouts.master')

@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="main_area">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-xs-12" id="slider">
                                <!-- Top part of the slider -->
                                <div class="row">
                                    <div class="col-sm-8" id="carousel-bounding-box">
                                        <div class="carousel slide" id="myCarousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="http://placehold.it/770x400&text=1">
                                                </div>

                                                <div class="item" data-slide-number="1">
                                                    <img src="http://placehold.it/770x400&text=2">
                                                </div>

                                                <div class="item" data-slide-number="2">
                                                    <img src="http://placehold.it/770x400&text=3">
                                                </div>

                                                <div class="item" data-slide-number="3">
                                                    <img src="http://placehold.it/770x400&text=4">
                                                </div>
                                            </div><!-- Carousel nav -->
                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <span class="fa fa-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <span class="fa fa-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-4" id="carousel-text"></div>

                                    <div id="slide-content" style="display: none;">
                                        <div id="slide-content-0">
                                            <h2>Notícia 1</h2>
                                            <p>Lorem Ipsum Dolor</p>
                                            <p class="sub-text">Abril 20 2017 - <a href="#">Ler mais</a></p>
                                        </div>

                                        <div id="slide-content-1">
                                            <h2>Notícia 2</h2>
                                            <p>Lorem Ipsum Dolor</p>
                                            <p class="sub-text">Abril 20 2017 - <a href="#">Ler mais</a></p>
                                        </div>

                                        <div id="slide-content-2">
                                            <h2>Notícia 3</h2>
                                            <p>Lorem Ipsum Dolor</p>
                                            <p class="sub-text">Abril 20 2017 - <a href="#">Ler mais</a></p>
                                        </div>

                                        <div id="slide-content-3">
                                            <h2>Notícia 4</h2>
                                            <p>Lorem Ipsum Dolor</p>
                                            <p class="sub-text">Abril 20 2017 - <a href="#">Ler mais</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/Slider-->

                        <div class="row hidden-xs" id="slider-thumbs">
                            <!-- Bottom switcher of slider -->
                            <ul class="hide-bullets">
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=1"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=2"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=3"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=4"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Serviços Online</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="http://placehold.it/100x100&text=1">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="http://placehold.it/100x100&text=2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="http://placehold.it/100x100&text=3">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="http://placehold.it/100x100&text=4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ feature-->

    <!-- Section-2 -->
    <section id="section-2" class="section-padding">
        <div class="container">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#sondagem" data-toggle="tab">Sondagem</a></li>
                        <li><a href="#relatorios" data-toggle="tab">Relatórios</a></li>
                        <li><a href="#sala-de-imprensa" data-toggle="tab">Sala de Imprensa</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="relatorios">
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="text-justify">Nos termos do artigo 68º, ponto 1., dos Estatutos da Autoridade Reguladora para a Comunicação Social, aprovados pela Lei nº8/VIII/2011, de 29 de Dezembro, a ARC, “deve manter a Assembleia Nacional informada sobre as suas deliberações e actividades, enviando-lhe uma colectânea mensaldas mesmas”.</p>
                                    <p class="text-justify">
                                        Neste espaço são disponibilizados extractos dos informes enviados ao Parlamento, desde Novembro
                                        de 2015, altura em que foi apresentado o primeiro relatório abarcando os primeiros meses de
                                        instalação da ARC, cujos membros do Conselho Regulador tomaram posse a 23 de Julho.
                                    </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Relatórios Recentes</div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td>Ano</td>
                                                    <td>Título</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <p>Março 2017</p>
                                                        <a href="#">
                                                            <i class="fa fa-cloud-download fa-4x"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <strong>Relatório Anual de Atividades e Contas</strong>
                                                        <p>Relatório aprovado por deliberação n.º8/CR-ARC/2017</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Março 2017</p>
                                                        <a href="#">
                                                            <i class="fa fa-cloud-download fa-4x"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <strong>Relatório Anual de Atividades e Contas</strong>
                                                        <p>Relatório aprovado por deliberação n.º8/CR-ARC/2017</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in active" id="sondagem">
                            <div class="row">
                                <div class="col-md-7 pull-left">
                                    <p class="text-justify">A ARC tem a competência de proceder ao registo e à credenciação das empresas de sondagens, bem
                                        como de regular e acompanhar a realização e publicação de sondagens e inquéritos de opinião,
                                        nos termos da Lei n.º 19/VIII/2012, de 13 de Setembro.
                                    </p>
                                </div>
                                <div class="col-md-5 pull-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Empresas de Sondagem Credenciadas pela ARC</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Legislação</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Registo Prévio</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Ficha Técnica</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Publicitação de Sondagens</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Relatórios</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sala-de-imprensa">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="text-justify">Nesta seção é disponibilizada informação destinada aos órgãos de comunicação social. Selecione
                                        a opção pretendida nos menus à direita.
                                </div>
                                <div class="col-md-5">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Comunicados à Imprensa</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Notas à Imprensa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section-2 -->

    <!-- Section-3 -->
    <section id="section-3" class="section-padding">
        <div class="container">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="active"><a href="#">Orgãos de Comunicação Social</a></li>
                <li role="presentation"><a href="#">Equipa de Sondagem</a></li>
                <li role="presentation"><a href="#">Empresa de Marketing</a></li>
            </ul>
            <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade in active" role="tabpanel" id="home" aria-labelledby="home-tab">
                    <p>Rawdenim you probably haven't heard of them jean shorts Austin. Nesciunt
                        tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                        tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                        keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry
                        richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan
                        aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                        coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings
                        next level wes anderson artisan four loko farm-to-table craft beer twee.
                        Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip
                        jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda
                        labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                        vero magna velit sapiente labore stumptown. Vegan fanny pack odio
                        cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical
                        culpa terry richardson biodiesel. Art party scenester stumptown, tumblr
                        butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="dropdown1" aria-labelledby="dropdown1-tab"><p>Etsy
                        mixtape wayfarers, ethical wes anderson tofu before they sold out
                        mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                        Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                        locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                        banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                        banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                        retro mlkshk vice blog. Scenester cred you probably haven't heard of
                        them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth
                        chambray yr.</p>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section-2 -->

    <!-- Section-4 -->
    <section id="section-4" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Eventos</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ feature-->
@endsection