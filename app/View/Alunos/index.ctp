<section class="boasvindas">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2>Seja bem vindo de volta, <?php echo $user["nome"] ?>! </h2>
                    <p class="text-center">Não esqueça de verificar sua pontuação</p>
                    <div class="selo">
                        <img src="img/icon.png" class="img-responsive">
                    </div>

                    <?php 
                    if (!empty($atividades_home)) {
                    ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $atividades_home[0]['porcentagem']; ?>%">
                                <span class="sr-only"><?php echo number_format($atividades_home[0]['porcentagem'], 1, ',', ''); ?>% <span class="ti-face-smile"></span></span>
                            </div>
                        </div>
                        <h3 class="premio text-center">
                            <?php
                                if ($atividades_home[0]['porcentagem'] < 25) {
                                    echo "Vocês precisam se esforçar um pouco mais para conseguir";
                                } else if ($atividades_home[0]['porcentagem'] > 75) {
                                    echo "Opa! Falta pouquinho para você conseguir";
                                }
                            ?> 
                            <span>
                                <?php echo $atividades_home[0]['Premiacao']['titulo']; ?>
                            </span>
                        </h3>
                    <?php 
                    } else { 
                    ?>
                        <h3 class="premio text-center">
                            Eeei! Bora fazer alguma atividade? Quem sabe você não consegue alguma recompensa bacana! ;)<br /><br />
                            <a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'ativ_alunos')) ?>" class="btn btn-default btn-lg">Atividades pra você.</a>
                        </h3>
                    <?php } ?>
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

                            <?php 
                                foreach ($ativi_ativas as $key => $ativa) {
                            ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="content">
                                            <span class="icon ti-pencil"></span>
                                            <div class="professor">
                                                <img src="<?php echo $this->webroot . "fotos/" . $ativa['User']['id'] . "/" . $ativa['User']['foto']; ?>" width="40" height="40"> Por: <?php echo $ativa['User']['nome']; ?></div>
                                            <div class="col-xs-10 col-md-10">
                                                <div class="titulo"><?php echo $ativa['Atividade']['titulo']; ?></div>
                                                <hr />
                                                Premio: <?php echo $ativa['Premiacao']['titulo'] ?>
                                            </div>
                                            <div class="col-xs-2 col-md-2">
                                                <div class="pontos">
                                                    <?php if ($ativa['Atividade']['tipo_atividade'] == 2) { ?>
                                                    <span><?php echo $ativa['Premiacao']['pontos_individuais'] ?></span>
                                                    <p>pontos</p>
                                                    <?php } else { ?>
                                                    <span>Avaliativo</span>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'atividade', $ativa['Atividade']['id'])); ?>" class="btn btn-default">Fazer atividade</a>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div id="realizadas" class="tab-pane fade">
                            <h2 class="title green">Atividades realizadas</h2>

                            <?php 
                                foreach ($ativi_realizadas as $key => $realizadas) {
                            ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="content">
                                            <span class="icon ti-pencil"></span>
                                            <div class="professor">
                                                <img src="<?php echo $this->webroot . "fotos/" . $realizadas['User']['id'] . "/" . $realizadas['User']['foto']; ?>" width="40" height="40"> Por: <?php echo $realizadas['User']['nome']; ?></div>
                                            <div class="col-xs-10 col-md-10">
                                                <div class="titulo"><?php echo $realizadas['Atividade']['titulo']; ?></div>
                                            </div>
                                            <div class="col-xs-2 col-md-2">
                                                <?php if ($realizadas['Atividade']['tipo_atividade'] == 2) { ?>
                                                    <span><?php echo $realizadas['Premiacao']['pontos_individuais'] ?></span>
                                                    <p>pontos</p>
                                                    <?php } else { ?>
                                                    <span>Avaliativo</span>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                            </div>
                                            <a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'atividade', $realizadas['Atividade']['id'])); ?>" class="btn btn-default">Fazer atividade</a>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>

                        </div>

                        <div id="recompensas" class="tab-pane fade">
                            <h2 class="title green">Minhas recompensas</h2>
                            <?php 
                            foreach ($premiacoes as $key => $premio) {
                            ?>
                            <div class="col-xs-6 col-md-4 content">
                                <img src="<?php echo $this->webroot . 'fotos/' . $premio['user_id'] . '/premios/' . $premio['id'] . '/' . $premio['foto_premio'] ?>" width="350" height="200" class="img-responsive">
                                <h3><?php echo $premio['titulo'] ?></h3>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>