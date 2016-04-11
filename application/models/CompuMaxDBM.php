<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class CompuMaxDBM extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


function addCategoria($data){
	 $this->db->insert('categoria',$data);
	 redirect(base_url()."CMC/adminCategorias");
}	

function validarDatos($data){
		$query = $this->db->get('administrador');
		if($query->num_rows()>0){
		 foreach ($query->result() as $row){
		 	if(($row->usuario == $data['nombre']) && ($row->contraseña == $data['password'])){
		 		redirect(base_url()."CMC/adminPrincipal");
		 	}
		 }
		}
		redirect(base_url()."CMC/Login");
	}

function datosMenu(){
	$query = $this->db->get('categoria');
	if($query->num_rows() >0){
	return $query;
	}else{
		return false;
	}
	}

function getCategorias(){
	$query = $this->db->get('categoria');
	return $query;
}

function updateCategoria($data,$id){
	 $query= $this->db->get('categoria');
	 $this->db->where('idCategoria', $id);
	 	if($row->nombreCategoria!=$data){
	 		$datos=array('nombreCategoria'=> $data);
	 		$this->db->update('categoria', $datos);
	 }
	 redirect(base_url()."CMC/adminCategorias");
}	

function deleteCategoria($data){
	$query= $this->db->get('categoria');
	foreach ($query->result() as $row ) {
		if($row->nombreCategoria==$data){
			$id=$row->idCategoria;
		}
	}

	$this->db->delete('categoria', array('idCategoria' => $id));
	redirect(base_url()."CMC/adminCategorias"); 
}

function datosProd($id){
	$query= $this->db->get_where('producto', array('idProducto' => $id));
	return $query;
}

function productos($dep){
if($dep['dep']=="Computadoras"){
	$query = $this->db->get_where('producto','Categoria_idCategoria=1',$dep['per_page'],$this->uri->segment(3));
	if($query->num_rows() >0){
	return $query;
	}else{
		return false;
	}
}if($dep['dep']=="Tablets"){
	$query = $this->db->get_where('producto','Categoria_idCategoria=2',$dep['per_page'],$this->uri->segment(3));
	if($query->num_rows() >0){
	return $query;
	}else{
		return false;
	}
}if($dep['dep']=="Laptops"){
	$query = $this->db->get_where('producto','Categoria_idCategoria=3',$dep['per_page'],$this->uri->segment(3));
	if($query->num_rows() >0){
	return $query;
	}else{
		return false;
	}
}	

}

function num_filas($dep){
	if($dep=="Computadoras"){
	$query = $this->db->get_where('producto','Categoria_idCategoria=1');
	return$query->num_rows();
}if($dep=="Tablets"){
	$query = $this->db->get_where('producto','Categoria_idCategoria=2');
	return$query->num_rows();
}if($dep=="Laptops"){
	$query = $this->db->get_where('producto','Categoria_idCategoria=3');
	return$query->num_rows();
}	
}


function num_filas_cat(){
	$query = $this->db->get('categoria');
	return$query->num_rows();
}
	
}

?>	