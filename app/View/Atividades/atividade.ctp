
<section class="atividade container">
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Atividades</h2>
                </div>
                <div class="col-sm-5 text-right" style="overflow:hidden">
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
                            <div class="pontos">Acerto: 
                            <?php
                                if ($atividade['Atividade']['tipo_atividade'] == 1) {
                                    echo "Pontos Avaliativos (não definido)";
                                } else {
                                    echo $atividade['Premiacao']['pontos_individuais'] . "Pontos";                           
                                }
                            ?></div>
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

                                function shuffle_assoc($list) { 
                                    if (!is_array($list)) return $list; 

                                    $keys = array_keys($list); 
                                    shuffle($keys); 
                                    $random = array(); 
                                    foreach ($keys as $key) { 
                                        $random[$key] = $list[$key]; 
                                    }
                                    return $random; 
                                } 

                                if ($atividade['Atividade']['tipo_atividade'] == 2) { 
                                    
                                    echo $this->Form->create('RespoAlternativas');
                                    ?>

                                    <ol type="A">
                                    <?php

                                    $alter_mixed = array();
                                    $atividade['Alternativa'] = shuffle_assoc($atividade['Alternativa']);
                                    foreach ($atividade['Alternativa'] as $key => $alternativa) {
                                    
                            ?>
                                        <li>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="data[Alternativa][alternativa]" id="data[Alternativa][alternativa][<?php echo $key ?>]" value="<?php echo $alternativa['id'] ?>">
                                                    <?php echo $alternativa["alternativa"] ?>
                                                </label>
                                            </div>
                                        </li>
                            <?php   } ?>
                                    </ol>
                            <?php
                                } else {
                                    echo $this->Form->create('RespoDissertativa');
                                    echo $this->Form->input('RespoDissertativa.resposta', array('type' => 'textarea', 'class' => 'form-control', 'div' => array('class' => 'form-group')));

                                    if (!empty($prove)) { $finalizada = true; }
                                }
                                if ($finalizada == false) {
                            ?>
                                    <input type="submit" class="btn btn-success" value="Responder Atividade" />
                            <?php
                                } else {
                            ?>
                                    <input type="submit" class="btn btn-success disabled" disabled="disabled" value="Você finalizou essa atividade" />
                            <?php
                                }

                                echo $this->Form->end(); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>