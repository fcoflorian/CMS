<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Galeria_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = null){
		if($id != null){
			$data['foto'] = $this->Galeria_model->cargarUnaFoto($id);
		}

		$data['fotos'] = $this->Galeria_model->cargarFotos();
		
		$this->load->view('vista/galeria_view', $data);
	}

	public function guardarFoto(){
		if($_POST){
			if($this->Galeria_model->guardarFoto($_POST)){
				redirect('Galeria_controller/index');
			}
		}
	}

	public function editarFoto($id = null){
		if($id != null){
			if($this->Galeria_model->editarFoto($id, $_POST)){
				redirect('Galeria_controller/index');
			}
		}
	}
}