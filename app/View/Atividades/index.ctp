<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
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
					<h2>Atividades</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Titulo</th>
								<th>Foto Premio</th>
								<th>Premiação</th>
								<th>Pontos</th>
								<th>Criado</th>
								<th>Controle</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($atividades as $key => $atividade) { ?>
							<tr>
								<td scope="row"><?php echo $atividade['Atividade']['id'] ?></td>
								<td>
									<?php echo $atividade['Atividade']['titulo']; ?>
								</td>
								<td>
									<?php echo '<img src="' . $this->webroot . 'fotos/' . $atividade['User']['id'] . '/premios/' . $atividade['Premiacao']['id'] . '/' . $atividade['Premiacao']['foto_premio'] . '"	 class="img-circle" height="35">'; ?>
								</td>
								<td>
									<?php echo $atividade['Premiacao']['titulo']; ?>
								</td>
								<td>
									<?php echo $atividade['Premiacao']['pontos']; ?>
								</td>
								<td>
									<?php 
										$criado = date("d/m/Y H:m:s", strtotime($atividade['Atividade']['created']));
									?>
								</td>
								<td>
									<a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'edit', $atividade['Atividade']['id'])) ?>" class="btn btn-primary">Editar</a>

									<a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'desativar', $atividade['Atividade']['id'])) ?>" class="btn btn-default">Desativar</a>

									<a href="<?php echo $this->Html->url(array('controller' => 'atividades', 'action' => 'delete', $atividade['Atividade']['id'])) ?>" class="btn btn-danger">Excluir</a>
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