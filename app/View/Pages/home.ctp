<script type="text/javascript">
	$(document).ready(function () {

	    $(".scroll-view").niceScroll({
	        touchbehavior: true,
	        cursorcolor: "rgba(42, 63, 84, 0.35)"
	    });
	});
	
</script>

<div class="row tile_count">
	<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-user"></i> Total de Pontos</span>
			<div class="count"><?php echo $user['pontos']; ?></div>
			<span class="count_bottom"><i class="green">10% </i> Completo</span>
		</div>
	</div>
	<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-flag"></i> Concluídas</span>
			<div class="count">4</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> Melhoria</span>
		</div>
	</div>
	<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-user"></i> Ativas</span>
			<div class="count green">233</div>
			<span class="count_bottom"><i class="fa fa-gear"></i> <?php echo $this->Html->link('Gerenciar', array('controller' => 'atividades', 'action' => 'index')) ?></span>
		</div>
	</div>
	<div class="animated flipInY col-md-3 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-user"></i> Total de atividades</span>
			<div class="count">4,567</div>
			<span class="count_bottom"><i class="fa fa-gear"></i> <?php echo $this->Html->link('Gerenciar', array('controller' => 'atividades', 'action' => 'index')) ?></span>
		</div>
	</div>

</div>
<!-- /top tiles -->

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Atividades pra você</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="dashboard-widget-content">

					<ul class="list-unstyled timeline widget">
						<li>
							<div class="block">
								<div class="block_content">
									<h2 class="title">
										<a>Jogo das tribos</a>
									</h2>
									<div class="byline">
										<span>13 horas atrás</span> por: <a>Sergio Antonello</a>
									</div>
									<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <?php echo $this->Html->link('Saiba mais', array('controller' => 'atividades', 'action' => 'ver')); ?>
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="block">
								<div class="block_content">
									<h2 class="title">
										<a>Jogo das tribos</a>
									</h2>
									<div class="byline">
										<span>13 horas atrás</span> por: <a>Sergio Antonello</a>
									</div>
									<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <?php echo $this->Html->link('Saiba mais', array('controller' => 'atividades', 'action' => 'ver')); ?>
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="block">
								<div class="block_content">
									<h2 class="title">
										<a>Jogo das tribos</a>
									</h2>
									<div class="byline">
										<span>13 horas atrás</span> por: <a>Sergio Antonello</a>
									</div>
									<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <?php echo $this->Html->link('Saiba mais', array('controller' => 'atividades', 'action' => 'ver')); ?>
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="block">
								<div class="block_content">
									<h2 class="title">
										<a>Jogo das tribos</a>
									</h2>
									<div class="byline">
										<span>13 horas atrás</span> por: <a>Sergio Antonello</a>
									</div>
									<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <?php echo $this->Html->link('Saiba mais', array('controller' => 'atividades', 'action' => 'ver')); ?>
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="block">
								<div class="block_content">
									<h2 class="title">
										<a>Jogo das tribos</a>
									</h2>
									<div class="byline">
										<span>13 horas atrás</span> por: <a>Sergio Antonello</a>
									</div>
									<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <?php echo $this->Html->link('Saiba mais', array('controller' => 'atividades', 'action' => 'ver')); ?>
									</p>
								</div>
							</div>
						</li>
					</ul>
					<?php echo $this->Html->link('Ver todas as atividades pra mim', array('controller' => 'atividades', 'action' => 'index'), array('class' => 'btn btn-primary')); ?>
				</div>
			</div>
		</div>
	</div>

</div>