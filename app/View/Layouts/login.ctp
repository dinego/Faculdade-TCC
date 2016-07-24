<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php echo $this->Html->charset(); ?>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentallela Alela! | <?php echo $title_for_layout; ?></title>

	<!-- Bootstrap core CSS -->

	<?php echo $this->Html->css(
			array(
				"bootstrap.min.css",
				"../fonts/css/font-awesome.min.css",
				"font-awesome.min.css",
				"themify-icons.css",
				"ie10-viewport-bug-workaround.css",
				"style.css",
				)
		); 
	?>

	<?php echo $this->Html->script(array("jquery.min.js")); ?>

  <!--[if lt IE 9]>
		<script src="../assets/js/ie8-responsive-file-warning.js"></script>
		<![endif]-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->

</head>

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
                <?php echo $this->Html->image('logo-eduga.png', array('alt' => 'Eduga', 'title' => 'Eduga', 'class' => 'img-responsive nopadding')); ?>
                </a>
            </div>
        </div>
    </nav>

    <section class="homeSignup">
        <div class="container">
            <?php 
            	echo $this->Flash->render();
            	echo $this->fetch('content');
            ?>
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
                    <form>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="senha" placeholder="Senha">
                            </div>
                        </div>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Lembrar-me
                            </label>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-secondary">Entrar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>

