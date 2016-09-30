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

        $this->loadModel('Atividade');
        $this->loadModel('RespoAlternativa');
        $this->loadModel('RespoDissertativa');
        $this->loadModel('GrupoUser');
        $this->loadModel('AcessoAtividade');
        $this->loadModel('Premiacao');

        $atividades_ativas = $this->RespoAlternativa->find('all', array('conditions' => array('RespoAlternativa.tentativas_restantes >' => '0', 'RespoAlternativa.finalizada =' => '0', 'user_id' => $this->Auth->user('id'))));

        $atividades_realizadas = $this->RespoAlternativa->find('all', array('conditions' => array('RespoAlternativa.tentativas_restantes >=' => '0', 'RespoAlternativa.finalizada =' => '1', 'user_id' => $this->Auth->user('id'))));
        
        $ativi_ativas = array();
        $ativi_realizadas = array();


        /*
        Calculando se o usuário tem alguma premiação
        */

        $premiacoes = array();
        $atividades_home = array();
        $grupos = $this->GrupoUser->find('all', array('conditions' => array('GrupoUser.user_id' => $this->Auth->user('id'))));
        foreach ($grupos as $key => $grupo) {
            $accsAtividades = $this->AcessoAtividade->find('all', array('conditions' => array('AcessoAtividade.grupo_id' => $grupo['Grupo']['id'])));
            foreach ($accsAtividades as $key2 => $ativ) {
                $pontosTotalAtiv = 0;
                $pts_inds = "";
                
                if ($ativ['Atividade']['tipo_atividade'] == 1) {
                    
                    $pts_inds = $this->RespoDissertativa->find('all', array('conditions' => array('RespoDissertativa.atividade_id' => $ativ['Atividade']['id'], 'RespoDissertativa.pontos !=' => "")));

                    foreach ($pts_inds as $key3 => $value) {
                        $pontosTotalAtiv += $value['RespoDissertativa']['pontos'];
                    }

                } else {
                    $pts_inds = $this->RespoAlternativa->find('all', array('conditions' => array('RespoAlternativa.atividade_id' => $ativ['Atividade']['id'], 'RespoAlternativa.finalizada' => 1)));
                    foreach ($pts_inds as $key4 => $value) {
                        $pontosTotalAtiv += $ativ['Premiacao']['pontos_individuais'];
                    }
                }

                $prem = $this->Premiacao->findById($ativ['Atividade']['premiacaos_id']);

                if ($pontosTotalAtiv >= $prem['Premiacao']['pontos_final']) {
                    $premiacoes[$key] = $prem['Premiacao'];
                } else {
                    $atividades_home[$key2]['Atividade'] = $ativ;
                    $atividades_home[$key2]['Premiacao'] = $prem['Premiacao'];
                    $atividades_home[$key2]['porcentagem'] = ($pontosTotalAtiv * 100) / $prem['Premiacao']['pontos_final'];
                }
            }
        }

        $this->set('atividades_home', $atividades_home);
        $this->set('premiacoes', $premiacoes);
        /****************************************************/
        
        $pontos_atividade = 0;
        $k = 0;

        $premiacao_user = array();
        
        foreach ($atividades_realizadas as $key => $realizadas) {
        	$ativi_realizadas[$key] = $this->Atividade->findById($realizadas['RespoAlternativa']['atividade_id']);

        	$calcular = $this->Atividade->findById($realizadas['RespoAlternativa']['atividade_id']);
        	

        	$users_grupo = $this->GrupoUser->find('all', array('conditions' => array('GrupoUser.grupo_id' => $calcular['AcessoAtividade'][0]['grupo_id'])));
        	foreach ($users_grupo as $key2 => $grp) {
        		
        		$resp_grupo = $this->RespoAlternativa->find('first', array('conditions' => array('RespoAlternativa.atividade_id' => $calcular['Atividade']['id'], 'RespoAlternativa.user_id' => $grp['GrupoUser']['user_id'], 'RespoAlternativa.finalizada' => 1)));
        		
        		if (!empty($resp_grupo)) {

        			$pontos = $this->Premiacao->findById($calcular['Atividade']['premiacaos_id']);
        			
        			@$ativi_realizadas[$key]['pontos_realizados'] += $pontos['Premiacao']['pontos_individuais'];
        			
        			$ativi_realizadas[$key]['porcentagem'] = ($ativi_realizadas[$key]['pontos_realizados'] * 100) / $pontos['Premiacao']['pontos_final'];
        			$ativi_realizadas[$key]['premio'] = $pontos;
        			if ($ativi_realizadas[$key]['porcentagem'] >= 100) {
        				$premiacao_user[$key] = $pontos['Premiacao'];
        			}
        		}
        	}
        }

        foreach ($atividades_ativas as $key => $ativas) {
        	$ativi_ativas[$key] = $this->Atividade->findById($ativas['RespoAlternativa']['atividade_id']);
        }

        
        $this->set('premiacao_user', $premiacao_user);        
        $this->set('ativi_realizadas', $ativi_realizadas);
        $this->set('ativi_ativas', $ativi_ativas);	
	}
}