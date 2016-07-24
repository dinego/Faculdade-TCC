<?php 

class Atividade extends AppModel {
    public $name = 'Atividade';

    public function isOwnedBy($atividade, $user) {
        return $this->field('id', array('id' => $atividade, 'user_id' => $user)) == $atividade;
    }

    public $hasOne = array(
        'RespostaAtividade' => array(
            'className' => 'RespostaAtividade',
            'foreignKey' => 'atividade_id'
            )
        );

    public $belongsTo = array(
        'Premiacao' => array(
            'className' => 'Premiacao',
            'foreignKey' => 'premiacaos_id'
            ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
            )
        );

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