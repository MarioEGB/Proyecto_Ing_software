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
	$this->load->view('headers',$dato);
	$this->load->view('Principal',$query);
}

function Carrito(){
	$dato['titulo']= 'Carrito';
	$this->load->library('table');
	$this->load->model('CompuMaxDBM');
	$this->load->helper('form');
	$data['datos']=$this->CompuMaxDBM->retCarrito();
	$this->load->view('headers',$dato);
	$this->load->view('Carrito',$data);
}

function agregarCarrito(){
	$this->load->model('CompuMaxDBM');
	$id=$this->input->post('id');
	$this->CompuMaxDBM->carroAux($id);
}

function Productos(){
	$dep=$this->uri->segment(2);
	$this->load->model('CompuMaxDBM');
	$this->load->library('pagination');
	$config['base_url'] = base_url()."CMC/".$this->uri->segment(2);
	$config['total_rows']=$this->CompuMaxDBM->num_filas($dep);
	$config['per_page']= 4;
	$config['num_links']=5;
	$config['first_link']='Primero';
	$config['last_link']='Ultimo';
	$config['next_link']='Siguiente';
	$config['prev_link']='Anterior';

	$config['cur_tag_open']= '<b class="color-blanco">';
	$config['cur_tag_close']= '</b>';

	$config['full_tag_open']= '<div class="productos color-blanco">';
	$config['full_tag_close']= '</div>';

	$this->pagination->initialize($config);
	
	$prod=array("dep"=>$dep,"per_page"=>$config['per_page']);
	$dato['titulo']= $dep;
	$tablas['tablas']=array("datos"=>$this->CompuMaxDBM->datosMenu(),"prod"=>$this->CompuMaxDBM->productos($prod),"paginacion"=>$this->pagination->create_links());
	

	$this->load->view('headers',$dato);
	$this->load->view('Productos',$tablas);

}


function Login(){
	$dato['titulo']= 'Log-in';
	$this->load->helper('form');
	$this->load->model('CompuMaxDBM');
	$this->load->view('headers',$dato);
	$this->load->view('Login');
}

function adminPrincipal(){
	$dato['titulo']= 'Home-Admin';
	$this->load->view('headers',$dato);
	$this->load->view('adminPrincipal');
}

function adminCategorias(){
	$dato['titulo']= 'Categorias';
	$this->load->helper('form');
	$this->load->model('CompuMaxDBM');
	$this->load->view('headers',$dato);
	$cat=array('cat'=> $this->CompuMaxDBM->getCategorias());
	$this->load->view('adminCategorias',$cat);
}

function deleteCarrito(){
	$this->load->model('CompuMaxDBM');
	$this->CompuMaxDBM->deleteCarrito();
}

function compra(){
	$this->load->model('CompuMaxDBM');
	$this->CompuMaxDBM->compra();
}


function generaReportes(){
	$dato['titulo']= 'Reporte de Ventas';
	$this->load->model('CompuMaxDBM');
	$query1['datos1']=$this->CompuMaxDBM->generarReportes();
	$this->load->view('headers',$dato);
	$this->load->view('Reportes',$query1);

}

function addCategoria(){
	$this->load->model('CompuMaxDBM');
	$data = array('idCategoria'=>$this->CompuMaxDBM->num_filas_cat()+1 ,'nombreCategoria' => $this->input->post('nombre'));
	$this->CompuMaxDBM->addCategoria($data);
}

function updateCategoria(){
	$this->load->model('CompuMaxDBM');

	for ($i=1; $i < $this->CompuMaxDBM->num_filas_cat()+1; $i++) { 
		if(isset($_POST[$i])){
		$id=$i;
		break;
		}
	}
	$data =$this->input->post('nombre');
		$this->CompuMaxDBM->updateCategoria($data,$id);
}

function deleteCategoria(){
	$this->load->model('CompuMaxDBM');

		if(isset($_POST['borrar'])){
		$id=$_POST['borrar'];
		}
	
	
	$this->CompuMaxDBM->deleteCategoria($id);
}

function datosEnvio(){
	$this->load->helper('form');
	$dato['titulo']= 'Datos Envio';
	$this->load->view('headers',$dato);
	$this->load->view('datosEnvio');
}

function datosCliente(){
	$this->load->helper('form');
	$dato['titulo']= 'Datos Clente';
	$this->load->view('headers',$dato);
	$this->load->view('datosCliente');
} 




function verProducto(){
	$prod=$this->uri->segment(2);
	$this->load->helper('form');
	$this->load->model('CompuMaxDBM');
	$datos_prod['datos']=$this->CompuMaxDBM->datosProd($prod);
	$dato['titulo']= 'Producto';
	$this->load->view('headers',$dato);
	$this->load->view('verProducto',$datos_prod);
}

function comprobarDatos(){
	$this->load->model('CompuMaxDBM');
		$data = array('nombre' => $this->input->post('nombre'),'password' => $this->input->post('password'));
		$this->CompuMaxDBM->validarDatos($data);
}	

}

?>