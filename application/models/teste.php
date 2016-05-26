<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Model {
	public $titulo;
	public $conteudo;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_last(){
		$query = $this->db->query('SELECT titulo, conteudo FROM minha_tabela');

		foreach ($query->result() as $row)
		{
		        echo $row->titulo;
		        echo $row->conteudo;
		}

		echo 'Total Results: ' . $query->num_rows();		
	}

}

/* End of file teste.php */
/* Location: ./application/models/teste.php */