<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Funcionarios_model extends CI_Model{
    
// Variáveis de instância da classe funcionarios - vindo do banco de dados.
    public $id;
    public $nome;
    public $colegiado;
    public $cargo;
    public $membro;
    public $email;
    public $telefone;
    public $lattes;


    public function __construct(){
		parent::__construct();
	}

    public function listar_funcionarios(){
        $this->db->order_by('nome','ASC');
        return $this->db->get('funcionario')->result();
    }

    public function listar_funcionario($id){
        $this->db->order_by('nome','ASC');
        $this->db->from('funcionario');
        $this->db->where('funcionario.id',$id);
        return $this->db->get()->result();
    }
    
    public function conteudo_funcionario($id){
        $this->db->order_by('nome','ASC');
        $this->db->select('funcionario.colegiado, funcionario.nome, funcionario.cargo, funcionario.membro, funcionario.email, funcionario.telefone, funcionario.lattes');
        $this->db->from('funcionario');
        $this->db->where('colegiado = '.$id);
        return $this->db->get()->result();
    }

    public function adicionar($nome, $colegiado, $cargo, $membro, $email, $telefone, $lattes){
        $dados['nome'] = $nome;
        $dados['colegiado'] = $colegiado;
        $dados['cargo'] = $cargo;
        $dados['membro'] = $membro;
        $dados['email'] = $email;
        $dados['telefone'] = $telefone;
        $dados['lattes'] = $lattes;
       
        return $this->db->insert('funcionario',$dados);
    }

    public function remover($id){
        $this->db->where('id',$id);
        return $this->db->delete('funcionario');
    }

    public function alterar($id, $nome, $colegiado, $cargo, $membro, $email, $telefone, $lattes){
        $dados['nome'] = $nome;
        $dados['colegiado'] = $colegiado;
        $dados['cargo'] = $cargo;
        $dados['membro'] = $membro;
        $dados['email'] = $email;
        $dados['telefone'] = $telefone;
        $dados['lattes'] = $lattes;

        $this->db->where('id',$id);
        return $this->db->update('funcionario',$dados);
    }
}