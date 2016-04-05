<?php 

class Atividade extends AppModel {
    public $name = 'Atividade';

    public $hasOne = array(
        'Alternativa' => array(
            'className' => 'Alternativa',
            'foreignKey' => 'atividade_id'
            ),
        'Premiacao' => array(
            'className' => 'Premiacao',
            'foreignKey' => 'id'
            )
        );

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
            )
        );

    public $hasMany = array(
        'Alternativa' => array(
            'className' => 'Alternativa',
            'foreignKey' => 'atividade_id'
            ),
        'RespostaAtividade' => array(
            'className' => 'RespostaAtividade',
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