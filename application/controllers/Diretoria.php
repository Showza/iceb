<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diretoria extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{


		$this->load->model('noticias_model','modelnoticias'); // Acessoa ao model.
		$this->load->model('cursos_model','modelcursos'); // Acessoa ao model.
		$this->load->model('Posgraduacao_model','modelposgraduacao'); // Acessoa ao model.
		$this->load->model('Departamentos_model','modeldepartamentos'); // Acessoa ao model.v
		$this->load->model('Salas_model','modelsalas'); // Acessoa ao model.

		$dados['listacursos'] = $this->modelcursos->listar_cursos();
	
		//$dados['noticias'] = $this->modelnoticias->noticias_home(); // Traz os dados do model noticias_model.
		$dados['departamentos'] = $this->modeldepartamentos->listar_depts();
		$dados['posgraduacao'] = $this->modelposgraduacao->listar_cursos();
		$dados['salas'] = $this->modelsalas->listar_salas();

		$this->load->model('diretoria_model','modeldiretoria'); // Acessoa ao model.
		$dados['diretoria'] = $this->modeldiretoria->listar_nomes(); // Traz os dados do model diretoria_model.

		$dados['titulo']= 'ICEB';
    	$dados['subtitulo'] = 'Diretoria';

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header-outraspaginas');

    	$this->load->view('frontend/diretoria_page');
		$this->load->view('frontend/template/aside');

		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}


}
?>