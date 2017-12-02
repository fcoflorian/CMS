<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miembros_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Miembros_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		$data['miembros'] = $this->Miembros_model->cargarMiembros();
		
		$this->load->view('vista/miembros_view', $data);
	}

	public function verMiembro($id = null){
		if($id != null){
			$data['miembro'] = $this->Miembros_model->cargarUnMiembro($id);

			$this->load->view('vista/ver_miembro_view', $data);
		}
	}

	public function registrarMiembro(){
		if($_POST){
			$guardar = $this->Miembros_model->guardarMiembro($_POST);
			if($guardar[0]){
				redirect("Index_controller/index");
			}else{
				$data['error'] = $guardar[1];
				$data['miembro'] = $guardar[2];
			}
		}
		$data['data'] = null;

		$this->load->view('vista/register_view', $data);
	}

	public function iniciarSesion(){
		if($_POST){
			if($this->Miembros_model->iniciarSesion($_POST)){
				redirect('Index_controller/index');
			}else{
				$data['cedula'] = $_POST['cedula'];
				$data['error'] = 'Cedula incorrecta';			
			}
		}

		$this->load->view('vista/login_view', $data);
	}
}
?>