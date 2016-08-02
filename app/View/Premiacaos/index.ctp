<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Premiações</h3>
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
					<h2>Premiações</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Foto</th>
								<th>Titulo</th>
								<th>Descricao</th>
								<th>Pontos para premio</th>
								<th>Pontuação requirida</th>
								<th>Controle</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($premiacaos as $key => $premiacao) { ?>
							<tr>
								<th scope="row"><?php echo $premiacao['Premiacao']['id'] ?></th>
								<td><?php echo '<img src="' . $this->webroot . 'fotos/' . $premiacao['Premiacao']['user_id'] . '/premios/' . $premiacao['Premiacao']['id'] . '/' . $premiacao['Premiacao']['foto_premio'] . '"	 class="img-circle" height="35">'; ?></td>	
								<td><?php echo $premiacao['Premiacao']['titulo'] ?></td>
								<td><?php echo $premiacao['Premiacao']['descricao'] ?></td>
								<td><?php echo $premiacao['Premiacao']['pontos_individuais'] ?></td>
								<td><?php echo $premiacao['Premiacao']['pontos_final'] ?></td>
								<td>
									<a href="<?php echo $this->Html->url(array('controller' => 'premiacaos', 'action' => 'edit', $premiacao['Premiacao']['id'])) ?>" class="btn btn-primary">Editar</a>

									<a href="<?php echo $this->Html->url(array('controller' => 'premiacaos', 'action' => 'desativar', $premiacao['Premiacao']['id'])) ?>" class="btn btn-default">Desativar</a>

									<a href="<?php echo $this->Html->url(array('controller' => 'premiacaos', 'action' => 'excluir', $premiacao['Premiacao']['id'])) ?>" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>

					<?php
						echo $this->Paginator->prev('« Mais novos', null, null, array('class' => 'desabilitado'));
						echo $this->Paginator->numbers(); 
						echo $this->Paginator->next('Mais antigos »', null, null, array('class' => 'desabilitado'));
					?>

				</div>
			</div>
		</div>
	</div>
</div>