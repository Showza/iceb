<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colegiados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

        $this->load->model('Colegiados_model','modelcole'); // Acessoa ao model.

	}

	public function index()
	{

        $this->load->library('table');
        $dados['colegiados'] = $this->modelcole->listar_colegiados(); // Traz os dados do model Colegiados_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Colegiados';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/colegiados');

		$this->load->view('backend/template/html-footer');
	}

    public function inserir()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');
        $this->form_validation->set_rules('txt-sigla','Sigla','required|min_length[3]');
        $this->form_validation->set_rules('txt-linkC','Link do curso','required|min_length[3]');
        $this->form_validation->set_rules('txt-linkM','Link da matriz','required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $titulo = $this->input->post('txt-nome');
            $sigla = $this->input->post('txt-sigla');
            $linkC = $this->input->post('txt-linkC');
            $linkM = $this->input->post('txt-linkM');

            if($this->modelcole->adicionar($titulo, $sigla, $linkC, $linkM)){
                redirect(base_url('admin/Colegiados'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function remover($id)
    {
        if($this->modelcole->remover($id)){
            redirect(base_url('admin/Colegiados'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }

    public function pagina_alterar($id)
    {
        $this->load->library('table');
        $dados['colegiados'] = $this->modelcole->listar_colegiado($id); // Traz os dados do model colegiados_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Colegiados';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_Colegiados');

		$this->load->view('backend/template/html-footer');
    }

    public function alterar($id)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');
        $this->form_validation->set_rules('txt-sigla','Sigla','required|min_length[3]');
        $this->form_validation->set_rules('txt-linkC','Link do curso','required|min_length[3]');
        $this->form_validation->set_rules('txt-linkM','Link da matriz','required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $titulo = $this->input->post('txt-nome');
            $sigla = $this->input->post('txt-sigla');
            $linkC = $this->input->post('txt-linkC');
            $linkM = $this->input->post('txt-linkM');


            if($this->modelcole->alterar($id, $titulo, $sigla, $linkC, $linkM)){
                redirect(base_url('admin/colegiados'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

}


?>
