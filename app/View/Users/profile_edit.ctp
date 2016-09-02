<section class="configuracoes">
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Configurações</h2>
                </div>
                <div class="col-sm-4 text-right">
                    <ul>
                        <li><span class="ti-angle-left"></span> 
                        <?php 
                            echo $this->Html->link('Voltar para dashboard', array(
                            'controller' => 'alunos', 
                            'action' => 'index'
                            )); 
                            ?>></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pad-40">
            <div class="col-sm-4">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Mudar informações</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="configuracoes.html"><span class="ti-angle-right"></span> Informações básicas</a></li>
                                <li><a href="mudarSenha.html"><span class="ti-angle-right"></span> Mudar senha</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-8">
                <form class="form-inline">
                    <div class="form-group mar-r-30">
                        <img src="<?php echo $this->webroot . 'fotos/' . $usuario['User']['id'] . '/' . $usuario['User']['foto'] ?>" width="150" height="150" class="rounded">
                    </div>
                
                    <button type="submit" class="btn btn-success">Selecionar foto</button>
      
                </form>

                <form>
                
                    <h3>Suas Informações</h3>
                    <div class="form-group">
                        <label for="nome">Seu nome</label>
                        <input type="text" class="form-control" id="nome" value="<?php echo $usuario['User']['nome'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail de acesso</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $usuario['User']['username'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="usuario">RA</label>
                        <input type="text" class="form-control" id="usuario">
                    </div>

                    <button type="submit" class="btn btn-success">Atualizar perfil</button>
                </form>
            </div>
        </div>
    </div>
</section>