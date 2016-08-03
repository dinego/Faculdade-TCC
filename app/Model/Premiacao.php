<?php 

// app/Model/User.php
class Premiacao extends AppModel {

	public function isOwnedBy($premiacao, $user) {
        return $this->field('id', array('id' => $premiacao, 'user_id' => $user)) == $premiacao;
    }

    public $name = 'Premiacao';

    public $hasOne = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id'
            )
        );
}