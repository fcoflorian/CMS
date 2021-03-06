<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miembros_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Miembros_model');
		$this->load->model('Index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		$data['miembros'] = $this->Miembros_model->cargarMiembros();

		$data['parametros'] = $this->Index_model->cargarParametros();
		
		$this->load->view('vista/miembros_view', $data);
	}

	public function registrarMiembro(){
		if($_POST){
			$guardar = $this->Miembros_model->guardarMiembro($_POST);
			if($guardar[0]){
				redirect('Index_controller/index');
			}else{
				$data['errorRegistro'] = $guardar[1];
				$data['miembro'] = $guardar[2];

				$data['parametros'] = $this->Index_model->cargarParametros();

				$this->load->view('vista/header', isset($data)?$data:'');
			}
		}
	}

	public function iniciarSesion(){
		if($_POST){
			if($this->Miembros_model->iniciarSesion($_POST)){
				redirect('Index_controller/index');
			}else{
				$data['cedula'] = $_POST['cedula'];
				$data['errorLogin'] = 'Cedula incorrecta';

				$data['parametros'] = $this->Index_model->cargarParametros();		

				$this->load->view('vista/header', isset($data)?$data:'');	
			}
		}
	}

	public function cerrarSesion(){
		$this->session->sess_destroy();
		redirect('Index_controller/index');
	}

	public function hacerAdmin($id = null){
		if($id != null){
			if($this->Miembros_model->hacerAdmin($id)){
				redirect('Miembros_controller/index');
			}
		}
	}

	public function exportarMiembros(){
		$this->Miembros_model->exportarMiembros();
		redirect('Miembros_controller/index');
	}

	public function miPerfil(){
		$data['parametros'] = $this->Index_model->cargarParametros();
		$this->load->view('vista/mi_perfil', $data);
	}
}