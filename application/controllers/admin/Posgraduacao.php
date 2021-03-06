<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posgraduacao extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

        $this->load->model('Posgraduacao_model','modelpos'); // Acessoa ao model.

	}

	public function index()
	{

        $this->load->library('table');
        $dados['cursos'] = $this->modelpos->listar_cursos(); // Traz os dados do model noticias_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Pós-graduação';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/posgraduacao');

		$this->load->view('backend/template/html-footer');
	}
    public function inserir()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-curso','Nome',
            'required|min_length[3]');        
     $this->form_validation->set_rules('txt-link','Link',
            'required|min_length[10]');
     $this->form_validation->set_rules('txt-video','Link do video',
            'required|min_length[10]');
        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $titulo = $this->input->post('txt-curso');
            $link = $this->input->post('txt-link');
             $video = $this->input->post('txt-video');


            if($this->modelpos->adicionar($titulo, $link, $video)){
                redirect(base_url('admin/posgraduacao'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function remover($id)
    {
        if($this->modelpos->remover($id)){
            redirect(base_url('admin/posgraduacao'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }

    public function pagina_alterar($id)
    {
        $this->load->library('table');
        $dados['cursos'] = $this->modelpos->listar_curso($id); // Traz os dados do model noticias_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Pós - Graduação';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_pos_graduacao');

		$this->load->view('backend/template/html-footer');
    }

    public function alterar($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-curso','Nome',
            'required|min_length[3]');

        $this->form_validation->set_rules('txt-link','Link',
            'required|min_length[10]');

         $this->form_validation->set_rules('txt-video','Link do Video',
            'required|min_length[10]');
        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $titulo = $this->input->post('txt-curso');
            $link = $this->input->post('txt-link');
            $video = $this->input->post('txt-video');
            if($this->modelpos->alterar($id, $titulo,  $link, $video)){
                redirect(base_url('admin/posgraduacao'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

}


?>
