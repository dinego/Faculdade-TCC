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

		<?php echo $this->Html->script(array('jquery.min.js', 'nprogress.js')) ?>

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

					<div class="col-md-3 left_col">
						<div class="left_col scroll-view">

							<div class="navbar nav_title" style="border: 0;">
								<a href="index.html" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Estudei!</span></a>
							</div>
							<div class="clearfix"></div>

							<!-- menu prile quick info -->
							<div class="profile">
								<div class="profile_pic">
									<?php
										if (!empty($user['foto'])) {
											echo '<img src="' . $this->webroot . 'fotos/' . $user['id'] . '/' . $user['foto'] . '.jpg" alt="..." class="img-circle profile_img">';
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
									<h3>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</h3>
									<ul class="nav side-menu">

										<li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li>
													<?php echo $this->Html->link('Pesquisar', array('controller' => 'users', 'action' => 'index')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Gerenciar', array('controller' => 'users', 'action' => 'index')); ?>
												</li>
												<li>
													<?php echo $this->Html->link('Adicionar', array('controller' => 'users', 'action' => 'add')); ?>
												</li>
											</ul>
										</li>

										<li><a><i class="fa fa-pencil"></i> Atividades <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li>
													<?php echo $this->Html->link('Pesquisar', array('controller' => 'atividades', 'action' => 'index')); ?>
												</li>
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

										<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="index.html">Dashboard</a>
												</li>
												<li><a href="index2.html">Dashboard2</a>
												</li>
												<li><a href="index3.html">Dashboard3</a>
												</li>
											</ul>
										</li>
										<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="form.html">General Form</a>
												</li>
												<li><a href="form_advanced.html">Advanced Components</a>
												</li>
												<li><a href="form_validation.html">Form Validation</a>
												</li>
												<li><a href="form_wizards.html">Form Wizard</a>
												</li>
												<li><a href="form_upload.html">Form Upload</a>
												</li>
												<li><a href="form_buttons.html">Form Buttons</a>
												</li>
											</ul>
										</li>
										<li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="general_elements.html">General Elements</a>
												</li>
												<li><a href="media_gallery.html">Media Gallery</a>
												</li>
												<li><a href="typography.html">Typography</a>
												</li>
												<li><a href="icons.html">Icons</a>
												</li>
												<li><a href="glyphicons.html">Glyphicons</a>
												</li>
												<li><a href="widgets.html">Widgets</a>
												</li>
												<li><a href="invoice.html">Invoice</a>
												</li>
												<li><a href="inbox.html">Inbox</a>
												</li>
												<li><a href="calender.html">Calender</a>
												</li>
											</ul>
										</li>
										<li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="tables.html">Tables</a>
												</li>
												<li><a href="tables_dynamic.html">Table Dynamic</a>
												</li>
											</ul>
										</li>
										<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="chartjs.html">Chart JS</a>
												</li>
												<li><a href="chartjs2.html">Chart JS2</a>
												</li>
												<li><a href="morisjs.html">Moris JS</a>
												</li>
												<li><a href="echarts.html">ECharts </a>
												</li>
												<li><a href="other_charts.html">Other Charts </a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="menu_section">
									<h3>Live On</h3>
									<ul class="nav side-menu">
										<li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="e_commerce.html">E-commerce</a>
												</li>
												<li><a href="projects.html">Projects</a>
												</li>
												<li><a href="project_detail.html">Project Detail</a>
												</li>
												<li><a href="contacts.html">Contacts</a>
												</li>
												<li><a href="profile.html">Profile</a>
												</li>
											</ul>
										</li>
										<li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="page_404.html">404 Error</a>
												</li>
												<li><a href="page_500.html">500 Error</a>
												</li>
												<li><a href="plain_page.html">Plain Page</a>
												</li>
												<li><a href="login.html">Login Page</a>
												</li>
												<li><a href="pricing_tables.html">Pricing Tables</a>
												</li>

											</ul>
										</li>
										<li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
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
											echo '<img src="' . $this->webroot . 'fotos/' . $user['id'] . '/' . $user['foto'] . '.jpg" alt="..." height="45">';
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
							<p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
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
