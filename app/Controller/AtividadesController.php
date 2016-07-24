<?php 

Class AtividadesController extends AppController {

	//function beforeFilter() {
        //$this->Auth->allow('index', 'view');
    //}    

	public function isAuthorized($user) {
        //if (parent::isAuthorized($user)) {

        	// verifica a action e se existe dentro da regra
            if (in_array($this->action, array('edit', 'delete', 'desativar', 'add', 'responder', 'index'))) {
            	// verifica se é admin ou professor
            	if (!empty($user)) {
	            	if ($user['role'] == 'admin' || $user['role'] == 'prof') {
	            		if (!empty($this->request->params['pass'])) {
		            		$id = (int) $this->request->params['pass'][0];
		            		// verifica se o admin é o responsável pela atividade
		                	return $this->Atividade->isOwnedBy($id, $user['id']);
		                }
	                // se não for admin ou professor, monta um array com actions disponíveis para alunos	
	            	} else if (in_array($this->action, array('responder'))) {
	            		return true;
	            	// se a url não existir
	            	} else {
	            		return false;
	            	}
	            } else {
	            	$this->redirect(array('controller' => 'users', 'action' => 'login'));
	            }
            //}
        }
        return false;
    }
	
	public function add() 
	{

		$this->loadModel('Premiacao');
		$user = $this->Auth->user();
		$premios = $this->Premiacao->find('list', array(
    		'conditions' => array('Premiacao.user_id =' => $user['id']),
    		'fields'     => array('Premiacao.id', 'Premiacao.titulo')
    	));

    	$this->recursive = 2;

		$this->set(compact('premios', $premios));

		if ($this->request->is('post')) {

			$this->Atividade->create();

			$this->request->data['Atividade']['user_id'] = $user['id'];

			$range = $this->request->data['Atividade']['rangeData'];

			$range2 = array();
			$range2 = explode(' ', $range);

			$inicio = $range2[0];
			$dateInicio = str_replace('/', '-', $inicio);

			$fim = $range2[2];
			$dateFim = str_replace('/', '-', $fim);


			$this->request->data['Atividade']['inicio'] = date('Y-m-d', strtotime($dateInicio));
			$this->request->data['Atividade']['fim'] = date('Y-m-d', strtotime($dateFim));
	

			if (!empty($this->request->data['Atividade']['arquivo'])) {
				if ($this->request->data['Atividade']['arquivo']['error'] != 4) {

					$arquivo = $this->request->data['Atividade']['arquivo'];
					// Tamanho máximo do arquivo (em Bytes)
		            $_UP['tamanho'] = 2048 * 2048 * 2; // 2Mb
		            // Array com as extensões permitidas
		            $_UP['extensoes'] = array('doc', 'rar', 'zip', 'pdf');
		            // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
		            $_UP['renomeia'] = false;
		            // Array com os tipos de erros de upload do PHP
		            $_UP['erros'][0] = 'Não houve erro';
		            $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
		            $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
		            $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		            $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		            // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
		            if ($arquivo['error'] != 0) {
		              die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$arquivo['error']]);
		              exit; // Para a execução do script
		            }
		            // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
		            // Faz a verificação da extensão do arquivo
		            $foto = $arquivo['name'];
		            $ext = pathinfo($foto, PATHINFO_EXTENSION);

		            /*if (array_search($ext, $_UP['extensoes']) === false) {
		            	var_dump($ext);
		              $this->Flash->error(__("Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif"));
		              exit;
		            }*/

		            // Faz a verificação do tamanho do arquivo
		            if ($_UP['tamanho'] < $arquivo['size']) {
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
		              $nome_final = $arquivo['name'];
		          	}

		          	$this->request->data['Atividade']['arquivo'] = $nome_final;
		        } else {
		        	$this->request->data['Atividade']['arquivo'] = "";
		        }

	            $this->request->data['Atividade']['user_id'] = $user['id'];

	            $this->request->data['RespostaAtividade']['user_id'] = $user['id'];

	            if ($this->Atividade->saveAll($this->request->data)) {

	            	if (!empty($this->request->data['Atividade']['arquivo'])) {
		                $_UP['pasta'] = WWW_ROOT . "fotos/" . $user['id'] . "/atividades/auxiliar/" . $this->Atividade->id . "/";

		                if (!file_exists($_UP['pasta'])) {
		                    mkdir($_UP['pasta'], 0777, true);
		                }

		                move_uploaded_file($arquivo['tmp_name'], $_UP['pasta'] . $nome_final);
		            }

	                $this->Flash->success(__('Atividade salva com Sucesso'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Flash->error(__('Não conseguimos salvar o premio! Erro:' . $_UP['erros']));
	            }
	        } else {
	        	$this->request->data['Atividade']['arquivo'] = '';
	        	if ($this->Atividade->saveAll($this->request->data)) {
	        		$this->Flash->success(__('Atividade salva com Sucesso'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Flash->error(__('Não conseguimos salvar a atividade! Erro:' . $_UP['erros']));
	            }
	        }
		}
	}

	public function edit($id = null)
	{
		$this->Atividade->id = $id;
	    if ($this->request->is('get')) {
	    	$this->Atividade->recursive = 2;
	        $this->request->data = $this->Atividade->findById($id);

	        $this->loadModel('Alternativa');
	        
	        $user = $this->Auth->user();
			$premios = $this->Atividade->Premiacao->find('list', array(
	    		'conditions' => array('Premiacao.user_id =' => $user['id']),
	    		'fields'     => array('Premiacao.id', 'Premiacao.titulo')
	    	));	        
	        $this->set('premios', $premios);

	        $this->request->data['Alternativa'] = $this->Atividade->Alternativa->find('all', array('conditions' => array('Alternativa.atividade_id' => $id)));

	        $this->set('tipoAtividade', $this->request->data['Atividade']['tipo_atividade']);
	    } else {
	        if ($this->Atividade->save($this->request->data)) {
	            $this->Flash->success('Atividade salva com sucesso.');
	            $this->redirect(array('action' => 'index'));
	        }
	    }
		
	}

	public function delete($id = null)
	{
    	if ($this->Atividade->isOwnedBy($id, $this->Auth->user('id'))) {

    		$this->Atividade->id = $id;
    		if (!$this->Atividade->delete()) {
    			$this->Flash->error(__('Atividade não deletada.'));
		        $this->redirect(array('action' => 'index'));
		    } else {
		    	$this->Flash->success(__('Atividade Deletada.'));
        		$this->redirect(array('action' => 'index'));
		    }
    	} else {
    		$this->Flash->error(__('Essa atividade não pertênce à você!'));
    	}
	}

	public function desativar($id = null)
	{
    	if ($this->Atividade->isOwnedBy($id, $this->Auth->user('id'))) {

    		$ativ = $this->Atividade->find('first', array('conditions' => array('atividade_id' => $id)));
    		$this->Atividade->id = $id;
    		
    		if ($ativ['Atividade']['ativo'] == "2") {
    			$this->request->data['Atividade']['ativo'] = "1";
    		} else {
    			$this->request->data['Atividade']['ativo'] = "2";
    		}
    		if (!$this->Atividade->save($this->request->data)) {
    			$this->Flash->success(__('Atividade atualizada.'));
		        $this->redirect(array('action' => 'index'));
		    } else {
		    	$this->Flash->success(__('Atividade Deletada.'));
        		$this->redirect(array('action' => 'index'));
		    }
    	} else {
    		$this->Flash->error(__('Essa atividade não pertênce à você!'));
    	}
	}	

	public function index() 
	{

		$ativ = $this->Atividade->find('first');

        $options = array('conditions' => array('Atividade.user_id' == $this->Auth->user('id')),
        	'order' => array('Atividade.created' => 'DESC'),
            'limit' => 10,
            'group' => 'Atividade.id'
            );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $atividades = $this->paginate('Atividade');
        // Envia os dados pra view
        $this->set('atividades', $atividades);

        
	}
}