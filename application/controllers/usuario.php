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

	public function cadastra(){

	}

	public function verifica(){
		$data['title'] = 'login';

        $this->form_validation->set_rules('login', 'Username', 'required',
        	array('required' => 'Entre com um usuário válido'));
        $this->form_validation->set_rules('senha', 'Password', 'required',
            array('required' => 'Entre com uma senha válida.'));
        
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template_parts/header',$data);
			$this->load->view('usuario/index',$data);
			$this->load->view('template_parts/footer',$data);			
		}else{
            $usuario = $this->input->post('usuario');
            $senha = $this->input->post('senha');
            $this->usuario_model->valida($usuario,$senha);	

			$this->load->view('template_parts/header',$data);
			$this->load->view('usuario/sucesso',$data);
			$this->load->view('template_parts/footer',$data);				
		}		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */