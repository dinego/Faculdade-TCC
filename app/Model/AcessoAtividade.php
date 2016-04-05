<?php 

class AcessoAtividade extends AppModel {
    public $name = 'AcessoAtividade';
    public $useTable = 'acessos_atividades';

    public $belongsTo = array(
        'Atividade' => array(
            'className' => 'Atividade',
            'foreignKey' => 'atividade_id'
            )
        );
}