<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_model extends CI_Model{
    
    public $id;
    public $nome;
    public $colegiado;
    public $tipo;
	public $arquivo;
	public $descricao;
	public $download;

    public function __construct(){
		parent::__construct();
	}

    public function listar_uploads(){
        $this->db->order_by('nome','ASC');
        return $this->db->get('upload')->result();
    }

    public function listar_upload($id){
        $this->db->from('upload');
        $this->db->where('upload.id',$id);
        return $this->db->get()->result();
    }
    
    public function conteudo_upload($id){
        $this->db->select('upload.id, upload.nome, upload.colegiado, upload.tipo, upload.arquivo, upload.descricao, upload.download');
        $this->db->from('upload');
        $this->db->where('colegiado = '.$id); 
        return $this->db->get()->result();
    }

    public function adicionar($nome, $colegiado, $tipo, $arquivo, $descricao, $download){
        $dados['nome'] = $nome;
        $dados['colegiado'] = $colegiado;
        $dados['tipo'] = $tipo;
        $dados['arquivo'] = $arquivo;
        $dados['descricao'] = $descricao;
        $dados['download'] = $download;
       
        return $this->db->insert('upload',$dados);
    }

    public function remover($id){
        $this->db->where('id',$id);
        return $this->db->delete('upload');
    }

    public function alterar($id, $nome, $colegiado, $tipo, $descricao, $download){
        $dados['nome'] = $nome;
        $dados['colegiado'] = $colegiado;
        $dados['tipo'] = $tipo;
        $dados['descricao'] = $descricao;
        $dados['download'] = $download;

        $this->db->where('id',$id);
        return $this->db->update('upload',$dados);
    }

    public function novo_arquivo($id, $arquivo){
        $dados['arquivo'] = $arquivo;
      $this->db->where('id',$id);
      return $this->db->update('upload',$dados);
    }
}