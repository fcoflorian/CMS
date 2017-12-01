<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		$data['noticias'] = $this->Index_model->cargarUltimas5Noticias();
		$this->load->view('vista/index_view', $data);
		//$this->load->view('vista/miembros_view');
		//$this->load->view('vista/login_view');
		//$this->load->view('vista/register_view');
		//$this->load->view('vista/clasificados_view');
		//$this->load->view('vista/noticia_view');
		//$this->load->view('vista/eventos_view');
	}
}
