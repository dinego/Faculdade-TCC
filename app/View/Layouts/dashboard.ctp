<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $this->webroot; ?>favicon.ico">

    <title>Eduga</title>

    <?php echo $this->Html->css(
        array(
            "bootstrap.min.css",
            "../fonts/css/font-awesome.min.css",
            "style.css",
            "themify-icons.css",
            "ie10-viewport-bug-workaround.css"
            )); ?>

    <?php echo $this->Html->script(array('jquery.min.js', 'bootstrap.min.js', 'ie10-viewport-bug-workaround.js')) ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'alunos', 'action' => 'index')) ?>">
                <?php echo $this->Html->image('logo-eduga.png', array('alt' => 'Eduga', 'title' => 'Eduga')); ?>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'alunos', 'action' => 'index')) ?>"><span class="ti-home"></span> Dashboard</a></li>
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'ativ_alunos')) ?>"><span class="ti-pencil-alt"></span> Atividades</a></li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php
                                if (!empty($user['foto'])) {
                                    echo '<img src="' . $this->webroot . 'fotos/' . $user['id'] . '/' . $user['foto'] . '" alt="..." class="img-circle" width="35" height="35">';
                                } else {
                                    echo '<img src="' . $this->webroot . 'img/img.jpg" alt="..." class="img-circle profile_img">';
                                }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="perfil.html">Perfil</a></li>
                            <li><a href="configuracoes.html">Configurações</a></li>
                            <li><a href="logout">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $this->Flash->render(); ?>
    <?php echo $this->fetch('content'); ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <p>Copyright © 2016</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    
</body>

</html>
