<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $this->webroot . 'icon.png' ?>">

    <title>Eduga | <?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->css(
			array(
				"bootstrap.min.css",
				"../fonts/css/font-awesome.min.css",
				"style.css",
				"themify-icons.css",
				"ie10-viewport-bug-workaround.css"
				)
		); 
	?>

	<?php echo $this->Html->script(array("jquery.min.js", "bootstrap.min", "ie10-viewport-bug-workaround")); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<body>

	<nav class="navbar navbar-default navbar-fixed-top home">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $this->webroot . 'img/logo-eduga.png' ?>" alt="Eduga" title="Eduga" class="img-responsive nopadding">
                </a>
            </div>
            <div class="pull-right">
                <a href="" class="login" data-toggle="modal" data-target="#entrar">Entrar</a>
            </div>
        </div>
    </nav>

    <section class="homeSignup">
        <div class="container">
            <div class="row">
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <p>Copyright © 2016</p>
                </div>
                <div class="col-xs-6 col-md-6 text-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- modal entrar -->
    <div class="modal fade" id="entrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <h2 class="pull-left">Preencha os campos abaixo para entrar</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $this->Form->create('User');?>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <?php echo $this->Form->input("username", array('class' => 'form-control', 'placeholder' => 'Usuário (email)', 'required' => 'required', 'label' => false, 'div' => false)) ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <?php echo $this->Form->input("password", array('class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required', 'label' => false, 'div' => false))  ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <?php echo $this->Form->input('Fazer Login', array('class' => 'btn btn-secondary', 'type' => 'submit', 'label' => false)) ?>
                            </div>
                        </div>

                   <?php echo $this->Form->end();?>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->

</body>

</html>
