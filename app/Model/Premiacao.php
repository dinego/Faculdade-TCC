<?php 

// app/Model/User.php
class Premiacao extends AppModel {
    public $name = 'Premiacao';

    public $belongsTo = array(
        'Atividade' => array(
            'className' => 'Atividade',
            'foreignKey' => 'atividade_id'
            )
        );
}