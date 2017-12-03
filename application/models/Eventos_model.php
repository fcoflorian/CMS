<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_model extends CI_Model {
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

	public function cargarEventos(){
		$query = $this->db->get('eventos');
		$result = $query->result_array();
		foreach($result as $evento){
			$query = $this->db->get_where('asistencia_eventos', array('id_usuario' => $this->session->userdata('id'), 'id_evento' => $evento['id']));
			if($query->row_array()){
				$result['asistencia'] = true;
			}
		}
		return $result;
	}

	public function cargarUnEvento($id = null){
		if($id != null){
			$query = $this->db->get_where('eventos', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarEvento($evento){
		$evento['imagen'] = $this->guardarImagen('imagen');
		if($evento['titulo'] != null && $evento['descripcion'] != null && $evento['hora'] != null && $evento['imagen'] != null && $evento['latitud'] != null && $evento['longitud'] != null){
			if($this->db->insert('eventos', $evento)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($evento, 'Todos los campos son obligatorios');
		}
	}

	public function editarEvento($id = null, $evento){
		if($id != null){
			if($evento['titulo'] != null && $evento['descripcion'] != null && $evento['hora'] != null && $evento['latitud'] != null && $evento['longitud'] != null){
				$nombreImagen = $this->guardarImagen('imagen');
				if($nombreImagen != null){
					$evento['imagen'] = $nombreImagen;
				}	
				$this->db->where('id', $id);
				if($this->db->update('eventos', $evento)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($evento, 'Todos los campos son obligatorios');
			}
		}
	}

	public function borrarEvento($id = null){
		if($id != null){
			return $this->db->delete('eventos', array('id' => $id));
		}
	}

	public function asistirAEvento($id = null){
		if($id != null){
			if($this->db->insert('asistencia_eventos', array('id_usuario' => $this->session->userdata('id'), 'id_evento' => $id))){
				return true;
			}else{
				return false;
			}
		}
	}
}