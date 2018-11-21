<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index($id, $slug=null)
	{

		$this->load->model('noticias_model','modelnoticias'); // Acessoa ao model.
		$this->load->model('cursos_model','modelcursos'); // Acessoa ao model.
		$this->load->model('Posgraduacao_model','modelposgraduacao'); // Acessoa ao model.
		$this->load->model('Departamentos_model','modeldepartamentos'); // Acessoa ao model.v
		$this->load->model('Colegiados_model','modelcolegiados'); // Acessoa ao model.		
		$this->load->model('Salas_model','modelsalas'); // Acessoa ao model.
		$this->load->model('Mapa_model','modelmapa'); // Acessoa ao model.
		$dados['mapas'] = $this->modelmapa->listar_mapas();

		$dados['listacursos'] = $this->modelcursos->listar_cursos();
		$dados['cursos'] = $this->modelcursos->listar_curso($id);

		//$dados['noticias'] = $this->modelnoticias->noticias_home(); // Traz os dados do model noticias_model.
		$dados['departamentos'] = $this->modeldepartamentos->listar_depts();
		$dados['listacolegiados'] = $this->modelcolegiados->listar_colegiados();		
		$dados['posgraduacao'] = $this->modelposgraduacao->listar_cursos();
		$dados['salas'] = $this->modelsalas->listar_salas();


		$dados['titulo'] = 'ICEB';
    	$dados['subtitulo'] = 'Cursos';

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header-outraspaginas');

    	$this->load->view('frontend/cursos');
		$this->load->view('frontend/template/aside');

		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}


}
?>
