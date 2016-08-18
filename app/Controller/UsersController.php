<?php 

// app/Controller/UsersController.php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('cadastro', 'logout', 'login');
    }


	public function login() {
        $this->set('title_for_layout', 'Login');
		$this->layout  = "login";

	    if ($this->Auth->login()) {
            if ($this->Auth->user('role') == 'admin' || $this->Auth->user('role') == 'prof') {
                $this->redirect($this->Auth->redirect());
            } else if ($this->Auth->user('role') == 'aluno') {
                $this->redirect(array('controller' => 'alunos', 'action' => 'index'));
            }	        
	    } else {
	        $this->Flash->error(__('Usuário ou senha invalida, tente novamente!'));
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}


    public function index() {

        parent::isAuthorized($this->Auth->user());

        $this->User->recursive = 0;
        $options = array(
            'conditions' => array('User.active' => 'true'),
            'order' => array('User.created' => 'DESC'),
            'limit' => 10,
            'group' => 'User.id'
        );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $users = $this->paginate('User');
        // Envia os dados pra view
        $this->set('users', $users);
    }

    public function cadastro() {
        if ($this->request->is('post')) {
            $this->request->data['User']['liberado'] = 0;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Solicitação feita! Aguarde até algum professor liberar seu acesso!'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Flash->error(__('Usuário não cadastrado. Tente novamente mais tarde.'));
            }
        }
    }

    public function liberar()
    {

        parent::isAuthorized($this->Auth->user());

        $this->User->recursive = 0;
        $options = array(
            'conditions' => array('User.active' => 'true', 'User.liberado' => '0'),
            'order' => array('User.created' => 'DESC'),
            'limit' => 10,
            'group' => 'User.id'
        );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $users = $this->paginate('User');
        // Envia os dados pra view
        $this->set('users', $users);
    }

    public function liberarChange($id = null) 
    {
        parent::isAuthorized($this->Auth->user());
        
        if ($this->request->is('get')) {
            $this->request->data['User']['id'] = $id;
            $this->request->data['User']['liberado'] = 1;

            if ($this->User->save($this->request->data))
            {
                $this->Flash->success(__('Usuário Liberado com sucesso!'));
                $this->redirect(array('action' => 'liberar'));
            } else {
                $this->Flash->error(__('Usuário não liberado. Tente novamente mais tarde.'));
            }
        }
    }
    

    public function add() 
    {
        if ($this->request->is('post')) {
            $this->User->create();            
            // Tamanho máximo do arquivo (em Bytes)
            $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
            // Array com as extensões permitidas
            $_UP['extensoes'] = array('jpg', 'png', 'gif');
            // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
            $_UP['renomeia'] = false;
            // Array com os tipos de erros de upload do PHP
            $_UP['erros'][0] = 'Não houve erro';
            $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
            $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
            $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
            $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
            // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
            if ($this->request->data['User']['foto']['error'] != 0) {
              die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$this->request->data['User']['foto']['error']]);
              exit; // Para a execução do script
            }
            // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
            // Faz a verificação da extensão do arquivo
            $foto = $this->request->data['User']['foto']['name'];
            $ext = pathinfo($foto, PATHINFO_EXTENSION);
            if (array_search($ext, $_UP['extensoes']) === false) {
              $this->Flash->error(__("Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif"));
              exit;
            }
            // Faz a verificação do tamanho do arquivo
            if ($_UP['tamanho'] < $this->request->data['User']['foto']['size']) {
              $this->Flash->error(__("O arquivo enviado é muito grande, envie arquivos de até 2Mb."));
              exit;
            }
            // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
            // Primeiro verifica se deve trocar o nome do arquivo
            if ($_UP['renomeia'] == true) {
              // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
              $nome_final = md5(time()).'.jpg';
            } else {
              // Mantém o nome original do arquivo
              $nome_final = $this->request->data['User']['foto']['name'];
            }
            
            
              // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
            $foto = $this->request->data['User']['foto'];
            $this->request->data['User']['foto'] = $nome_final;
            if ($this->User->save($this->request->data)) {

                $_UP['pasta'] = WWW_ROOT . "fotos/" . $this->User->id . "/";
                if (!file_exists($_UP['pasta'])) {
                    mkdir($_UP['pasta'], 0777, true);
                }
                move_uploaded_file($foto['tmp_name'], $_UP['pasta'] . $nome_final);
                $this->Flash->success(__('Usuário salvo com Sucesso'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Não conseguimos salvar o usuário! Erro:' . $_UP['erros']));
            }
        }
    }

    public function edit($id = null) 
    {
        parent::isAuthorized($this->Auth->user());

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        parent::isAuthorized($this->Auth->user());
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('Usuário deletado com sucesso'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Usuário não deletado.'));
        $this->redirect(array('action' => 'index'));
    }
}