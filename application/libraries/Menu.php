<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Menu{
	private $arr_menu;
	
	public function __construct($arr){
		$this->arr_menu =$arr;
	}

public function crear_menu(){
	$ret_menu = "<ul>";
	foreach ($this->arr_menu->result() as $opc) {
		$ret_menu .= "<div class=\"img-menu\">"."</div>"."<div>"."<a href=\"CMC/".$opc->nombreCategoria."\" class=\"text-menu\">".$opc."</a>"."</div>";
	}
	$ret_menu.="</ul>";
	return $ret_menu;
}

}

?>