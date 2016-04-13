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

function deleteCategoria($id){
	$this->db->delete('categoria',array('idCategoria'=>$id));
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

function carroAux($id){
	$query= $this->db->get_where('producto', array('idProducto' => $id));
	$array=array('nombre_articulo'=>$query->result()[0]->nombreProducto,'num_articulos'=>1,'precio'=>$query->result()[0]->precio);

	$this->db->insert('aux_carrito',$array);
	 redirect(base_url()."CMC");
}

function retCarrito(){
	$query = $this->db->get('aux_carrito');
		return $query;
}

function deleteCarrito(){
	$query = $this->db->get('aux_carrito');
	foreach ($query->result() as $row) {
		$this->db->delete('aux_carrito',array('id'=>$row->id));
	}
	redirect(base_url()."CMC/Carrito"); 
}

function deleteCarrito2(){
	$query = $this->db->get('aux_carrito');
	foreach ($query->result() as $row) {
		$this->db->delete('aux_carrito',array('id'=>$row->id));
	}
}

function generarReportes(){
	$query= $this->db->get('carrito');
	return $query;
	}

function compra(){
	$query= $this->db->get('aux_carrito');
	foreach ($query->result() as $row ) {
		$array=array('cantidadArticulos'=> $row->num_articulos,'fecha'=>date("Y-m_d H:i:s"),'nombre_articulo'=>$row->nombre_articulo,'precio'=>$row->precio);
		$this->db->insert('carrito',$array);
	}
	$this->CompuMaxDBM->deleteCarrito2();
	 redirect(base_url()."CMC");
}	

}

?>	