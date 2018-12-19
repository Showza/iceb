<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
		parent::__construct();

		
		$this->load->model('Upload_model', 'modelupload'); // Acesso ao model.
	}

	public function index($id, $slug=null){

		$this->load->model('noticias_model','modelnoticias'); // Acessoa ao model.
		$this->load->model('cursos_model','modelcursos'); // Acessoa ao model.
		$this->load->model('Posgraduacao_model','modelposgraduacao'); // Acessoa ao model.
		$this->load->model('Departamentos_model','modeldepartamentos'); // Acessoa ao model.v
		$this->load->model('Colegiados_model','modelcolegiados'); // Acessoa ao model.
		$this->load->model('Upload_model','modelupload'); // Acessoa ao model.
		$this->load->model('Diretoria_model','modeldiretoria'); // Acessoa ao model.
		$this->load->model('Salas_model','modelsalas'); // Acessoa ao model.
		$this->load->model('Mapa_model','modelmapa'); // Acessoa ao model.

		$dados['listacursos'] = $this->modelcursos->listar_cursos();
		$dados['departamentos'] = $this->modeldepartamentos->listar_depts();
		$dados['listacolegiados'] = $this->modelcolegiados->listar_colegiados();
		$dados['colegiados'] = $this->modelcolegiados->listar_colegiado($id);
		$dados['funcionarios'] = $this->modelfuncionarios->conteudo_funcionario($id);
		$dados['listauploads'] = $this->modelupload->listar_uploads();
		$dados['uploads'] = $this->modelupload->listar_upload($id);
        $dados['posgraduacao'] = $this->modelposgraduacao->listar_cursos();
		$dados['mapas'] = $this->modelmapa->listar_mapas();
		$dados['diretoria'] = $this->modeldiretoria->listar_nomes();
		$dados['salas'] = $this->modelsalas->listar_salas();
		$dados['titulo'] = 'ICEB';
		$dados['subtitulo'] = 'Documentos';		 

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header-outraspaginas');
    	$this->load->view('frontend/upload');
		$this->load->view('frontend/template/aside');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	

	}


}
?>
