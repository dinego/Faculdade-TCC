<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Estudei! | Área restrita! SAAAAAAAAAAAAI!</title>

  <!-- Bootstrap core CSS -->

  <?php 
  echo $this->Html->css(array(
      'bootstrap.min.css',
      '../fonts/css/font-awesome.min.css',
      'animate.min.css',
      'custom.css',
      'icheck/flat/green.css'
      ));

  echo $this->Html->script('js/jquery.min.js');
  ?>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

      </head>


      <body class="nav-md">

        <div class="container body">

            <div class="main_container">
            <?php echo $this->fetch('content') ?>
            </div>
       
        </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <?php 

    echo $this->Html->script(array(
      'bootstrap.min.js',
      'progressbar/bootstrap-progressbar.min.js',
      'nicescroll/jquery.nicescroll.min.js',
      'icheck/icheck.min.js',
      'custom.js',
      'pace/pace.min.js'
      ))
      ?>
</body>

</html>
