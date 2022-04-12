<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: http://203.202.240.225');
header('content-type: application/json');

class Api extends CI_Controller {

public function __construct(){
        parent::__construct();
      $this->load->helper('url');
      $this->load->model('UserModel');
        $this->load->library('session');

}
public function index(){
    $request=$_SERVER['REQUEST_METHOD'];
    $username=$_POST['username'];
    $password=$_POST['password'];
        $result=$this->UserModel->loginApi($username,$password);
        if ($result)
    echo json_encode(array('status'=>true));
  else
  echo json_encode(array('status'=>false));
  
}
}