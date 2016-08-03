<?php 

// app/Controller/UsersController.php
class GruposController extends AppController {

	public function index() {

        $this->set('title_for_layout', 'Grupos');
		$this->set('grupos', $this->Grupo->find('all', array('conditions' => array('user_id' => $this->Auth->User('id')))));
	}


	public function add() {
		$this->recursive = 2;
		$this->set('alunos', $this->Grupo->User->find('all', array('conditions' => array('User.role' => 'aluno'))));
	}
}