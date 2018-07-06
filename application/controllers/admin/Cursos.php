<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

        $this->load->model('cursos_model','modelcursos'); // Acessoa ao model.

	}

	public function index()
	{

    $this->load->library('table');
    $dados['cursos'] = $this->modelcursos->listar_cursos(); // Traz os dados do model noticias_model.

		$dados['titulo']= 'Painel Administrativo';
    $dados['subtitulo'] = 'Cursos';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
    $this->load->view('backend/cursos');

		$this->load->view('backend/template/html-footer');
	}

	public function nova_matriz($id){
			$link = $_FILES['txt-link'];
			$original_name = $_FILES['txt-link']['name'];
			$new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
			$configuracao['upload_path'] = './assets/arquivos/matrizes';
			$configuracao['allowed_types'] = 'pdf';
			$configuracao['file_name'] = $new_name;
			$configuracao['overwrite'] = TRUE;
			$this->load->library('upload', $configuracao);
			$this->upload->overwrite = true;
			$this->upload->initialize($configuracao);

			if($this->upload->do_upload('txt-link')){
				if($this->modelcursos->nova_matriz($id, $new_name)){
					redirect(base_url('admin/cursos'));
				}
			}
			else{
				echo "Houve um erro no sistema!";
				echo $this->upload->display_errors();
			}
	}

		public function pagina_matriz($id)
    {
        $this->load->library('table');
        $dados['cursos'] = $this->modelcursos->listar_curso($id); // Traz os dados do model noticias_model.

				$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Cursos';

				$this->load->view('backend/template/html-header', $dados);

				$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_matriz');

				$this->load->view('backend/template/html-footer');
    }



    public function inserir()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-curso','Nome do Curso',
            'required|min_length[3]');
        $this->form_validation->set_rules('txt-descricao','Descricao',
            'required|min_length[20]');
        $this->form_validation->set_rules('txt-video','Link do Video',
            'required|min_length[10]');
        $this->form_validation->set_rules('txt-link','Matriz Curricular'
          	);
        $this->form_validation->set_rules('txt-atuacao','Area de Atuacao',
            'required|min_length[20]');
        $this->form_validation->set_rules('txt-modalidade','Modalidade',
            'required|min_length[2]');
        $this->form_validation->set_rules('txt-duracao','Duracao',
            'required');
        $this->form_validation->set_rules('txt-vagas','Vagas',
            'required');
        $this->form_validation->set_rules('txt-turnos','Turnos',
            'required');
        $this->form_validation->set_rules('txt-info','Informacoes reconhecimento de curso',
            'required|min_length[15]');
        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $titulo = $this->input->post('txt-curso');
            $descricao = $this->input->post('txt-descricao');
            $video = $this->input->post('txt-video');

            $link = $_FILES['txt-link'];
						$original_name = $_FILES['txt-link']['name'];
						$new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');;
						$configuracao['upload_path'] = './assets/arquivos/matrizes/';
						$configuracao['allowed_types'] = 'pdf';
						$configuracao['file_name'] = $new_name;
						$this->load->library('upload', $configuracao);
						$this->upload->initialize($configuracao);

            $atuacao = $this->input->post('txt-atuacao');
            $modalidade = $this->input->post('txt-modalidade');
            $duracao = $this->input->post('txt-duracao');
            $vagas = $this->input->post('txt-vagas');
            $turno = $this->input->post('txt-turnos');
            $info = $this->input->post('txt-info');

						if($this->upload->do_upload('txt-link')){
							if($this->modelcursos->adicionar($titulo, $descricao, $video, $new_name, $atuacao, $modalidade, $duracao, $vagas, $turno, $info)){
	                redirect(base_url('admin/cursos'));
	            }
						}
            else{
                echo "Houve um erro no sistema!";
								echo $this->upload->display_errors();
            }
        }
    }

    public function remover($id)
    {
        if($this->modelcursos->remover($id)){
            redirect(base_url('admin/cursos'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }

    public function pagina_alterar($id)
    {
        $this->load->library('table');
        $dados['cursos'] = $this->modelcursos->listar_curso($id); // Traz os dados do model noticias_model.

				$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Cursos';

				$this->load->view('backend/template/html-header', $dados);

				$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_cursos');

				$this->load->view('backend/template/html-footer');
    }

    public function alterar($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-curso','Nome do Curso',
            'required|min_length[3]');
        $this->form_validation->set_rules('txt-descricao','Descricao',
            'required|min_length[20]');
        $this->form_validation->set_rules('txt-video','Link do Video',
            'required|min_length[10]');
        $this->form_validation->set_rules('txt-atuacao','Area de Atuacao',
            'required|min_length[20]');
        $this->form_validation->set_rules('txt-modalidade','Modalidade',
            'required|min_length[2]');
        $this->form_validation->set_rules('txt-duracao','Duracao',
            'required');
        $this->form_validation->set_rules('txt-vagas','Vagas',
            'required');
        $this->form_validation->set_rules('txt-turnos','Turnos',
            'required');
        $this->form_validation->set_rules('txt-info','Informacoes reconhecimento de curso',
            'required|min_length[15]');
        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $titulo = $this->input->post('txt-curso');
            $descricao = $this->input->post('txt-descricao');
            $video = $this->input->post('txt-video');
            $atuacao = $this->input->post('txt-atuacao');
            $modalidade = $this->input->post('txt-modalidade');
            $duracao = $this->input->post('txt-duracao');
            $vagas = $this->input->post('txt-vagas');
            $turno = $this->input->post('txt-turnos');
            $info = $this->input->post('txt-info');

            if($this->modelcursos->alterar($id, $titulo, $descricao, $video, $atuacao, $modalidade, $duracao, $vagas, $turno, $info)){
                redirect(base_url('admin/cursos'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

}


?>
