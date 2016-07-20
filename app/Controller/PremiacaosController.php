<?php 

Class PremiacaosController extends AppController {

    public function isAuthorized($user) 
    {
        if (parent::isAuthorized($user)) {
            if ($this->action === 'add') {
                // Todos os usuários registrados podem criar posts
                return true;
            }
            if (in_array($this->action, array('edit', 'delete'))) {
                $id = (int) $this->request->params['pass'][0];

                return $this->Premiacao->isOwnedBy($id, $user['id']);
            }
        }
        return false;
    }
	
	public function admin_add() 
    {
		if ($this->request->is('post')) {
            $this->Premiacao->create();

            // Tamanho máximo do arquivo (em Bytes)
            $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
            // Array com as extensões permitidas
            $_UP['extensoes'] = array('jpg', 'JPG', 'png', 'gif');
            // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
            $_UP['renomeia'] = false;
            // Array com os tipos de erros de upload do PHP
            $_UP['erros'][0] = 'Não houve erro';
            $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
            $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
            $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
            $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
            // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
            if ($this->request->data['Premiacao']['foto_premio']['error'] != 0) {
              die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$this->request->data['Premiacao']['foto_premio']['error']]);
              exit; // Para a execução do script
            }
            // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
            // Faz a verificação da extensão do arquivo
            $foto = $this->request->data['Premiacao']['foto_premio']['name'];
            $ext = pathinfo($foto, PATHINFO_EXTENSION);

            if (array_search($ext, $_UP['extensoes']) === false) {
            	var_dump($ext);
              $this->Flash->error(__("Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif"));
              exit;
            }
            // Faz a verificação do tamanho do arquivo
            if ($_UP['tamanho'] < $this->request->data['Premiacao']['foto_premio']['size']) {
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
              $nome_final = $this->request->data['Premiacao']['foto_premio']['name'];
            }

            $user = $this->Auth->user();
            $this->request->data['Premiacao']['user_id'] = $user['id'];
            
            // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
            $foto = $this->request->data['Premiacao']['foto_premio'];
            $this->request->data['Premiacao']['foto_premio'] = $nome_final;

            if ($this->Premiacao->save($this->request->data)) {
                $_UP['pasta'] = WWW_ROOT . "fotos/" . $user['id'] . "/premios/" . $this->Premiacao->id . "/";

                if (!file_exists($_UP['pasta'])) {
                    mkdir($_UP['pasta'], 0777, true);
                }

                move_uploaded_file($foto['tmp_name'], $_UP['pasta'] . $nome_final);
                $this->Flash->success(__('Usuário salvo com Sucesso'));
                $this->redirect(array('action' => 'index'));

            } else {
                $this->Flash->error(__('Não conseguimos salvar o premio! Erro:' . $_UP['erros']));
            }
        }
	}

    public function admin_edit($id = null)
    {
        $this->Premiacao->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Premiacao->findById($id);
        } else {
            
            if ($this->Premiacao->save($this->request->data)) {
                $this->Flash->success('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_index() 
    {
        parent::isAuthorized($this->Auth->user());

        $this->Premiacao->recursive = 0;
        $options = array(
            'conditions' => array('Premiacao.user_id' => $this->Auth->user('id')),
            'order' => array('Premiacao.created' => 'DESC'),
            'limit' => 10,
            'group' => 'User.id'
        );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $users = $this->paginate('Premiacao');
        // Envia os dados pra view
        $this->set('premiacaos', $users);
    }
}