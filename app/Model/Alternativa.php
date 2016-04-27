<?php 

class Alternativa extends AppModel {
    public $name = 'Alternativa';

    public $hasOne = array(
        'RespostaAtividade' => array(
            'className' => 'RespostaAtividade',
            'foreignKey' => 'atividade_id'
            )
        );
}