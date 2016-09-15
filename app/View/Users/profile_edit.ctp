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
            
            <div class="col-sm-8">
                <div class="form-group mar-r-30">
                <?php 
                    if (!empty($usuario['User']['foto'])) {
                ?>
                    <img src="<?php echo $this->webroot . 'fotos/' . $usuario['User']['id'] . '/' . $usuario['User']['foto'] ?>" width="150" height="150" class="rounded">
                <?php } else { ?>
                    <img src="http://fakeimg.pl/120x120/?text=SEMFOTO" class="rounded">
                <?php } ?>
                </div>      
                

                <?php echo $this->Form->create('User', array("enctype" => "multipart/form-data", 'url' => 'profile_edit')); ?>
                
                    <h3>Suas Informações</h3>
                    <p>Para visualizar as mudanças feitas aqui, faça logout e entre novamente.</p>
                    <hr />
                    <div class="form-group">
                        <?php echo $this->Form->input('foto_user', array("class" => "form-control", "label" => "Selecione outra foto para alterar sua foto de perfil", 'type' => 'file')); ?>
                    </div>
                    <div class="form-group">
                        <?php 
                        echo $this->Form->input('id', array('type' => 'hidden'));
                        echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Seu nome')); 
                        ?>

                    </div>

                    <div class="form-group">
                        <?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'E-mail de acesso')); ?>
                    </div>

                    <div class="form-group">
                        <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Senha')); ?>
                    </div>

                    <div class="form-group">
                        <label for="usuario">RA</label>
                        <input type="text" class="form-control" id="usuario" value="<?php echo $usuario['User']['ra'] ?>" disabled>
                    </div>

                    <button type="submit" class="btn btn-success">Atualizar perfil</button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>