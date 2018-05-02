<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Model
{
    protected $tabela;

    public function __construct()
    {
        parent::__construct();
        $this->tabela = "produtos";
    }

    //busca de produtos - status (ok)
    public function busca_produtos()
    {
        $this->db->select('*')->from($this->tabela);
        $sql = $this->db->get();
        return $sql->result();
    }

}