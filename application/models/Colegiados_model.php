<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Colegiados_model extends CI_Model{
    
// Variáveis de instância da classe notícias - vindo do banco de dados.
    public $id;
    public $nome;
    public $sigla;
    public $link_curso;
	public $link_matriz;

    public function __construct(){
		parent::__construct();
	}

    public function listar_colegiados(){
        $this->db->order_by('sigla','ASC');
        return $this->db->get('colegiado')->result();
    }

    public function listar_colegiado($id){
        $this->db->order_by('nome','ASC');
        $this->db->from('colegiado');
        $this->db->where('colegiado.id',$id);
        return $this->db->get()->result();
    }
    
    public function conteudo_colegiado($id){
        $this->db->select('colegiado.id, colegiado.nome, colegiado.sigla, colegiado.link_curso, colegiado.link_matriz');
        $this->db->from('colegiado');
        $this->db->where('id = '.$id); // DUVIDA ------------------------------
        return $this->db->get()->result();
    }

    public function adicionar($nome, $sigla, $link_curso, $link_matriz){
        $dados['nome'] = $nome;
        $dados['sigla'] = $sigla;
        $dados['link_curso'] = $link_curso;
        $dados['link_matriz'] = $link_matriz;
       
        return $this->db->insert('colegiado',$dados);
    }

    public function remover($id){
        $this->db->where('id',$id);
        return $this->db->delete('colegiado');
    }

    public function alterar($id, $nome, $sigla, $link_curso, $link_matriz){
        $dados['nome'] = $nome;
        $dados['sigla'] = $sigla;
        $dados['link_curso'] = $link_curso;
        $dados['link_matriz'] = $link_matriz;

        $this->db->where('id',$id);
        return $this->db->update('colegiado',$dados);
    }
}