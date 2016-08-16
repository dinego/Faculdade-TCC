<?php 

// app/Controller/UsersController.php
class AlunosController extends AppController {

    

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'home', 'display');
    }


	public function index() {
        $this->layout  = "dashboard";

        $this->set('title_for_layout', 'Atividades');
		
	}
}