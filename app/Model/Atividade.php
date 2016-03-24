<?php 

class Atividade extends AppModel {
    public $name = 'Atividade';

    public $hasOne = array(
        'Premiacao' => array(
            'className' => 'Premiacao',
            'foreignKey' => 'premiacaos_id'
        ));

    public $hasMany = array(
        'Alternativa' => array(
            'className' => 'Alternativa',
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