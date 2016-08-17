<section class="atividade">
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Atividades</h2>
                </div>
                <div class="col-sm-4 text-right">
                    <ul>
                        <li><span class="ti-angle-left"></span> <a href="<?php echo $this->Html->url(array('controller' => 'alunos', 'action' => 'index')) ?>">Voltar para dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-sm-12">
                <div class="content">
                    <div class="row">
                       <!-- antes de clicar numa atividade -->
                        <div class="col-sm-12">
                            <h2 class="text-center">Selecione uma atividade ao lado para começar!</h2>
                        </div>
                        
                        <!-- atividade selecionada -->
                        <div class="col-sm-7">
                            <div class="data"><span class="ti-calendar"></span>
                            <?php 
                                @$data1 = date('Y-m-d H:m:s', $atividade['Atividade']['fim']);
                                $data11 = new DateTime($data1);
                                $data2 = date("Y-m-d");
                                $data22 = new DateTime($data2);


                                $intervalo = $data22->diff($data11);
                            ?>
                            Faltam  <?php echo $intervalo->m . " Meses e " . $intervalo->d; ?> dias para encerrar</div>
                        </div>
                        <div class="col-sm-5 text-right">
                            <div class="pontos">Pontos de recompensa: <?php echo $atividade['Premiacao']['pontos_individuais'] ?></div>
                        </div>
                        <div class="col-sm-12">

                            <div class="titulo"><?php echo $atividade['Atividade']['titulo'] ?></div>
                            <div class="professor">Postado por: <?php echo $atividade['User']['nome'] ?></div>
                            <div class="intro"><strong>Descrição:</strong> <?php echo $atividade['Atividade']['descricao'] ?></div>
                            <?php if (!empty($atividade['Atividade']['arquivo'])) { ?>
                            <div class="apoio">
                                <p>Material de apoio:</p> 
                                <span class="icon download"><a href="<?php echo $this->webroot . 'fotos/' . $atividade['User']['id'] . '/atividades/auxiliar/' . $atividade['Atividade']['id'] . '/' . $atividade['Atividade']['arquivo']; ?>" title="Arquivo de apoio" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                            </div>
                            <?php } 

                                if ($atividade['Atividade']['tipo_atividade'] == 2) {
                                    $this->Form->create('RespAlternativas');
                                    foreach ($atividade['Alternativa'] as $key => $alternativa) {
                                    
                            ?>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="data[Alternativa][alternativa]" id="data[Alternativa][alternativa][<?php echo $key ?>]" value="<?php echo $alternativa['id'] ?>">
                                                    <?php echo $alternativa["alternativa"] ?>
                                                </label>
                                            </div>
                            <?php 
                                    }
                            ?>
                            <button type="submit" class="btn btn-success">Responder <span class="ti-check"></span></button>
                            <?php
                                }

                            ?>
                            
                            <!-- resposta do form -->
                            <div class="resposta">
                                <div class="alert alert-success" role="alert">
                                    Parabéns! Você respondeu a atividade XXXXXXXXXXX! <br>
                                </div>
                                <div class="pontuacao">
                                    <span class="ti-thumb-up"></span><strong> Total de acertos:</strong> 20<br>
                                    <span class="ti-thumb-down"></span> <strong>Total de erros:</strong> 5<br>
                                    <div class="pontosGanhos">Pontos ganhos: <strong>35</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>