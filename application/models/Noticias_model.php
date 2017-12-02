<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias_model extends CI_Model {
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

	public function cargarNoticias(){
		$query = $this->db->get('noticias');
		return $query->result_array();
	}

	public function cargarUnaNoticia($id = null){
		if($id != null){
			$query = $this->db->get_where('noticias', array('id' => $id));
			return $query->row_array();
		}
	}

	public function cargarComentarios(){
		$query = $this->db->get('comentarios');
		return $query->result_array();
	}

	public function guardarComentario($comentario){
		if($comentario['comentario'] != null){
			if($this->db->insert('comentarios', $comentario)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($comentario, 'Debe comentar algo');
		}
	}

	public function guardarNoticia($noticia){
		$noticia['imagen'] = $this->guardarImagen('imagen');
		$noticia['fecha'] = date('Y-m-d h:i:s');
		if($noticia['titulo'] != null && $noticia['texto'] != null && $noticia['imagen'] != null){
			if($this->db->insert('noticias', $noticia)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($noticia, 'Todos los campos son obligatorios');
		}
	}

	public function editarNoticia($id = null, $noticia){
		if($id != null){
			$noticia['fecha'] = date('Y-m-d h:i:s');
			if($noticia['titulo'] != null && $noticia['descripcion'] != null){
				$nombreImagen = $this->guardarImagen('imagen');
				if($nombreImagen != null){
					$noticia['imagen'] = $nombreImagen;
				}	
				$this->db->where('id', $id);
				if($this->db->update('noticias', $noticia)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($noticia, 'Todos los campos son obligatorios');
			}
		}
	}

	public function borrarNoticia($id = null){
		if($id != null){
			return $this->db->delete('noticias', array('id' => $id));
		}
	}
}