<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Funcionarios_model', 'modelfuncionarios'); // Acesso ao model.
	}

	public function index(){
        
        $this->load->model('colegiados_model', 'modelcolegiados'); // Acesso ao model.
		$this->load->model('noticias_model','modelnoticias'); // Acessoa ao model.
		$this->load->model('cursos_model','modelcursos'); // Acessoa ao model.
		$this->load->model('Posgraduacao_model','modelposgraduacao'); // Acessoa ao model.
		$this->load->model('Departamentos_model','modeldepartamentos'); // Acessoa ao model.v
		$this->load->model('Colegiados_model','modelcolegiados'); // Acessoa ao model.
		$this->load->model('Diretoria_model','modeldiretoria'); // Acessoa ao model.
		$this->load->model('Salas_model','modelsalas'); // Acessoa ao model.
		$this->load->model('Mapa_model','modelmapa'); // Acessoa ao model.

		$dados['listacursos'] = $this->modelcursos->listar_cursos();
		//$dados['noticias'] = $this->modelnoticias->noticias_home(); // Traz os dados do model noticias_model.
		$dados['departamentos'] = $this->modeldepartamentos->listar_depts();
		$dados['colegiados'] = $this->modelcolegiados->listar_colegiados();
		$dados['posgraduacao'] = $this->modelposgraduacao->listar_cursos();
		$dados['mapas'] = $this->modelmapa->listar_mapas();
		$dados['diretoria'] = $this->modeldiretoria->listar_nomes();
		$dados['salas'] = $this->modelsalas->listar_salas();
		$dados['titulo'] = 'ICEB';
		$dados['subtitulo'] = 'Funcionários';		 

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header-outraspaginas');

    	$this->load->view('frontend/funcionarios');
		$this->load->view('frontend/template/aside');

		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	

	}


}
?>
