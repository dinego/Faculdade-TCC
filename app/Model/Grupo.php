<?php 

// app/Model/User.php
class Grupo extends AppModel {
    public $name = 'Grupo';
    public $useTable = 'grupos';

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