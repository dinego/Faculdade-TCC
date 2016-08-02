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
				"animate.min.css",
				"custom.css",
				"icheck/flat/green.css"
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

<body style="background:#F7F7F7;">

	<div class="">
		<a class="hiddenanchor" id="toregister"></a>
		<a class="hiddenanchor" id="tologin"></a>

		<div id="wrapper">
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
	</div>

</body>

</html>
