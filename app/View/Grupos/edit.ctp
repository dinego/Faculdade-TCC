<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
	function addSelected(){
		return !$('#todos option:selected').remove().appendTo('#gruposAcesso');
	}
	function addTodos(){
		return !$('#todos option').remove().appendTo('#gruposAcesso');
	}
	function removeSelected(){
		return !$('#gruposAcesso option:selected').remove().appendTo('#todos');
	}
	function removeTodos(){
		return !$('#gruposAcesso option').remove().appendTo('#todos');
	}
	function addCSelected(){
		return !$('#cfops option:selected').remove().appendTo('#ignorar');
	}
	function addCTodos(){
		return !$('#cfops option').remove().appendTo('#ignorar');
	}
	function removeCSelected(){
		return !$('#ignorar option:selected').remove().appendTo('#cfops');
	}
	function removeCTodos(){
		return !$('#ignorar option').remove().appendTo('#cfops');
	}
</script>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Grupos</h3>
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
					<h2>Editar Grupo</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Grupo', array("data-parsley-validate" => null, "class" => "form-horizontal form-label-left", "enctype" => "multipart/form-data", 'onSubmit' => "$('#gruposAcesso option').prop('selected', 'selected');")); ?>


						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Nome do Grupo <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('nome', array("class" => "col-md-6 col-xs-12 form-control", "label" => false, "value" => $grupoAtual['Grupo']['nome'])); ?>
								<?php echo $this->Form->input('id', array("type" => "hidden", "value" => $grupoAtual['Grupo']['id'])); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descrição <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->Form->input('descricao', array('class' => 'form-control ckeditor', 'id' => 'ckeditor', 'label' => false, "value" => $grupoAtual['Grupo']['descricao'])) ?>
							</div>
						</div>

						<hr />

						<div class="col-md-4 form-group">
							<select id="todos" multiple size="10" class="form-control">
								<?php

									$i = 0;
									foreach ($inativos as $aluno) {
										$i++;
								?>
									<option value="<?php echo $aluno['User']['id'] ?>"><?php echo $aluno['User']['ra'] . ' - ' . $aluno['User']['nome'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-3 form-group">
								<button class="btn form-control" onClick="addSelected(); return false;">Adicionar >></button>
								<button class="btn form-control" onClick="addTodos(); return false;">Adicionar Todos >></button>
								<button class="btn form-control" onClick="removeSelected(); return false;">Remover <<</button>
								<button class="btn form-control" onClick="removeTodos(); return false;">Remover Todos <<</button>
						</div>
						<div class="col-md-4 form-group">
							<select id="gruposAcesso" name="data[Grupo][alunos][]" multiple size="10" class="form-control">
								<?php

									$i = 0;
									foreach ($ativos as $aluno2) {
										$i++;
								?>
									<option value="<?php echo $aluno2['User']['id'] ?>"><?php echo $aluno2['User']['ra'].' - '.$aluno2['User']['nome'] ?></option>
								<?php } ?>
							</select>
						</div>

						<?php //echo $this->Form->input('alunos', array('id' => 'gruposAcesso','type' => 'select', 'multiple' => true, 'size' => '10', 'options' => '', 'label' => '', 'class' => 'form-control', 'div' => array('class' => 'form-group col-md-4'))); ?>


						<!--<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
							</div>
						</div>-->
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button onclick="history.back(-1)" class="btn btn-primary">Cancelar</button>
								<button type="submit" class="btn btn-success">Cadastrar grupo</button>
							</div>
						</div>

					<?php echo $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</div>