<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Noticias_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($paginaActual = 1){
		if($_POST['comentario']){
			$comentario = $this->Noticias_model->guardarComentario($_POST);
			if(count($comentario) > 0){
				$data['error'] = $comentario[1];
			}
		}

		$data['noticias'] = $this->Noticias_model->cargarNoticias();

		$data['numeroDePaginas'] = ceil(count($data['noticias'])/10);
		$data['paginaActual'] = $paginaActual;

		$data['comentarios'] = $this->Noticias_model->cargarComentarios();
		
		$this->load->view('vista/noticia_view', $data);
	}

	public function verNoticia($id = null){
		if($id != null){
			$data['noticia'] = $this->Noticias_model->cargarUnaNoticia($id);

			$this->load->view('vista/ver_noticia_view', $data);
		}
	}
}