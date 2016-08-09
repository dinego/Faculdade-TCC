<?php 
	echo $this->Session->flash('good');
echo $this->Session->flash('bad');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Estudei! | <?php echo $title_for_layout; ?></title>

	<!-- Bootstrap core CSS -->

	<?php echo $this->Html->css(array(
		"bootstrap.min.css",
		"../fonts/css/font-awesome.min.css",
		"animate.min.css",
		"custom.css",
		"maps/jquery-jvectormap-2.0.3.css",
		"icheck/flat/green.css",
		"floatexamples.css",
		"normalize.css",
		"ion.rangeSlider.css",
		"ion.rangeSlider.skinFlat.css"

		)); ?>

		<?php echo $this->Html->script(array('jquery.min.js', 'nprogress.js', 'notify/pnotify.core.js', 'notify/pnotify.buttons.js', 'notify/pnotify.nonblock.js')) ?>
  <!--[if lt IE 9]>
		<script src="../assets/js/ie8-responsive-file-warning.js"></script>
		<![endif]-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->


		  <script type="text/javascript">
			  $(document).ready(function () {
			  	<?php if (!empty($this->Flash->render())) { ?>

			  		new PNotify({
	                    title: 'New Thing',
	                    text: 'Just to let you know, something happened.',
	                    type: 'info'
	                });
		        <?php } ?>
		    });
		  	

		  </script>

		</head>


		<body class="nav-md">

			<div class="container body">


				<div class="main_container">

					<div class="col-md-3 left_col">
						<div class="left_col scroll-view">

							<div class="navbar nav_title" style="border: 0;">
								<a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'home')) ?>" class="site_title"><img src="<?php echo $this->webroot . 'img/logo-eduga.png'; ?>" width="60%"></a>
							</div>
							<div class="clearfix"></div>

							<!-- menu prile quick info -->
							<div class="profile">
								<div class="profile_pic">
									<?php
										if (!empty($user['foto'])) {
											echo '<img src="' . $this->webroot . 'fotos/' . $user['id'] . '/' . $user['foto'] . '" alt="..." class="img-circle profile_img">';
										} else {
											echo '<img src="' . $this->webroot . 'img/img.jpg" alt="..." class="img-circle profile_img">';
										}
									?>
								</div>
								<div class="profile_info">
									<span>Bem-vindo,</span>
									<h2><?php echo $user['nome']; ?></h2>
								</div>
							</div>
							<!-- /menu prile quick info -->

							<br />

							<!-- sidebar menu -->
							<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

								<div class="menu_section">
									<ul class="nav side-menu">

										<li><a><i class="fa fa-user"></i> Usuários <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li>
													<?php echo $this->Html->link('Gerenciar', array('controller' => 'users', 'action' => 'index')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Adicionar', array('controller' => 'users', 'action' => 'add')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Liberar Acesso', array('controller' => 'users', 'action' => 'liberar')); ?>
												</li>
											</ul>
										</li>

										<li><a><i class="fa fa-users"></i> Grupos <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li>
													<?php echo $this->Html->link('Gerenciar', array('controller' => 'grupos', 'action' => 'index')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Adicionar', array('controller' => 'grupos', 'action' => 'add')); ?>
												</li>
											</ul>
										</li>

										<li><a><i class="fa fa-pencil"></i> Atividades <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li>
													<?php echo $this->Html->link('Gerenciar', array('controller' => 'atividades', 'action' => 'index')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Adicionar atividade', array('controller' => 'atividades', 'action' => 'add')); ?>
												</li>
											</ul>
										</li>

										<li><a><i class="fa fa-star"></i> Premiações <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li>
													<?php echo $this->Html->link('Gerenciar', array('controller' => 'premiacaos', 'action' => 'index')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Adicionar premiação', array('controller' => 'premiacaos', 'action' => 'add')); ?>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- /sidebar menu -->

							<!-- /menu footer buttons -->
							<div class="sidebar-footer hidden-small">
								<a data-toggle="tooltip" data-placement="top" title="Settings">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a data-toggle="tooltip" data-placement="top" title="FullScreen">
									<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
								</a>
								<a data-toggle="tooltip" data-placement="top" title="Lock">
									<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
								</a>
								<a data-toggle="tooltip" data-placement="top" title="Logout">
									<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
								</a>
							</div>
							<!-- /menu footer buttons -->
						</div>
					</div>

					<!-- top navigation -->
					<div class="top_nav">

						<div class="nav_menu">
							<nav class="" role="navigation">
								<div class="nav toggle">
									<a id="menu_toggle"><i class="fa fa-bars"></i></a>
								</div>

								<ul class="nav navbar-nav navbar-right">
									<li class="">
										<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<?php if (!empty($user['foto'])) {
											echo '<img src="' . $this->webroot . 'fotos/' . $user['id'] . '/' . $user['foto'] . '" alt="..." height="45">';
										} else {
											echo '<img src="' . $this->webroot . 'img/img.jpg" alt="..." height="45">';
										} ?><?php echo $user['nome']; ?>
											<span class=" fa fa-angle-down"></span>
										</a>
										<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
											<li><a href="javascript:;">  Perfil</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="badge bg-red pull-right">2</span>
													<span>Medalhas</span>
												</a>
											</li>
											<li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')) ?>"><i class="fa fa-sign-out pull-right"></i> Sair</a>
											</li>
										</ul>
									</li>

									<li role="presentation" class="dropdown">
										<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
											<i class="fa fa-envelope-o"></i>
											<span class="badge bg-green">1</span>
										</a>
										<ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
											<li>
												<a>
													<span class="image">
														<i class="fa fa-graduation-cap"></i>
													</span>
													<span>
														<span>Estudei!</span>
														<span class="time">3 min atrás</span>
													</span>
													<span class="message">
														Nova medalha desbloqueada!<br />
														Agora você é um novato!
													</span>
												</a>
											</li>
											<li>
												<div class="text-center">
													<a href="inbox.html">
														<strong>Ver todos os avisos</strong>
														<i class="fa fa-angle-right"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>

								</ul>
							</nav>
						</div>

					</div>
					<!-- /top navigation -->


					<!-- page content -->
					<div class="right_col" role="main">
						<?php echo $this->Flash->render(); ?>
						<?php echo $this->fetch('content'); ?>

						<!-- top tiles -->
						
					</div>

					<!-- footer content -->

					<footer>
						<div class="copyright-info">
							<p class="pull-right">Estudei! - Todos os direitos reservados | <?php echo date('Y') ?>  
							</p>
						</div>
						<div class="clearfix"></div>
					</footer>
					<!-- /footer content -->
				</div>
				<!-- /page content -->

			</div>

		</div>

		<div id="custom_notifications" class="custom-notifications dsp_none">
			<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
			</ul>
			<div class="clearfix"></div>
			<div id="notif-group" class="tabbed_notifications"></div>
		</div>

		<?php 
		echo $this->Html->script(
			array(
				"bootstrap.min.js",
				"gauge/gauge.min.js",
				"gauge/gauge_demo.js",
				"progressbar/bootstrap-progressbar.min.js",
				"nicescroll/jquery.nicescroll.min.js",
				"icheck/icheck.min.js",
				"moment/moment.min.js",
				"datepicker/daterangepicker.js",
				"chartjs/chart.min.js",
				
				"flot/jquery.flot.js",
				"flot/jquery.flot.pie.js",
				"flot/jquery.flot.orderBars.js",
				"flot/jquery.flot.time.min.js",
				"flot/date.js",
				"flot/jquery.flot.spline.js",
				"flot/jquery.flot.stack.js",
				"flot/curvedLines.js",
				"flot/jquery.flot.resize.js",

				"maps/jquery-jvectormap-2.0.3.min.js",
				"maps/gdp-data.js",
				"maps/jquery-jvectormap-world-mill-en.js",
				"maps/jquery-jvectormap-us-aea-en.js",
				"skycons/skycons.min.js",
				"custom.js",
				"ion_range/ion.rangeSlider.min.js"
				)
			)
		?>
</body>

</html>
