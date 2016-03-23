<?php 

Class AtividadesController extends AppController {
	
	public function add() {

		$this->loadModel('Premiacao');

		$user = $this->Auth->user();

		$premios = $this->Premiacao->find('list', array(
    		'conditions' => array('Premiacao.user_id =' => $user['id']),
    		'fields'     => array('Premiacao.id', 'Premiacao.titulo')
    	));

		$this->set(compact('premios', $premios));
	}
}