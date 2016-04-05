<?php 

// app/Model/User.php
class GrupoUser extends AppModel {
    public $name = 'GrupoUser';
    public $useTable = 'users_grupos';

    public $hasMany = array(
    	'AcessoAtividade' => array(
    		'className' => 'AcessoAtividade',
    		'foreignKey' => 'grupo_id'
    		)
    	);

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
            ),
        'Grupo' => array(
            'className' => 'Grupo',
            'foreignKey' => 'grupo_id'
            )
        );

}