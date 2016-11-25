<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  function GuardarProducto($Producto){
    $this->db->insert('productos',$Producto);
  }
  function ListarProducto(){
    $query = $this->db->get('productos');
    return $query->result();
  }
}
