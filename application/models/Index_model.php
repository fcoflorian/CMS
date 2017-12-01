<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarUltimas5Noticias(){
		$query = $this->db->limit(5)
				->get('noticias');
		return $query->result_array();
	}

	public function cargarEventos(){
		$query = $this->db->get('eventos');
		return $query->result_array();
	}

	public function cargarUltimos5Anuncios(){
		$query = $this->db->limit(5)
				->get('anuncios');
		return $query->result_array();
	}
}