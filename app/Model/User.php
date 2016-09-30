<?php 
App::uses('AuthComponent', 'Controller/Component');

// app/Model/User.php
class User extends AppModel {
    public $name = 'User';
    
    public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}

    public $hasMany = array(
        'Atividade' => array(
            'className' => 'Atividade',
            'foreignKey' => 'user_id'
            ),
        'Premiacao' => array(
            'className' => 'Premiacao',
            'foreignKey' => 'user_id'
            )
        );

    public $hasOne = array(
        'GrupoUser' => array(
            'className' => 'GrupoUser',
            'foreignKey' => 'user_id'
            )
        );


    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
            'uniqueEmailRule' => array(
                'rule' => 'isUnique',
                'message' => 'Email already registered'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'prof', 'aluno')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    // app/Model/User.php


}