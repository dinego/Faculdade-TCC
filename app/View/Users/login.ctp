<div class="row">
    <div class="intro col-xs-12 col-md-6">
        <h1>Você pode aprender qualquer coisa</h1>
        <small>Acreditamos numa educação de qualidade e divertida.</small>
    </div>
    <div class="form col-xs-12 col-md-6">
        <h2>Cadastre-se gratuitamente</h2>
        <?php echo $this->Flash->render('auth'); ?>
		<?php echo $this->Form->create('User');?>
            <div class="form-group row">
                <div class="col-sm-12">
                	<?php echo $this->Form->input("username", array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Usuário (e-mail)', 'required' => 'required', 'label' => false)) ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <?php echo $this->Form->input("password", array('class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required', 'label' => false))  ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-secondary">Fazer Login</button>
                </div>
            </div>
        <?php echo $this->Form->end() ?>
    </div>
</div>