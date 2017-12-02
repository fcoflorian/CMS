<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_model extends CI_Model {
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

	public function cargarFotos(){
		$query = $this->db->get('fotos');
		return $query->result_array();
	}

	public function cargarUnaFoto($id = null){
		if($id != null){
			$query = $this->db->get_where('fotos', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarFoto($foto){
		$foto['foto'] = $this->guardarImagen('foto');
		if($foto['nombre'] != null && $foto['descripcion'] != null && $foto['foto'] != null){
			if($this->db->insert('fotos', $foto)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($foto, 'Todos los campos son obligatorios');
		}
	}

	public function editarFoto($id = null, $foto){
		if($id != null){
			if($foto['nombre'] != null && $foto['descripcion'] != null){
				$nombreImagen = $this->guardarImagen('foto');
				if($nombreImagen != null){
					$foto['foto'] = $nombreImagen;
				}	
				$this->db->where('id', $id);
				if($this->db->update('fotos', $foto)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($foto, 'Todos los campos son obligatorios');
			}
		}
	}

	public function borrarFoto($id = null){
		if($id != null){
			return $this->db->delete('fotos', array('id' => $id));
		}
	}
}