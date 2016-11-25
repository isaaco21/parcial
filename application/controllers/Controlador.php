<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Producto_model');
  }

  function index(){
  $data = array();
  $data['producto'] = $this->Producto_model->ListarProducto();
  $tmp = $this->Producto_model->ListarProducto();
  $this->load->view('Productos/Principal',$data);
  }

  function Guardar(){
    if ($_POST) {
      $this->Producto_model->GuardarProducto($_POST);
      $this->load->view('Productos/Mensaje');
    }
  }

}
