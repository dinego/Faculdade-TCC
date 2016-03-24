<?php 

class Atividade extends AppModel {
    public $name = 'Atividade';

    public $hasOne = array(
        'Premiacao' => array(
            'className' => 'Premiacao',
            'foreignKey' => 'premiacaos_id'
        ));

    public $hasMany = array(
        'Alternativas' => array(
            'className' => 'Alternativas',
            'foreignKey' => 'atividade_id'
            )
        );

    public $validate = array(
        'titulo' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Preencha o título'
            )
        ),
        'descricao' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Preencha a descrição'
            )
        )
    );
}