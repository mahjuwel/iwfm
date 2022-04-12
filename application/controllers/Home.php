<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct(){

        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('UserModel');
        $this->load->library('session');
  	 	
}





public function ActivePanel()
	{
		$data=array();
		$data['ac_menu']='Active';
				$data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}

 </style>
';
$data['uncolapse']='hold-transition skin-blue sidebar-mini';

$ml='http://localhost/ac/';
$mls=$this->UserModel->mls($ml);

if($mls){
		$data['muser']='ActivePanel';
		//print_r($data);
		    //$this->UserModel->jjjkj();

// 	$data['todayin']=$this->ModelSecurity->todayInrec();	
// 	$data['todayout']=$this->ModelSecurity->todayOutrec();
// 	$data['monthin']=$this->ModelSecurity->monthInrec();
//     $data['dailyexpoffice']=$this->ModelSecurity->dailyexpoffice();
//     $data['dailyexpcanteen']=$this->ModelSecurity->dailyexpcanteen();
//     $data['dailyexpgstore']=$this->ModelSecurity->dailyexpgstore();
//      $data['monthlyexpoffice']=$this->ModelSecurity->monthlyexpoffice();
//     $data['monthlyexpcanteen']=$this->ModelSecurity->monthlyexpcanteen();
//     $data['monthlyexpgstore']=$this->ModelSecurity->monthlyexpgstore();
//     $data['fs']=$this->ModelSecurity->fs();


	    $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('dashboard',$data);
         $this->load->view('footer');


		
	}
	
	}

public function change_password(){
	 $data=array();
    $data['ac_menu41']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   

	$this->load->view('header',$data);
		$this->load->view('sidebar',$data);
		$this->load->view('change_password',$data);
		$this->load->view('footer');

}
public function PasswordChanged(){
$user_id=$this->session->userdata('user_id');
 $data=array();
  $data['password']=$this->input->post('password', true);
  $cp=$this->UserModel->changepass($data,$user_id);
  if($cp){
  	$this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully Password Updated !
              </div>');
  redirect('Home/change_password');
}else{
  redirect('Home/change_password');
  $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
}

}
}