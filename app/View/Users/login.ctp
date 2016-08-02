<div id="login" class="animate form">
	<section class="login_content">
				
		<?php echo $this->Flash->render('auth'); ?>
		<?php echo $this->Form->create('User');?>
			<h1>Login Form</h1>
			<div>
				<?php echo $this->Form->input("username", array('class' => 'form-control', 'placeholder' => 'Usuário (email)', 'required' => 'required', 'label' => false)) ?>
			</div>
			<div>
				<?php echo $this->Form->input("password", array('class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required', 'label' => false))  ?>
			</div>
			<div>
				<?php echo $this->Form->input('Fazer Login', array('class' => 'btn btn-default submit', 'type' => 'submit', 'label' => false)) ?>
				<a class="reset_pass" href="#">Lost your password?</a>
			</div>
			<div class="clearfix"></div>
			<div class="separator">

				<p class="change_link">New to site?
					<a href="#toregister" class="to_register"> Create Account </a>
				</p>
				<div class="clearfix"></div>
				<br />
				<div>
					<h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

					<p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
				</div>
			</div>
		<?php echo $this->Form->end();?>
		<!-- form -->
	</section>
	<!-- content -->
</div>