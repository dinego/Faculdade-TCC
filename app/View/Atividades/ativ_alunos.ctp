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
                                    <li><a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'atividade', $ativi['id'])); ?>"><span class="ti-angle-right"></span> <?php echo $ativi['titulo']; ?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                
            </div>
        </div>
    </div>
</section>