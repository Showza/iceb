<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapa_model extends CI_Model {

	public $id;
	public $nome;
	public $arquivo;

	public function __construct(){
		parent::__construct();
	}

    public function listar_mapas(){
        $this->db->order_by('id','ASC');
        return $this->db->get('mapas')->result();
    }

    public function listar_mapa($id){
        $this->db->from('mapas');
        $this->db->where('mapas.id',$id);
        return $this->db->get()->result();
    }

    public function adicionar($nome, $arquivo){
        $dados['nome'] = $nome;
        $dados['arquivo'] = $arquivo;
        return $this->db->insert('mapas',$dados);
    }

    public function remover($id){
        $this->db->where('id',$id);
        return $this->db->delete('mapas');
    }

    public function nova_matriz($id, $new_name)
    {
      $dados['arquivo'] = $new_name;
      $this->db->where('id',$id);
      return $this->db->update('mapas',$dados);
    }
}
