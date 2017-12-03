<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Noticias_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($paginaActual = 1, $id = null){
		if(isset($_POST['comentario'])){
			$comentario = $this->Noticias_model->guardarComentario($_POST);
			if(count($comentario) > 0){
				$data['error'] = $comentario[1];
			}
		}

		$data['noticias'] = $this->Noticias_model->cargarNoticias();

		$data['numeroDePaginas'] = ceil(count($data['noticias'])/10);
		$data['paginaActual'] = $paginaActual;
		
		$this->load->view('vista/noticia_view', $data);
	}

	public function verNoticia($id = null){
		if($id != null){
			$data['noticia'] = $this->Noticias_model->cargarUnaNoticia($id);

			$this->load->view('vista/ver_noticia_view', $data);
		}
	}

	public function guardarNoticia($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Noticias_model->guardarNoticia($_POST);
				if(count($guardar) > 0){
					$data['noticia'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarNoticia($id);
			}
		} else {
			$data['noticia'] = $this->Noticias_model->cargarUnaNoticia($id);
		}

		$this->load->view('vista/admin/noticia', $data);
	}

	public function editarNoticia($id = null){
		if($id != null){
			$editar = $this->Noticias_model->editarNoticia($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}

	public function borrarNoticia($id = null){
		if($id != null){
			$this->Noticias_model->borrarNoticia($id);
			redirect('Noticias_controller/index');
		}
	}
}