<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Usuários</h3>
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
					<h2>Usuários</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Foto</th>
								<th>Nome</th>
								<th>Usuário</th>
								<th>Pontuação</th>
								<th>Criado</th>
								<th>Cargo</th>
								<th>Controle</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $key => $usr) { ?>
							<tr>
								<th scope="row"><?php echo $usr['User']['id'] ?></th>
								<td><?php echo '<img src="' . $this->webroot . 'fotos/' . $usr['User']['id'] . '/' . $usr['User']['foto'] . '"	 class="img-circle" height="35">'; ?></td>	
								<td><?php echo $usr['User']['nome'] ?></td>
								<td><?php echo $usr['User']['username'] ?></td>
								<td><?php echo $usr['User']['pontos'] ?></td>

								<?php 
									$criado = date("d/m/Y H:m:s", strtotime($usr['User']['created']));
								?>

								<td><?php echo $criado ?></td>
								<td>
									<?php 

										if ($usr['User']['role'] == 'aluno') {
											echo 'Aluno';
										} else if ($usr['User']['role'] == 'prof') {
											echo 'Professor';
										} else {
											echo 'Admin';
										}
									?>
								</td>
								<td>
									<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'edit', $usr['User']['id'])) ?>" class="btn btn-primary">Editar</a>

									<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'desativar', $usr['User']['id'])) ?>" class="btn btn-default">Desativar</a>

									<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'delete', $usr['User']['id'])) ?>" class="btn btn-danger">Excluir</a>
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