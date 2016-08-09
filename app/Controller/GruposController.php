<?php 



// app/Controller/UsersController.php
class GruposController extends AppController {

	public function index() 
	{

        $this->set('title_for_layout', 'Grupos');
		$this->set('grupos', $this->Grupo->find('all', array('conditions' => array('user_id' => $this->Auth->User('id')))));
	}


	public function add() 
	{
		$this->recursive = 2;
		$alunos = $this->Grupo->User->find('all', array('conditions' => array('User.role' => 'aluno')));
		$this->set('alunos', $alunos);

		if ($this->request->is('post')) {
			$this->Grupo->create();

			$this->request->data['Grupo']['user_id'] = $this->Auth->User('id');

			if ($this->Grupo->save($this->request->data)) {
				$this->loadModel('GrupoUser');

				foreach ($this->request->data['Grupo']['alunos'] as $key => $aluno) {
					$this->GrupoUser->create();
					$this->request->data['GrupoUser']['user_id'] = $aluno;
					$this->request->data['GrupoUser']['grupo_id'] = $this->Grupo->id;
					$this->GrupoUser->save($this->request->data);
				}
				$this->Flash->success(__('Grupo salvo com Sucesso'));
	            $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) 
	{

		$this->Grupo->id = $id;
        if (!$this->Grupo->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		$this->recursive = 0;
		$grupoAtual = $this->Grupo->findById($id);
		$this->set('grupoAtual', $grupoAtual);

		//ativos no grupo
		$gruposUsers = $this->Grupo->GrupoUser->find('all', array('conditions' => array('GrupoUser.grupo_id' => $id)));
		//todos os alunos
		$gruposAlunosTodos = $this->Grupo->User->find('all');

		$inativos = array();

		$alunosAtivos = array();
		foreach ($gruposAlunosTodos as $key => $todos) {
			foreach ($gruposUsers as $key => $ativos) {

				$alunosAtivos[$ativos['GrupoUser']['user_id']] = $this->Grupo->User->findById($ativos['GrupoUser']['user_id']);

				$inativos[$todos['User']['id']] = $this->Grupo->User->findById($todos['User']['id']);
			}
		}

		$this->set('inativos', array_diff($inativos, $alunosAtivos));
		$this->set('ativos', $alunosAtivos);
	}
}