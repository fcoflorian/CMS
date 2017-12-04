<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function guardarImagen($nombreCampo){
		$target_dir = "imagenes/";
		$target_file = $target_dir . basename($_FILES[$nombreCampo]["name"]);

		if($_FILES[$nombreCampo]['name']){
			$nombreImagen = basename($_FILES[$nombreCampo]['name']);
		}else{
			$nombreImagen = null;
		}
		move_uploaded_file($_FILES[$nombreCampo]["tmp_name"], $target_file);

		return $nombreImagen;
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

	public function cargarParametros(){
		$query = $this->db->get('parametros');
		return $query->row_array();
	}

	public function guardarParametros($parametros){
		$parametros['favicon'] = $this->guardarImagen('favicon');
		if($parametros['nombre_equipo'] != null && $parametros['titulo'] != null && $parametros['favicon'] != null){
			if($this->db->insert('parametros', $parametros)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($parametros, 'Todos los campos son obligatorios');
		}
	}

	public function editarParametros($id = null, $parametros){
		if($id != null){
			if($parametros['nombre_equipo'] != null && $parametros['titulo'] != null){
				$nombreImagen = $this->guardarImagen('favicon');
				if($nombreImagen != null){
					$parametros['favicon'] = $nombreImagen;
				}	
				$this->db->where('id', $id);
				if($this->db->update('parametros', $parametros)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($parametros, 'Todos los campos son obligatorios');
			}
		}
	}
}