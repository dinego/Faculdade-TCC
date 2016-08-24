<?php 
class RespoAlternativa extends AppModel {
	public $name = 'Alternativa';
	public $useTable = 'respo_alternativas';

	public $hasMany = array(
        'Atividade' => array(
            'className' => 'Atividade',
            'foreignKey' => 'id'
            )
        );
}