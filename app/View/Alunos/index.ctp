<section class="boasvindas">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2>Seja bem vindo de volta, <?php echo $user["nome"] ?>! </h2>
                    <p class="text-center">Não esqueça de verificar sua pontuação</p>
                    <div class="selo">
                        <img src="img/icon.png" class="img-responsive">
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% <span class="ti-face-smile"></span></span>
                        </div>
                    </div>
                    <h3 class="premio text-center">Você precisa se esforçar um pouco mais para conseguir <span>1 ponto na P2</span></h3>
                    <!--<h3 class="premio text-center">Opa! Falta pouquinho para você conseguir <span>1 ponto na P2</span></h3>-->
                    <!--<h3 class="premio text-center">Ei, bora fazer as atividades? Quem sabe você não consegue esse <span>1 ponto na P2</span></h3>-->

                </div>
            </div>
        </div>
    </section>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#progresso"><span class="ti-more"></span> Em progresso</a></li>
        <li><a data-toggle="tab" href="#realizadas"><span class="ti-thumb-up"></span> Já realizadas</a></li>
        <li><a data-toggle="tab" href="#recompensas"><span class="ti-medall-alt"></span> Minhas recompensas</a></li>
    </ul>
    <section class="atividades">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="tab-content">
                        <div id="progresso" class="tab-pane fade in active">
                            <h2 class="title green">Atividades em progresso</h2>

                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="content">
                                    <span class="icon ti-pencil"></span>
                                    <div class="professor"><img src="http://fakeimg.pl/40x40/?text=Foto"> Prof. Sérgio Luis Antonello</div>
                                    <div class="col-xs-10 col-md-10">
                                        <div class="titulo">Atividade de Algoritmo</div>
                                    </div>
                                    <div class="col-xs-2 col-md-2">
                                        <div class="pontos">
                                            <span>20</span>
                                            <p>pontos</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-default">Fazer atividade</a>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="content">
                                    <span class="icon ti-pencil"></span>
                                    <div class="professor"><img src="http://fakeimg.pl/40x40/?text=Foto"> Prof. Sérgio Luis Antonello</div>
                                    <div class="col-xs-10 col-md-10">
                                        <div class="titulo">Atividade de Algoritmo</div>
                                    </div>
                                    <div class="col-xs-2 col-md-2">
                                        <div class="pontos">
                                            <span>20</span>
                                            <p>pontos</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-default">Fazer atividade</a>
                                </div>
                            </div>

                        </div>
                        <div id="realizadas" class="tab-pane fade">
                            <h2 class="title green">Atividades realizadas</h2>

                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="content">
                                    <span class="icon ti-pencil"></span>
                                    <div class="professor"><img src="http://fakeimg.pl/40x40/?text=Foto"> Prof. Sérgio Luis Antonello</div>
                                    <div class="col-xs-10 col-md-10">
                                        <div class="titulo">Atividade de Algoritmo</div>
                                    </div>
                                    <div class="col-xs-2 col-md-2">
                                        <div class="pontos">
                                            <span>20</span>
                                            <p>pontos</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="content">
                                    <span class="icon ti-pencil"></span>
                                    <div class="professor"><img src="http://fakeimg.pl/40x40/?text=Foto"> Prof. Sérgio Luis Antonello</div>
                                    <div class="col-xs-10 col-md-10">
                                        <div class="titulo">Atividade de Algoritmo</div>
                                    </div>
                                    <div class="col-xs-2 col-md-2">
                                        <div class="pontos">
                                            <span>20</span>
                                            <p>pontos</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>

                        <div id="recompensas" class="tab-pane fade">
                            <h2 class="title green">Minhas recompensas</h2>

                            <div class="col-xs-6 col-md-4 content">
                                <img src="http://fakeimg.pl/350x200/?text=Foto" class="img-responsive">
                                <h3>01 ponto na P2</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>