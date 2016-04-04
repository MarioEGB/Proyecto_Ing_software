<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class CMC extends CI_Controller {

	function _construct(){
		parent::__construct();
	}


function index(){
	$dato['titulo']= 'Home';
	$this->load->model('CompuMaxDBM');
	$query['datos']=$this->CompuMaxDBM->datosMenu();
	//$this->load->library('Menu',$query);
	//$dato2['menu']= $this->menu->crear_menu();
	$this->load->view('headers',$dato);
	$this->load->view('Principal',$query);
}

function Carrito(){
	$dato['titulo']= 'Carrito';
	$this->load->view('Proyecto/headers',$dato);
	$this->load->view('Proyecto/Principal');
}

function TerminarCompra(){

}

function Cobro(){

}

function verProducto(){

}	

}

?>