<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarUltimas5Noticias()
	{
		$query = $this->db->get('noticias');
		return $query->result_array();
	}
}