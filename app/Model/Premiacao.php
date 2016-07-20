<?php 

// app/Model/User.php
class Premiacao extends AppModel {

	public function isOwnedBy($atividade, $user) {
        return $this->field('id', array('id' => $atividade, 'user_id' => $user)) == $atividade;
    }

    public $name = 'Premiacao';

    public $hasOne = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id'
            )
        );
}