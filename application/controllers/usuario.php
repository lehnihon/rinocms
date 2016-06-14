<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model','',TRUE);
	}

	public function index()
	{		
		$data['title'] = 'teste';
		$this->load->view('template_parts/header',$data);
		$this->load->view('usuario/index',$data);
		$this->load->view('template_parts/footer',$data);			
	}

	public function cadastrar(){
		$data['title'] = 'teste';
		$data['erro'] = '';
        $this->form_validation->set_rules('login', 'Username', 'required',
        	array('required' => 'Entre com um usuário válido'));
        $this->form_validation->set_rules('senha', 'Password', 'required',
            array('required' => 'Entre com uma senha válida.'));
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template_parts/header',$data);
			$this->load->view('usuario/cadastrar',$data);
			$this->load->view('template_parts/footer',$data);			
		}else{
            $login = $this->input->post('login');
            $senha = $this->input->post('senha');
				
		}
	}

	public function verifica(){
		$data['title'] = 'teste';
		$data['erro'] = '';
		$usuario_model =  $this->usuario_model;

        $this->form_validation->set_rules('login', 'Username', 'required',
        	array('required' => 'Entre com um usuário válido'));
        $this->form_validation->set_rules('senha', 'Password', 'required',
            array('required' => 'Entre com uma senha válida.'));
        
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template_parts/header',$data);
			$this->load->view('usuario/index',$data);
			$this->load->view('template_parts/footer',$data);			
		}else{
            $login = $this->input->post('login');
            $senha = $this->input->post('senha');
			if( $this->usuario_model->valida($login,$senha)){
				$this->load->view('template_parts/header',$data);
				$this->load->view('usuario/sucesso',$data);
				$this->load->view('template_parts/footer',$data);
			}else{
				$data['erro'] = 'Erro ao logar';
				$this->load->view('template_parts/header',$data);
				$this->load->view('usuario/index',$data);
				$this->load->view('template_parts/footer',$data);	
			}		
		}		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */