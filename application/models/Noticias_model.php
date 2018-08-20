<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Noticias_model extends CI_Model {

  // Variáveis de instância da classe notícias - vindo do banco de dados.
  public $id;
  public $titulo;
  public $link;
  public $data;
  //public $destaque;
  //public $imagem;

	public function __construct(){
		parent::__construct();
	}

  // public function noticias_home(){
  //   $this->db->select('noticias.id, noticias.titulo, noticias.link');
  //   $this->db->from('noticias as noticiashome');
  //   //$this->db->where('noticias.destaque = ',1);
  //   $this->db->limit(3);
  //   $this->db->order_by('noticias.data','DESC');
  //   return $this->db->get('noticias')->result();
  // }

  public function listar_noticias(){
    $this->db->order_by('data','DESC');
    return $this->db->get('noticias')->result();
  }

  public function listar_noticia($id){
      $this->db->from('noticias');
      $this->db->where('noticias.id',$id);
      return $this->db->get()->result();
  }

  public function conteudo_noticia($id){
      $this->db->select('noticias.id, noticias.titulo, noticias.link, noticias.data');
      $this->db->from('noticias');
      $this->db->where('id = '.$id);
      return $this->db->get()->result();
  }

  public function adicionar($titulo, $link, $data){
      $dados['titulo'] = $titulo;
      $dados['link'] = $link;
      $dados['data'] = $data;
      return $this->db->insert('noticias',$dados);
  }

  public function remover($id){
      $this->db->where('id',$id);
      return $this->db->delete('noticias');
  }

  public function alterar($id, $titulo, $link, $data){
      $dados['titulo'] = $titulo;
      $dados['link'] = $link;
      $dados['data'] = $data;
      $this->db->where('id',$id);
      return $this->db->update('noticias',$dados);
  }
}
