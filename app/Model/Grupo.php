<?php 

// app/Model/User.php
class Grupo extends AppModel {
    public $name = 'Grupo';
    public $useTable = 'grupos';

    public function isOwnedBy($grupo, $user) {
        $userS = $this->User->findById($user);
        if ($userS['User']['role'] == "admin") {
            return true;
        } else {
            return $this->field('id', array('id' => $grupo, 'user_id' => $user)) == $grupo;
        }
    }

    public $hasMany = array(
        'GrupoUser' => array(
            'className' => 'GrupoUser',
            'foreignKey' => 'user_id'
            ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id'
            )
        );

}