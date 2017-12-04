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
		$data['eventos'] = $this->Index_model->cargarEventos();
		$data['clasificados'] = $this->Index_model->cargarUltimos5Anuncios();
		
		$this->load->view('vista/index_view', $data);
		
	}
}
