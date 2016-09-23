<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Atividades</h3>
		</div>
		<div class="title_right">
			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Procurar por...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Avaliar respostas</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					
					<div class="form-group">
						<h2><?php echo $atividade['Atividade']['titulo']; ?></h2>
					</div>
					<hr />
					<div class="form-group">
						<p><?php echo $atividade['Atividade']['descricao']; ?></p>
					</div>
					<div class="form-group">
						<p>Pontuacão total: <strong><?php echo $atividade['Premiacao']['pontos_final']; ?></strong> | Pontuacão por acerto: <strong><?php echo $atividade['Premiacao']['pontos_individuais']; ?></strong></p>
					</div>
					<?php if (!empty($atividade['Atividade']['arquivo'])) { ?>
                    <div class="form-group">
                        <p>Material de apoio:</p> 
                        <span class="icon download"><a href="<?php echo $this->webroot . 'fotos/' . $atividade['User']['id'] . '/atividades/auxiliar/' . $atividade['Atividade']['id'] . '/' . $atividade['Atividade']['arquivo']; ?>" title="Arquivo de apoio" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                    </div>
                    <?php } ?>
					<hr />
					<div class="form-group">
						<h2>Respostas:</h2>
					</div>
					<?php foreach ($respUsers as $key => $resp) { ?>
						<?php echo $this->Form->create('Atividade', array('url' => array('action' => 'resposta_pontos'))) ?>
						<div class="form-group" id="resp_<?php echo $key; ?>">
							<p>Aluno: <?php echo $resp['User']['nome'] ?> | RA: <?php echo $resp['User']['ra'] ?></p>
							<p>Resposta: <?php echo $resp['RespoDissertativa']['resposta'] ?></p>
							
							<div class="form-group col-md-2">
								<p>Pontos: <input type="hidden" value="<?php echo $resp['User']['id']; ?>" name="userID_<?php echo $key; ?>" /> <input type="text" name="pontos_<?php echo $key; ?>" class="form-control" />
							</div>
							<div class="form-group col-md-12">
								<button class="btn btn-success">Enviar pontos</button>
							</div>
							 
						</div>
						<?php echo $this->Form->end(); ?>
						<hr />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>