<?php 
// app/Controller/UsersController.php
class GruposController extends AppController {

	public function isAuthorized($user) {
        if (parent::isAuthorized($user)) {
            if (in_array($this->action, array('edit', 'excluir', 'add', 'index'))) {
                $id = (int) $this->request->params['pass'];
                return $this->Grupo->isOwnedBy($id, $user['id']);
            } else if (in_array($this->action, array('ativ_alunos', 'atividade'))) {
            	return true;
            }
        }
        return false;
    }

	public function index() 
	{

        $this->set('title_for_layout', 'Grupos');
		$this->set('grupos', $this->Grupo->find('all', array('conditions' => array('user_id' => $this->Auth->User('id')))));
	}

	public function add() 
	{
		$this->recursive = 2;
		$alunos = $this->Grupo->User->find('all', array('conditions' => array('User.role' => 'aluno')));
		@$this->set('alunos', array_unique($alunos));

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
			} else {
				$this->Flash->error(__('Erro ao tentar salvar grupo'));
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
		$gruposAlunosTodos = $this->Grupo->User->find('all', array('conditions' => array('User.role' => 'aluno')));

		$inativos = array();

		$alunosAtivos = array();
		foreach ($gruposAlunosTodos as $key => $todos) {
			
			$inativos[$todos['User']['id']] = $this->Grupo->User->findById($todos['User']['id']);
			foreach ($gruposUsers as $key => $ativos) {

				$alunosAtivos[$ativos['GrupoUser']['user_id']] = $this->Grupo->User->findById($ativos['GrupoUser']['user_id']);
			}
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grupo->save($this->request->data)) {
				$this->loadModel('GrupoUser');

				$this->GrupoUser->deleteAll(array('GrupoUser.grupo_id' => $id));
				if (!empty($this->request->data['Grupo']['alunos'])) {
					foreach ($this->request->data['Grupo']['alunos'] as $key => $aluno) {
						$this->GrupoUser->create();
						$this->request->data['GrupoUser']['user_id'] = $aluno;
						$this->request->data['GrupoUser']['grupo_id'] = $this->Grupo->id;
						$this->GrupoUser->save($this->request->data);
					}
				}
				$this->Flash->success(__('Grupo salvo com Sucesso'));
	            $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Erro ao tentar editar grupo'));
	            $this->redirect(array('action' => 'index'));
			}
		}
		@$this->set('inativos', array_diff_assoc($inativos, $alunosAtivos));
		$this->set('ativos', $alunosAtivos);
	}

	public function excluir($id = null) 
	{
		$this->Grupo->id = $id;
        if (!$this->Grupo->exists()) {
            throw new NotFoundException(__('Grupo inválido'));
        }

        if ($this->Grupo->delete()) {
        	$this->Flash->success(__('Grupo excluido com Sucesso'));
	        $this->redirect(array('action' => 'index'));
        } else {
        	$this->Flash->success(__('Erro ao excluir o grupo'));
	        $this->redirect(array('action' => 'index'));
        }
	}
}