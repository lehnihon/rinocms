<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	private $login;
	private $senha;
	private $permissao;
	private $data_acesso;
	private $ativo;

	public function __construct()
	{
		parent::__construct();
	}

	public function valida($login,$senha){
        $sql = "SELECT * FROM usuario WHERE login = ? AND senha = ?";
        $query = $this->db->query($sql, array($login, $senha));
        $row = $query->row();
        if($row){
            return true;
        }else{
            return false;
        }
	}

    /**
     * Gets the value of usuario.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets the value of usuario.
     *
     * @param mixed $usuario the usuario
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Gets the value of senha.
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets the value of senha.
     *
     * @param mixed $senha the senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Gets the value of permissao.
     *
     * @return mixed
     */
    public function getPermissao()
    {
        return $this->permissao;
    }

    /**
     * Sets the value of permissao.
     *
     * @param mixed $permissao the permissao
     *
     * @return self
     */
    public function setPermissao($permissao)
    {
        $this->permissao = $permissao;

        return $this;
    }

    /**
     * Gets the value of data_acesso.
     *
     * @return mixed
     */
    public function getData_acesso()
    {
        return $this->data_acesso;
    }

    /**
     * Sets the value of data_acesso.
     *
     * @param mixed $data_acesso the data_acesso
     *
     * @return self
     */
    public function setData_acesso($data_acesso)
    {
        $this->data_acesso = $data_acesso;

        return $this;
    }

    /**
     * Gets the value of ativo.
     *
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Sets the value of ativo.
     *
     * @param mixed $ativo the ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */