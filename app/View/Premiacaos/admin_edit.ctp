<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Premiação</h3>
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
					<h2>Editar Premiação</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Premiacao', array("data-parsley-validate" => null, "class" => "form-horizontal form-label-left", "enctype" => "multipart/form-data")); ?>


						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Título <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
								<?php echo $this->Form->input('titulo', array('class' => 'form-control', 'label' => false)) ?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descrição (Atividade) <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->Form->input('descricao', array('class' => 'form-control', 'type' => 'textarea', 'label' => false)) ?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Foto da premiação<br />
							(Deixe em branco para não editar)
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('foto_premio', array("class" => "col-md-7 col-xs-12", "label" => false, 'type' => 'file')); ?>
							</div>
						</div>
						<hr />

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Pontos individuais <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="Quantos pontos irá para o usuário quando a atividade for concluída por ele."></span> <span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<?php echo $this->Form->input('pontos_individuais', array('label' => false, 'class' => 'form-control')) ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Pontos para conquistar <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="Pontos para o grupo alcançar para ganhar a premiação final."></span> <span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<?php echo $this->Form->input('pontos_final', array('label' => false, 'class' => 'form-control')) ?>
							</div>
						</div>


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
								<button type="submit" class="btn btn-success">Salvar atividade</button>
							</div>
						</div>

					<?php echo $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
    $(document).ready(function() {
      $('#reservation').daterangepicker(null, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });

    $(function() {
      	$("#pontuacao").ionRangeSlider({
	        min: 1,
	        max: 1000,
	        grid: true
      	});
  	});
  </script>
</div>