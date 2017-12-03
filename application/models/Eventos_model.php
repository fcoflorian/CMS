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
		return $query->result_array();
	}

	public function cargarUnEvento($id = null){
		if($id != null){
			$query = $this->db->get_where('eventos', array('id' => $id));
			$evento = $query->row_array();
			if($evento){
				$query = $this->db->get_where('asistencia_eventos', array('id_usuario' => $this->session->userdata('id'), 'id_evento' => $evento['id']));
				$asistencia = $query->row_array();
				if($asistencia){
					$asistencia = true;
				} else {
					$asistencia = false;
				}
			}

			return array($evento, $asistencia);
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

	public function desasistirAEvento($id = null){
		if($id != null){
			if($this->db->delete('asistencia_eventos', array('id_usuario' => $this->session->userdata('id'), 'id_evento' => $id))){
				return true;
			}else{
				return false;
			}
		}
	}
}