<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		$data['title'] = 'teste';
		$this->load->view('template_parts/header',$data);
		$this->load->view('login/index',$data);
		$this->load->view('template_parts/footer',$data);			
	}

	public function verifica(){
		$data['title'] = 'teste';

        $this->form_validation->set_rules('login', 'Username', 'required',
        	array('required' => 'Entre com um usuário válido'));
        $this->form_validation->set_rules('senha', 'Password', 'required',
            array('required' => 'Entre com uma senha válida.'));
        
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template_parts/header',$data);
			$this->load->view('login/index',$data);
			$this->load->view('template_parts/footer',$data);			
		}else{
			$this->load->view('template_parts/header',$data);
			$this->load->view('login/sucesso',$data);
			$this->load->view('template_parts/footer',$data);				
		}		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */