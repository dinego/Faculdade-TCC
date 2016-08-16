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
            <div class="col-sm-3 nopadding">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Menu de atividades</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <?php 
                                    foreach ($atividades as $key => $ativi) {
                                ?>
                                    <li><a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'resp_ativi', $ativi['id'])); ?>"><span class="ti-angle-right"></span> <?php echo $ativi['titulo']; ?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">
                    <div class="row">
                       <!-- antes de clicar numa atividade -->
                        <div class="col-sm-12">
                            <h2 class="text-center">Selecione uma atividade ao lado para começar!</h2>
                        </div>
                        
                        <!-- atividade selecionada -->
                        <div class="col-sm-7">
                            <div class="data"><span class="ti-calendar"></span> Faltam 20 dias para encerrar</div>
                        </div>
                        <div class="col-sm-5 text-right">
                            <div class="pontos">40 pontos</div>
                        </div>
                        <div class="col-sm-12">
                            <div class="titulo">Lorem ipsum dolor sit amet</div>
                            <div class="professor">Postado por: Sérgio Luis Antonello</div>
                            <div class="intro"><strong>Exercício:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptates nam delectus voluptatum animi quod facilis aliquam ducimus, praesentium, reiciendis ipsam, libero voluptatem blanditiis, labore quasi aliquid cupiditate tempore pariatur!</div>
                            <div class="apoio">
                                <p>Material de apoio:</p> 
                                <span class="icon pdf"><a href="" title="Arquivo PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></span>
                                <span class="icon word"><a href="" title="Arquivo Word"><i class="fa fa-file-word-o" aria-hidden="true"></i></a></span>
                                <span class="icon powerpoint"><a href="" title="Arquivo PowerPoint"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i></a></span>
                            </div>
                            
                            <form>
                                <div class="form-group">
                                    <label for="pergunta1">Pergunta1</label>
                                    <input type="text" class="form-control" id="pergunta1">
                                </div>
                                
                                <div class="form-group">
                                    <label for="pergunta1">Pergunta1</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pergunta1">Pergunta1</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pergunta1">Pergunta1</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Responder <span class="ti-check"></span></button>
                            </form>
                            
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