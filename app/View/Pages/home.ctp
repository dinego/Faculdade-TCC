<script type="text/javascript">
	$(document).ready(function () {

	    $(".scroll-view").niceScroll({
	        touchbehavior: true,
	        cursorcolor: "rgba(42, 63, 84, 0.35)"
	    });

	    // [17, 74, 6, 39, 20, 85, 7]
	    //[82, 23, 66, 9, 99, 6, 2]
	    var data1 = [
	    [gd(2012, 1, 1), 17],
	    [gd(2012, 1, 2), 74],
	    [gd(2012, 1, 3), 6],
	    [gd(2012, 1, 4), 39],
	    [gd(2012, 1, 5), 20],
	    [gd(2012, 1, 6), 85],
	    [gd(2012, 1, 7), 7]
	    ];

	    var data2 = [
	    [gd(2012, 1, 1), 82],
	    [gd(2012, 1, 2), 23],
	    [gd(2012, 1, 3), 66],
	    [gd(2012, 1, 4), 9],
	    [gd(2012, 1, 5), 119],
	    [gd(2012, 1, 6), 6],
	    [gd(2012, 1, 7), 9]
	    ];
	    $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
	    data1, data2
	    ], {
	        series: {
	            lines: {
	                show: false,
	                fill: true
	            },
	            splines: {
	                show: true,
	                tension: 0.4,
	                lineWidth: 1,
	                fill: 0.4
	            },
	            points: {
	                radius: 0,
	                show: true
	            },
	            shadowSize: 2
	        },
	        grid: {
	            verticalLines: true,
	            hoverable: true,
	            clickable: true,
	            tickColor: "#d5d5d5",
	            borderWidth: 1,
	            color: '#fff'
	        },
	        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
	        xaxis: {
	            tickColor: "rgba(51, 51, 51, 0.06)",
	            mode: "time",
	            tickSize: [1, "day"],
	      //tickLength: 10,
	      axisLabel: "Date",
	      axisLabelUseCanvas: true,
	      axisLabelFontSizePixels: 12,
	      axisLabelFontFamily: 'Verdana, Arial',
	      axisLabelPadding: 10
	        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
	    },
	    yaxis: {
	        ticks: 8,
	        tickColor: "rgba(51, 51, 51, 0.06)",
	    },
	    tooltip: false

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