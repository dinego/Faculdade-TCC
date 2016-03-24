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
					<h2>Adicionar Novo Usuário</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Atividade', array("data-parsley-validate" => null, "class" => "form-horizontal form-label-left", "enctype" => "multipart/form-data")); ?>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rangeData">Período de tempo (de - até) <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('rangeData', array('class' => 'form-control', 'value' => '01/05/2016 - 01/06/2016', 'id' => 'reservation', 'label' => false)) ?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Título <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('Atividade.titulo', array('class' => 'form-control', 'label' => false)) ?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descrição (Atividade) <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->Form->input('Atividade.descricao', array('class' => 'form-control ckeditor', 'id' => 'ckeditor', 'label' => false)) ?>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Premiação <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('Atividade.premiacaos_id', array('class' => 'fcol-md-6 col-xs-12 form-control', 'options' => $premios, 'label' => false)) ?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Arquivo de apoio <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('Atividade.arquivo', array("class" => "col-md-7 col-xs-12", "label" => false, 'type' => 'file')); ?>
							</div>
						</div>

						<div class="ln_solid"></div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Arquivo de apoio <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->Form->input('Atividade.tipo_atividade', array("class" => "col-md-6 col-xs-12 form-control", "label" => false, 'options' => array(1 => 'Alternativa', 2 => 'Dissertativa'))); ?>
							</div>
						</div>


						<div id="alternativas">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">1
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php echo $this->Form->input('Alternativa.1.alternativa', array("class" => "col-md-12 col-xs-12 form-control", "label" => false)); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">2
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php echo $this->Form->input('Alternativa.2.alternativa', array("class" => "col-md-12 col-xs-12 form-control", "label" => false)); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">3
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php echo $this->Form->input('Alternativa.3.alternativa', array("class" => "col-md-12 col-xs-12 form-control", "label" => false)); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">4
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php echo $this->Form->input('Alternativa.4.alternativa', array("class" => "col-md-12 col-xs-12 form-control", "label" => false)); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">5
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php echo $this->Form->input('Alternativa.5.alternativa', array("class" => "col-md-12 col-xs-12 form-control", "label" => false)); ?>
								</div>
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
								<button type="submit" class="btn btn-success">Cadastrar atividade</button>
							</div>
						</div>

					<?php echo $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
    $(document).ready(function() {

    	var optionSet1 = {
	        startDate: moment().subtract(29, 'dias'),
	        endDate: moment(),
	        minDate: '01/01/2016',
	        maxDate: '12/31/2020',
	        dateLimit: {
	            days: 365
	        },
	        opens: 'left',
	        buttonClasses: ['btn btn-default'],
	        applyClass: 'btn-small btn-primary',
	        cancelClass: 'btn-small',
	        format: 'DD/MM/YYYY',
	        separator: ' to ',
	        locale: {
	            applyLabel: 'Enviar',
	            cancelLabel: 'Limpar',
	            fromLabel: 'De',
	            toLabel: 'Até',
	            customRangeLabel: 'Custom',
	            daysOfWeek: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
	            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
	            firstDay: 1
	        }
	    };
      	$('#reservation').daterangepicker(optionSet1, function(start, end, label) {
        	console.log(start.toISOString(), end.toISOString(), label);
      	});
    });
  </script>
</div>