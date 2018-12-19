<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cursos_model extends CI_Model {

  // Variáveis de instância da classe notícias - vindo do banco de dados.
  public $id;
  public $titulo;
  public $descricao;
  public $video;
  public $link;
  public $atuacao;
  public $modalidade;
  public $duracao;
  public $vagas;
  public $turno;
  public $info;

	public function __construct(){
		parent::__construct();
	}

    public function listar_cursos(){
        $this->db->order_by('modalidade','ASC');
        $this->db->order_by('titulo','ASC');
        return $this->db->get('cursos')->result();
    }

    public function listar_curso($id){
        $this->db->from('cursos');
        $this->db->where('cursos.id',$id);
        return $this->db->get()->result();
    }

    public function conteudo_curso($id){
        $this->db->select('cursos.id, cursos.titulo, cursos.descricao, cursos.video, cursos.link, cursos.atuacao, cursos.modalidade, cursos.duracao, cursos.vagas, cursos.turno, cursos.info');
        $this->db->from('cursos');
        $this->db->where('id = '.$id);
        return $this->db->get()->result();
    }

    public function adicionar($titulo, $descricao, $video, $new_name, $atuacao, $modalidade, $duracao, $vagas, $turno, $info){
        $dados['titulo'] = $titulo;
        $dados['descricao'] = $descricao;
        $dados['video'] = $video;
        $dados['link'] = $new_name;
        $dados['atuacao'] = $atuacao;
        $dados['modalidade'] = $modalidade;
        $dados['duracao'] = $duracao;
        $dados['vagas'] = $vagas;
        $dados['turno'] = $turno;
        $dados['info'] = $info;
        return $this->db->insert('cursos',$dados);
    }

    public function remover($id, $link){
        $this->db->where('id',$id);
        return $this->db->delete('cursos');
    }

    public function alterar($id, $titulo, $descricao, $video, $atuacao, $modalidade, $duracao, $vagas, $turno, $info){
        $dados['titulo'] = $titulo;
        $dados['descricao'] = $descricao;
        $dados['video'] = $video;
        $dados['atuacao'] = $atuacao;
        $dados['modalidade'] = $modalidade;
        $dados['duracao'] = $duracao;
        $dados['vagas'] = $vagas;
        $dados['turno'] = $turno;
        $dados['info'] = $info;
        $this->db->where('id',$id);
        return $this->db->update('cursos',$dados);
    }

    public function nova_matriz($id, $new_name)
    {
      $dados['link'] = $new_name;
      $this->db->where('id',$id);
      return $this->db->update('cursos',$dados);
    }
}
