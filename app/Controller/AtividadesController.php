<?php 

Class AtividadesController extends AppController {

	public function isAuthorized($user) {
        if (parent::isAuthorized($user)) {
            if (in_array($this->action, array('edit', 'delete', 'add', 'desativar'))) {
                $id = (int) $this->request->params['pass'];
                return $this->Atividade->isOwnedBy($id, $user['id']);
            } else if (in_array($this->action, array('ativ_alunos', 'atividade'))) {
            	return true;
            }
        }
        return false;
    }
	
	public function add() 
	{

    	$this->recursive = 2;
		$this->loadModel('Premiacao');
		$user = $this->Auth->user();
		$premios = $this->Premiacao->find('list', array(
    		'conditions' => array('Premiacao.user_id =' => $user['id']),
    		'fields'     => array('Premiacao.id', 'Premiacao.titulo')
    	));

		$this->set(compact('premios', $premios));

		$this->loadModel('Grupo');
		$grupos = $this->Grupo->find('all', array(
    		'conditions' => array('Grupo.user_id =' => $user['id']),
    		'fields'     => array('Grupo.id', 'Grupo.nome')
    	));
		$this->set('grupos', $grupos);

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

	            $alternativaCorreta = $this->request->data["RespostaAtividade"]["alternativa_id"];
	            $this->request->data['Alternativa'][$alternativaCorreta]['correta'] = 1;

	            if ($this->Atividade->saveAll($this->request->data)) {

	            	if (!empty($this->request->data['Atividade']['arquivo'])) {
		                $_UP['pasta'] = WWW_ROOT . "fotos/" . $user['id'] . "/atividades/auxiliar/" . $this->Atividade->id . "/";

		                if (!file_exists($_UP['pasta'])) {
		                    mkdir($_UP['pasta'], 0777, true);
		                }

		                move_uploaded_file($arquivo['tmp_name'], $_UP['pasta'] . $nome_final);
		            }

		            $this->loadModel('AcessoAtividade');
					foreach ($this->request->data["Atividade"]["grupos"] as $key => $grupo) {
						$this->AcessoAtividade->create();
						$this->request->data['AcessoAtividade']['grupo_id'] = $grupo;
						$this->request->data['AcessoAtividade']['atividade_id'] = $this->Atividade->id;
						$this->AcessoAtividade->save($this->request->data);
					}

	                $this->Flash->success(__('Atividade salva com Sucesso'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Flash->error(__('Não conseguimos salvar a atividade! Erro:' . $_UP['erros']));
	            }
	        } else {
	        	$this->request->data['Atividade']['arquivo'] = '';

	        	// setando a alternativa correta
	        	$alternativaCorreta = $this->request->data["RespostaAtividade"]["alternativa_id"];
	            $this->request->data['Alternativa'][$alternativaCorreta]['correta'] = 1;

	        	if ($this->Atividade->saveAll($this->request->data)) {
	        		
					$this->loadModel('AcessoAtividade');
					foreach ($this->request->data["Atividade"]["grupos"] as $key => $grupo) {
						$this->AcessoAtividade->create();
						$this->request->data['AcessoAtividade']['grupo_id'] = $grupo;
						$this->request->data['AcessoAtividade']['atividade_id'] = $this->Atividade->id;
						$this->AcessoAtividade->save($this->request->data);
					}

	        		$this->Flash->success(__('Atividade salva com Sucesso'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Flash->error(__('Não conseguimos salvar a atividade! Erro:' . $_UP['erros']));
	            }
	        }
		}
	}

	public function delete($id = null)
	{
		if ($this->Atividade->isOwnedBy($id, $this->Auth->user('id'))) {
			$this->Atividade->id = $id;
			if($this->Atividade->delete()) {
				$this->Flash->success(__('Atividade removida com Sucesso'));
				$this->redirect(array('controller' => 'atividades', 'action' => 'index'));
			}
		} else {
			$this->Flash->setFlash('Essa atividade não pertênce à você!');
		}
	}

	public function edit($id = null)
	{
		$this->Atividade->id = $id;

		if ($this->Atividade->isOwnedBy($id, $this->Auth->user('id'))) {
			
			$this->set('atividade', $this->Atividade->findById($id));

			if ($this->request->is('post')) {

			} else {
				$this->request->data = $this->Atividade->findById($id);

				$premios = $this->Atividade->Premiacao->find('list', 
					array('fields' => array(
						'Premiacao.id', 
						'Premiacao.titulo'
						), 
						'conditions' => array(
							'user_id' => $this->Auth->user('id')
							)
						)
					);
				$alternativas = $this->Atividade->Alternativa->find('all', array('conditions' => array('Alternativa.atividade_id' => $id)));
				$this->set('alternativas', $alternativas);

				$this->set('premios', $premios);
			}


		} else {
			$this->Flash->setFlash('Essa atividade não pertênce a você!');
		}
	    
	}	

	public function index() 
	{

		$ativ = $this->Atividade->find('first');
        
		//$atividades = $this->Atividade->find('all', array('conditions' => array('Atividade.user_id' == $this->Auth->user('id'))));

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

	public function ativ_alunos()
	{
		$this->layout = 'dashboard';
		$this->loadModel('GrupoUser');
		$this->loadModel('AcessoAtividade');

		$gruposUsers = $this->GrupoUser->find('all', array('conditions' => array('GrupoUser.user_id' => $this->Auth->user('id'))));

		$atividades = array();
		foreach ($gruposUsers as $key => $grupo) {
			$acesso = $this->AcessoAtividade->find('all', array('conditions' => array('AcessoAtividade.grupo_id' => $grupo['GrupoUser']['grupo_id'])));
			foreach ($acesso as $key => $value) {
				$atividades[$key] = $value["Atividade"];
			}
		}

		$this->set('atividades', $atividades);
	}

	public function atividade($id = null)
	{
		if ($this->request->is('post')) {
			var_dump($this->request->data);

			$alternativa = $this->Alternativa->findById($this->request->data['Alternativa']['alternativa']);

			$respUser = $this->RespoAlternativa->find('first', array('conditions' => array('RespoAlternativa.atividade_id' => $id, 'RespoAlternativa.user_id' => $this->Auth->user('id'))));


			if ($alternativa['Alternativa']['correta'] == 1) {
				if (!empty($respUser)) {
					$this->request->data['RespoAlternativa']['user_id'] = $this->Auth->user('id');
					$this->request->data['RespoAlternativa']['']
					//tamiris, 243 motorista  
					//3541-4198, mauricio
					//130;
				}
			}
			die();
		} else {
			$atividade = $this->Atividade->find('first', array('conditions' => array('Atividade.id' => $id)));
			$this->set('atividade', $atividade);
		}
	}
}