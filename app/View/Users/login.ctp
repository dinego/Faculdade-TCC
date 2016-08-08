
<div class="intro col-xs-12 col-md-6">
    <h1>Você pode aprender qualquer coisa</h1>
    <small>Acreditamos numa educação de qualidade e divertida.</small>
</div>
<div class="form col-xs-12 col-md-6">
    <h2>Cadastre-se gratuitamente</h2>

    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Form->create('User', array('url' => 'cadastro'));?>
        <div class="form-group row">
            <div class="col-sm-12">
                <?php echo $this->Form->input("username", array('class' => 'form-control', 'placeholder' => 'Usuário (email)', 'required' => 'required', 'label' => false, 'div' => false, 'autocomplete' => 'off')) ?>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <?php echo $this->Form->input("nome", array('class' => 'form-control', 'placeholder' => 'Nome Completo', 'required' => 'required', 'label' => false, 'div' => false, 'autocomplete' => 'off')) ?>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <?php echo $this->Form->input("ra", array('class' => 'form-control', 'placeholder' => 'Seu RA', 'required' => 'required', 'label' => false, 'div' => false, 'autocomplete' => 'off'))  ?>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <?php echo $this->Form->input("password", array('class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required', 'label' => false, 'div' => false, 'autocomplete' => 'off'))  ?>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <?php echo $this->Form->input('Solicitar Cadastro', array('class' => 'btn btn-secondary', 'type' => 'submit', 'label' => false)) ?>
            </div>
        </div>

        <!--<div class="form-group row">
            <div class="col-sm-12">
                <a class="button btn-fb">
                    <img src="img/facebook.svg">Logar com Facebook
                </a>
            </div>
        </div>-->
    <?php echo $this->Form->end();?>
</div>