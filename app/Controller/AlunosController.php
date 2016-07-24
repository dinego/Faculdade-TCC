<?php 

// app/Controller/UsersController.php
class AlunosController extends AppController {

    

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'home', 'display');
    }


	public function index() {
        $this->layout  = "alunos";

        $this->set('title_for_layout', 'Login');
		
	}
}