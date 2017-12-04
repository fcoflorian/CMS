<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarUltimas5Noticias(){
		$query = $this->db->query('SELECT * FROM noticias ORDER BY fecha DESC LIMIT 5');
		return $query->result_array();
	}

	public function cargarEventos(){
		$sql = 'SELECT *, 3956 * 2 * ASIN(SQRT(POWER(SIN((? - abs(eventos.latitud)) * pi()/180 / 2),2) + COS(? * pi()/180) * COS(abs(eventos.latitud) *  pi()/180) * POWER(SIN((? - eventos.longitud) *  pi()/180/2), 2) )) as distance FROM eventos having distance < 20 ORDER BY distance limit 5;';
		$query = $this->db->query($sql, array($this->session->userdata('latitud'), $this->session->userdata('latitud'), $this->session->userdata('longitud')));
		return $query->result_array();
	}

	public function cargarUltimos5Anuncios(){
		$query = $this->db->query('SELECT * FROM clasificados ORDER BY fecha DESC LIMIT 5');
		return $query->result_array();
	}
}