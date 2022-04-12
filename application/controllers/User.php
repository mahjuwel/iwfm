<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct(){
        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('UserModel');
  	 	 $this->load->model('MailModel');
  	 	 $this->load->model('SearchModel');
        $this->load->library('session');

}
public function check_email_avalibility3(){
    $participentEmail=$_POST['participentEmail'];
    if(!filter_var($_POST["participentEmail"], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-envelope form-control-feedback"></span> Invalid Email</span></label>';  
           }else{ 
    $result=$this->UserModel->is_email_available3($participentEmail);
  if ($result)
    echo '<label class="text-danger"><span class="glyphicon glyphicon-envelope form-control-feedback"></span> Email Already registered</label>'; 
  else
  echo '<label class="text-success"><span class="glyphicon glyphicon-envelope form-control-feedback glyphicon glyphicon-ok"></span> Email Available</label>';  
  
}
}

public function RegisterCompletedParticipent(){
$email=$this->input->post('email', true);
$data=array();
$data['membername']=$this->input->post('membername', true);
$data['email']=$this->input->post('email', true);
$data['role']=$this->input->post('role', true);
$data['phone']=$this->input->post('phone', true);
$data['city']=$this->input->post('city', true);
$data['postcode']=$this->input->post('postcode', true);
$data['university']=$this->input->post('university', true);
$data['address']=$this->input->post('address', true);
$data['countryname']=$this->input->post('countryname', true);
$data['password']=$this->input->post('password', true);
$data['regdate']=date('Y-m-d');
$chk=$this->UserModel->email_check2($email);
if($chk){
        
        $this->UserModel->member_created($data);
        $data3=$this->UserModel->member_idcrted($email);
        $data4=array();
        $data4['user_id']='400_'.$data3->id;
        $this->UserModel->member_idupdated($data4,$email);
    $subject='Icwfm 2021 account confirmation message';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: #800000!important; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>Your account has been successfully created for the 8th <b>International Conference on Water and Flood Management (ICWFM-2021).</b><br><br>
You can now login(https://icwfmconference.live/index.php/Login) to your account and use PAY NOW button for doing payment. You will receive a confirmation after successful Payment for the registration. Your participant ID: 400_$data3->id <br><br>

 For any query, please contact the ICWFM-2021 Conference Secretariat through email  (icwfm2021@gmail.com)</b><br><br>

 Thank you!!
</p>
</body>
</html>";     
  $result=$this->MailModel->mail_send3($email,$subject,$message);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Your account has been created. Please check your email !
              </div>');
   redirect('User/Register');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Register');
    }
  
  }else{
    $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
               Fail! This Email ID Already Existed !
              </div>');
  redirect('User/Register');
  }

}
public function ParticipentRegistered2(){
$email=$this->input->post('email', true);
$data=array();
$data['membername']=$this->input->post('membername', true);
$data['email']=$this->input->post('email', true);
$data['role']=$this->input->post('role', true);
$data['phone']=$this->input->post('phone', true);
$data['city']=$this->input->post('city', true);
$data['postcode']=$this->input->post('postcode', true);
$data['university']=$this->input->post('university', true);
$data['address']=$this->input->post('address', true);
$data['countryname']=$this->input->post('countryname', true);
$data['password']=$this->input->post('password', true);
$data['regdate']=date('Y-m-d');
$chk=$this->UserModel->email_check2($email);
 if($chk){
$idata=array();
$error="";
$config['upload_path'] = 'documents/';
$config['allowed_types']= 'docx|doc|gif|jpg|png|zip|rar|csv|xlsx|pdf';
$config['max_size'] = 1000000;
$config['max-width'] =20486;
$config['max-height'] =10240;

$this->load->library('upload', $config);
if(!$this->upload->do_upload('docs')){
 $error =$this->upload->display_errors(); 
}else{
  $idata = $this->upload->data();
  $data['docs']=$config['upload_path'].$idata['file_name'];  

}

        
        $this->UserModel->member_created($data);
        $data3=$this->UserModel->member_idcrted($email);
        $data4=array();
        $data4['user_id']='300_'.$data3->id;
        $this->UserModel->member_idupdated($data4,$email);
    $subject='Icwfm 2021 participation confirmation message';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: #800000!important; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>You are successfully registered as a participant(Student) for the 8th <b>International Conference on Water and Flood Management (ICWFM-2021). Your participant ID: 300_$data3->id </b><br>
 For any query, please contact the ICWFM-2021 Conference Secretariat through email  (icwfm2021@gmail.com)</b><br><br>
Thank you!!
</p>
</body>
</html>";     
  $result=$this->MailModel->mail_send3($email,$subject,$message);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Your participation has been confirmed. Please check your email !
              </div>');
   redirect('User/Register');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Register');
    }
  
  }else{
    $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
               Fail! This Email ID Already Existed !
              </div>');
  redirect('User/Register');
  }

}
public function ParticipentRegistered(){
  $email=$this->input->post('participentEmail', true);
$data=array();
$data['participentName']=$this->input->post('participentName', true);
$data['participentEmail']=$this->input->post('participentEmail', true);
$data['participentContact']=$this->input->post('participentContact', true);
$data['participentUniversity']=$this->input->post('participentUniversity', true);
$data['participentAddress']=$this->input->post('participentAddress', true);
$data['participentCountry']=$this->input->post('participentCountry', true);
$data['regdate']=date('Y-m-d');
$idata=array();
$error="";
$config['upload_path'] = 'documents/';
$config['allowed_types']= 'docx|doc|gif|jpg|png|zip|rar|csv|xlsx|pdf';
$config['max_size'] = 1000000;
$config['max-width'] =20486;
$config['max-height'] =10240;
$this->load->library('upload', $config);
if(!$this->upload->do_upload('docs')){
 $error =$this->upload->display_errors(); 
}else{
  $idata = $this->upload->data();
  $data['docs']=$config['upload_path'].$idata['file_name'];  

}
 $chk=$this->UserModel->participentEmail_check($data['participentEmail']);
 if($chk){
    $subject='Icwfm 2021 account confirmation message';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>You are successfully registered as a participant(Student) for the 8th <b>International Conference on Water and Flood Management (ICWFM-2021).</b><br>
 For any query, please contact the ICWFM-2021 Conference Secretariat through email  (icwfm2021@gmail.com)</b><br><br>
Thank you!!
</p>
</body>
</html>";     
  $result=$this->MailModel->mail_send($email,$subject,$message);
if($result){
    
     $this->UserModel->participent_created($data);
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Your account has been created. Please check your email !
              </div>');
   redirect('User/Register');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Register');
    }
  
  }else{
    $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
               Fail! This Email ID Already Existed !
              </div>');
  redirect('User/Register');
  }  
}
public function AuthorDocs(){
    $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
'; 
 $data['audoc']=$this->UserModel->audocpro();
 //print_r($data['audoc']);
 //$this->load->view('header',$data);
  //$this->load->view('sidebar',$data);
 $this->load->view('AuthorDocs',$data);
  //$this->load->view('footer');
 
}
function PreviewPapers(){
    $dt=date('Y-m-d');
$data=array();
$data['audoc']=$this->UserModel->audocpro();
 $this->load->view('AuthorDocsPreviewPDF',$data);
    // Get output html
    $html = $this->output->get_output();
  
    // Load pdf library
    $this->load->library('pdf');
    
    // Load HTML content
    $this->dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation
    $this->dompdf->setPaper('Legal', 'landscape');
    
    // Render the HTML as PDF
    $this->dompdf->render();
    
    // Output the generated PDF (1 = download and 0 = preview)
    $this->dompdf->stream("PreviewPaper($dt).pdf", array("Attachment"=>0));  
}

public function firstabstract(){
    $absId=$_GET['absId'];
    $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
'; 
 $data['audoc']=$this->UserModel->abs1stdata($absId);
 //print_r($data['audoc']);
 //$this->load->view('header',$data);
  //$this->load->view('sidebar',$data);
 $this->load->view('AuthorDocs',$data);
    
}
public function secondabstract(){
    $absId=$_GET['absId'];
    $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
'; 
 $data['audoc']=$this->UserModel->abs2ndata($absId);
 //print_r($data['audoc']);
 //$this->load->view('header',$data);
  //$this->load->view('sidebar',$data);
 $this->load->view('AuthorDocs2',$data);
    
}

public function AuthorDocs2(){
    $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
'; 
 $data['audoc']=$this->UserModel->audocpro2();
// print_r($data['audoc']);
 //$this->load->view('header',$data);
  //$this->load->view('sidebar',$data);
 $this->load->view('AuthorDocs2',$data);
  //$this->load->view('footer');
 
}

public function createAuthdocs(){
$display_count2=$_POST['display_count2'];
if($display_count2>'300'){
 $this->session->set_flashdata('error_msg', '<div class="alert alert-danger         alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fails ! You have crossed 300 words limit.
              </div>');
  redirect('User/profile3'); 
}else{
$absId='AbstractID_100'.$this->session->userdata('id');
$data=array();
$data['email']=$this->session->userdata('email');
$data['firstauthfname']=$this->input->post('firstauthfname', true);
$data['firstauthmname']=$this->input->post('firstauthmname', true);
$data['firstauthlname']=$this->input->post('firstauthlname', true);
$data['firstauthemail']=$this->input->post('firstauthemail', true);
$data['firstauthcontactno']=$this->input->post('firstauthcontactno', true);
$data['firstauthaffiliation']=$this->input->post('firstauthaffiliation', true);
$data['firstauthcountryname']=$this->input->post('firstauthcountryname', true);
$data['pres_sameas1stauthor']=$this->input->post('pres_sameas1stauthor', true);
$data['corr_sameas1stauthor']=$this->input->post('corr_sameas1stauthor', true);
$data['corauthfname']=$this->input->post('corauthfname', true);
$data['corauthmname']=$this->input->post('corauthmname', true);
$data['corauthlname']=$this->input->post('corauthlname', true);
$data['corauthemail']=$this->input->post('corauthemail', true);
$data['corauthcontactno']=$this->input->post('corauthcontactno', true);
$data['corauthaffiliation']=$this->input->post('corauthaffiliation', true);
$data['corauthcountryname']=$this->input->post('corauthcountryname', true);
$data['preauthfname']=$this->input->post('preauthfname', true);
$data['preauthmname']=$this->input->post('preauthmname', true);
$data['preauthlname']=$this->input->post('preauthlname', true);
$data['preauthemail']=$this->input->post('preauthemail', true);
$data['preauthcontactno']=$this->input->post('preauthcontactno', true);
$data['preauthaffiliation']=$this->input->post('preauthaffiliation', true);
$data['preauthcountryname']=$this->input->post('preauthcountryname', true);
$data['authfname_box1']=$this->input->post('authfname_box1', true);
$data['authmname_box1']=$this->input->post('authmname_box1', true);
$data['authlname_box1']=$this->input->post('authlname_box1', true);
$data['affiliation_box1']=$this->input->post('affiliation_box1', true);
$data['authfname2']=$this->input->post('authfname2', true);
$data['authmname2']=$this->input->post('authmname2', true);
$data['authlname2']=$this->input->post('authlname2', true);
$data['affiliation2']=$this->input->post('affiliation2', true);
$data['authfname3']=$this->input->post('authfname3', true);
$data['authmname3']=$this->input->post('authmname3', true);
$data['authlname3']=$this->input->post('authlname3', true);
$data['affiliation3']=$this->input->post('affiliation3', true);
$data['authfname4']=$this->input->post('authfname4', true);
$data['authmname4']=$this->input->post('authmname4', true);
$data['authlname4']=$this->input->post('authlname4', true);
$data['affiliation4']=$this->input->post('affiliation4', true);
$data['authfname5']=$this->input->post('authfname5', true);
$data['authmname5']=$this->input->post('authmname5', true);
$data['authlname5']=$this->input->post('authlname5', true);
$data['affiliation5']=$this->input->post('affiliation5', true);
$data['authfname6']=$this->input->post('authfname6', true);
$data['authmname6']=$this->input->post('authmname6', true);
$data['authlname6']=$this->input->post('authlname6', true);
$data['affiliation6']=$this->input->post('affiliation6', true);
$data['authfname7']=$this->input->post('authfname7', true);
$data['authmname7']=$this->input->post('authmname7', true);
$data['authlname7']=$this->input->post('authlname7', true);
$data['affiliation7']=$this->input->post('affiliation7', true);
$data['authfname8']=$this->input->post('authfname8', true);
$data['authmname8']=$this->input->post('authmname8', true);
$data['authlname8']=$this->input->post('authlname8', true);
$data['affiliation8']=$this->input->post('affiliation8', true);
$data['authfname9']=$this->input->post('authfname9', true);
$data['authmname9']=$this->input->post('authmname9', true);
$data['authlname9']=$this->input->post('authlname9', true);
$data['affiliation9']=$this->input->post('affiliation9', true);
$data['authfname10']=$this->input->post('authfname10', true);
$data['authmname10']=$this->input->post('authmname10', true);
$data['authlname10']=$this->input->post('authlname10', true);
$data['affiliation10']=$this->input->post('affiliation10', true);
$data['titleofabstract']=$this->input->post('titleofabstract', true);
$data['category']=$this->input->post('category', true);
$data['subcategory']=$this->input->post('subcategory', true);
$data['abstractword']=$this->input->post('abstractword', true);
$data['fivekeywords']=$this->input->post('fivekeywords', true);
$data['prof_id']='AbstractID_100'.$this->session->userdata('id');
$datva=$this->UserModel->ChkExistData2();
if($datva){
$this->UserModel->Updateabsid($data);
$data2=$this->UserModel->memberdata($absId);
$result=$this->UserModel->Updmemberdata($data2);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Successfully Saved!
              </div>');
     redirect('User/profile3');
}else{
 $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fails !
              </div>');
  redirect('User/profile3'); 
}
}else{
 $this->UserModel->createAuthdocs($data);
 $data2=$this->UserModel->memberdata($absId);
$result2=$this->UserModel->Updmemberdata($data2);
 if($result2){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Successfully Saved!
              </div>');
     redirect('User/profile3');
}else{
 $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fails !
              </div>');
  redirect('User/profile3'); 
}
 
}

}
}
public function ParticipationConfirm(){
$email=$_GET['eml'];
$data=array();
$data['status']='1';
$data2=$this->UserModel->IDforParticipationConfirm($email);
$this->UserModel->ParticipationConfirm($email,$data);
$subject='Icwfm 2021 participation confirmation message';
$message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: #800000!important; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>You are successfully registered as a participant(Student) for the 8th <b>International Conference on Water and Flood Management (ICWFM-2021). Your participant ID: $data2->user_id </b><br>
 For any query, please contact the ICWFM-2021 Conference Secretariat through email  (icwfm2021@gmail.com)</b><br><br>
Thank you!!
</p>
</body>
</html>";     
  $result=$this->MailModel->mail_send3($email,$subject,$message);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Your participation has been confirmed. Please check your email !
              </div>');
   redirect('User/profile3');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/profile3');
    }
  
    
}


public function createAuthdocs2(){
$display_count2=$_POST['display_count2'];
if($display_count2>'300'){
 $this->session->set_flashdata('error_msg', '<div class="alert alert-danger         alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fails ! You have crossed 300 words limit.
              </div>');
  redirect('User/profile4'); 
}else{
$absId='AbstractID_200'.$this->session->userdata('id');
$data=array();
$data['email']=$this->session->userdata('email');
$data['firstauthfname']=$this->input->post('firstauthfname', true);
$data['firstauthmname']=$this->input->post('firstauthmname', true);
$data['firstauthlname']=$this->input->post('firstauthlname', true);
$data['firstauthemail']=$this->input->post('firstauthemail', true);
$data['firstauthcontactno']=$this->input->post('firstauthcontactno', true);
$data['firstauthaffiliation']=$this->input->post('firstauthaffiliation', true);
$data['firstauthcountryname']=$this->input->post('firstauthcountryname', true);
$data['pres_sameas1stauthor']=$this->input->post('pres_sameas1stauthor', true);
$data['corr_sameas1stauthor']=$this->input->post('corr_sameas1stauthor', true);
$data['corauthfname']=$this->input->post('corauthfname', true);
$data['corauthmname']=$this->input->post('corauthmname', true);
$data['corauthlname']=$this->input->post('corauthlname', true);
$data['corauthemail']=$this->input->post('corauthemail', true);
$data['corauthcontactno']=$this->input->post('corauthcontactno', true);
$data['corauthaffiliation']=$this->input->post('corauthaffiliation', true);
$data['corauthcountryname']=$this->input->post('corauthcountryname', true);
$data['preauthfname']=$this->input->post('preauthfname', true);
$data['preauthmname']=$this->input->post('preauthmname', true);
$data['preauthlname']=$this->input->post('preauthlname', true);
$data['preauthemail']=$this->input->post('preauthemail', true);
$data['preauthcontactno']=$this->input->post('preauthcontactno', true);
$data['preauthaffiliation']=$this->input->post('preauthaffiliation', true);
$data['preauthcountryname']=$this->input->post('preauthcountryname', true);
$data['authfname_box1']=$this->input->post('authfname_box1', true);
$data['authmname_box1']=$this->input->post('authmname_box1', true);
$data['authlname_box1']=$this->input->post('authlname_box1', true);
$data['affiliation_box1']=$this->input->post('affiliation_box1', true);
$data['authfname2']=$this->input->post('authfname2', true);
$data['authmname2']=$this->input->post('authmname2', true);
$data['authlname2']=$this->input->post('authlname2', true);
$data['affiliation2']=$this->input->post('affiliation2', true);
$data['authfname3']=$this->input->post('authfname3', true);
$data['authmname3']=$this->input->post('authmname3', true);
$data['authlname3']=$this->input->post('authlname3', true);
$data['affiliation3']=$this->input->post('affiliation3', true);
$data['authfname4']=$this->input->post('authfname4', true);
$data['authmname4']=$this->input->post('authmname4', true);
$data['authlname4']=$this->input->post('authlname4', true);
$data['affiliation4']=$this->input->post('affiliation4', true);
$data['authfname5']=$this->input->post('authfname5', true);
$data['authmname5']=$this->input->post('authmname5', true);
$data['authlname5']=$this->input->post('authlname5', true);
$data['affiliation5']=$this->input->post('affiliation5', true);
$data['authfname6']=$this->input->post('authfname6', true);
$data['authmname6']=$this->input->post('authmname6', true);
$data['authlname6']=$this->input->post('authlname6', true);
$data['affiliation6']=$this->input->post('affiliation6', true);
$data['authfname7']=$this->input->post('authfname7', true);
$data['authmname7']=$this->input->post('authmname7', true);
$data['authlname7']=$this->input->post('authlname7', true);
$data['affiliation7']=$this->input->post('affiliation7', true);
$data['authfname8']=$this->input->post('authfname8', true);
$data['authmname8']=$this->input->post('authmname8', true);
$data['authlname8']=$this->input->post('authlname8', true);
$data['affiliation8']=$this->input->post('affiliation8', true);
$data['authfname9']=$this->input->post('authfname9', true);
$data['authmname9']=$this->input->post('authmname9', true);
$data['authlname9']=$this->input->post('authlname9', true);
$data['affiliation9']=$this->input->post('affiliation9', true);
$data['authfname10']=$this->input->post('authfname10', true);
$data['authmname10']=$this->input->post('authmname10', true);
$data['authlname10']=$this->input->post('authlname10', true);
$data['affiliation10']=$this->input->post('affiliation10', true);
$data['titleofabstract']=$this->input->post('titleofabstract', true);
$data['category']=$this->input->post('category', true);
$data['subcategory']=$this->input->post('subcategory', true);
$data['abstractword']=$this->input->post('abstractword', true);
$data['fivekeywords']=$this->input->post('fivekeywords', true);
$data['prof_id']='AbstractID_200'.$this->session->userdata('id');
$datva=$this->UserModel->ChkExistData();
if($datva){
$this->UserModel->Updateabsid2($data); 
$data2=$this->UserModel->memberdata2($absId);
$result=$this->UserModel->Updmemberdata($data2);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Successfully Saved!
              </div>');
     redirect('User/profile4');
}else{
 $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fails !
              </div>');
  redirect('User/profile4'); 
}
}else{
 $this->UserModel->createAuthdocs2($data);
 $data2=$this->UserModel->memberdata2($absId);
$result=$this->UserModel->Updmemberdata($data2);
 if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Successfully Saved!
              </div>');
     redirect('User/profile4');
}else{
 $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fails !
              </div>');
  redirect('User/profile4'); 
}
 
}
}
}
public function forgetpass(){
    $email=$_POST['email'];
    $datapw=$this->UserModel->researchpaperpw($email);
    $subject='Your Forget Password';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Hello! $datapw->membername, </h2>
<p>Your password is $datapw->password .<br> Donot share it with anybody.Login link: https://icwfmconference.live/index.php/Login /<br><br>
Thank you!!
</p>
</body>
</html>";     
  $result=$this->MailModel->mail_send2($email,$subject,$message);
if ($result){
$this->session->set_flashdata('success_msg', "<p style='color: green; font-weight: bold'>Password sent to your email</p>");
redirect('Login');
    }else{
   $this->session->set_flashdata('success_error', "<p style='color: green; font-weight: bold'>Password Not sent to your email</p>");
   redirect('Login');
}
}
   
public function Register(){
    $data=array();
    $data['cnt']=$this->UserModel->countryShow();
    //print_r($data['cnt']);
   $this->load->view('register',$data);  
}
public function upload_file(){
        if(isset($_POST["submit"])){
                   $name = $_POST['name'];
                   $d3=$this->UserModel->Pid();
                   $data3['paperId']=abstractID.'_'.'100'.$d3->paperId; 
                    $targetDir = "books/";
                  $img = basename($_FILES["file"]["name"]);
                  $file_name =$data3['paperId'].'.docx';
                  $targetFilePath = $targetDir . $file_name;
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                    if($name !== ''){
                    echo "Ok";
      }
   }
}

public function UploadStudID(){
$this->session->set_userdata(array(       
        'email' => trim($_POST['email'])
    )); 
$idata=array();
$error="";
$config['upload_path'] = 'documents/';
$config['allowed_types']= 'docx|doc|gif|jpg|png|zip|rar|csv|xlsx|pdf';
$config['max_size'] = 1000000;
$config['max-width'] =20486;
$config['max-height'] =10240;
$this->load->library('upload', $config);
if(!$this->upload->do_upload('docs')){
 $error =$this->upload->display_errors(); 
}else{
  $idata = $this->upload->data();
  $data['docs']=$config['upload_path'].$idata['file_name']; 
       $result=$this->UserModel->UploadStudID($data);
if($result){
        $this->session->set_flashdata('success_msg10', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully Uploaded !
              </div>');
     redirect('User/profile3');

    }else{
      $this->session->set_flashdata('error_msg10', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/profile3');

    }
}
}

public function RegisterCompleted(){
$email=$this->input->post('email', true);
$data=array();
$data['membername']=$this->input->post('membername', true);
$data['email']=$this->input->post('email', true);
$data['member_status']=$this->input->post('member_status', true);
$data['role']=$this->input->post('role', true);
$data['university']=$this->input->post('university', true);
$data['address']=$this->input->post('address', true);
$data['countryname']=$this->input->post('countryname', true);
$data['password']=$this->input->post('password', true);
$data['regdate']=date('Y-m-d');
$chk=$this->UserModel->email_check2($email);
 if($chk){
$idata=array();
$error="";
$config['upload_path'] = 'documents/';
$config['allowed_types']= 'docx|doc|gif|jpg|png|zip|rar|csv|xlsx|pdf';
//gif|jpg|png|zip|rar|csv|xlsx|pdf
$config['max_size'] = 1000000;
$config['max-width'] =20486;
$config['max-height'] =10240;

$this->load->library('upload', $config);
if(!$this->upload->do_upload('docs')){
 $error =$this->upload->display_errors(); 
}else{
  $idata = $this->upload->data();
  $data['docs']=$config['upload_path'].$idata['file_name'];  

}

        
        $this->UserModel->member_created($data);
        $data3=$this->UserModel->member_idcrted($email);
        $data4=array();
        $data4['user_id']='20000_'.$data3->id;
        $this->UserModel->member_idupdated($data4,$email);
    $subject='Icwfm 2021 account confirmation message';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>Your account has been successfully created for the 8th <b>International Conference on Water and Flood Management (ICWFM-2021).</b><br><br>
You can now login(https://icwfmconference.live/index.php/Login) to your account and submit your abstract using the dashboard. You will receive a confirmation after successful submission of the abstract.<br><br>
To avoid any complications, please submit only the FINAL version of your work and do not attempt multiple submissions. For any query, please contact the ICWFM-2021 Conference Secretariat through email  (icwfm2021@gmail.com)</b><br><br>
Thank you!!
</p>
</body>
</html>";     
  $result=$this->MailModel->mail_send3($email,$subject,$message);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Your account has been created. Please check your email !
              </div>');
   redirect('User/Register');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Register');
    }
  
  }else{
    $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
               Fail! This Email ID Already Existed !
              </div>');
  redirect('User/Register');
  }

}

// function multi_attach_mail(){
// // if($_POST) {

// //     for($i=0; $i < count($_FILES['csv_file']['name']); $i++){

// //         $ftype[]       = $_FILES['csv_file']['type'][$i];
// //         $fname[]       = $_FILES['csv_file']['name'][$i];

// //     }
//     $data7=$this->UserModel->researchpaper();
//   $fname='https://icwfmconference.live/'.$data7->docs;

//     // array with filenames to be sent as attachment
//     $files = $fname;

//     // email fields: to, from, subject, and so on
//     $to = "mdalhasanj@gmail.com";
//     $from = "test@deliveroneltd.com"; 
//     $subject ="My subject"; 
//     $message = "My message";
//     $headers = "From: $from";

//     // boundary 
//     $semi_rand = md5(time()); 
//     $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//     // headers for attachment 
//     $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//     // multipart boundary 
//     $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
//     $message .= "--{$mime_boundary}\n";

//     // preparing attachments
//     for($x=0;$x<count($files);$x++){
//         $file = fopen($files[$x],"rb");
//         $data = fread($file,filesize($files[$x]));
//         fclose($file);
//         $data = chunk_split(base64_encode($data));
//         $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
//         "Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
//         "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
//         $message .= "--{$mime_boundary}\n";
//     }

//     // send

//     $ok = @mail($to, $subject, $message, $headers); 
//     if ($ok) { 
//         echo "<p>mail sent to $to!</p>"; 
//     } else { 
//         echo "<p>mail could not be sent!</p>"; 
//     } 



// }

// public function SendDoctoEmail(){
// //  $data['research']=$this->UserModel->research();
// // $data['research2']=$this->UserModel->research2();  
// $email=$this->session->userdata('email');
// $data7=$this->UserModel->researchpaper();
// $data8=$this->UserModel->researchpaper2();

//  $subject='Final Abstract for ICWFM conference 2021';
//     $message="<!DOCTYPE html>
// <html>
// <head>
//   <title></title>
// </head>
// <body>
// <h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
// <p>You have successfully submitted your abstract for the ICWFM 2021.<br>
// Your 1st submitted abstract corresponding to $data7->paperId can be downloaded from this link https://www.iwfm.deliveroneltd.com/books/$data7->docs <br>
// Thank you for your submission. You will be notified in due time with further instructions.
// </p>
// </body>
// </html>";   
// if($data7||$data8){
// $result=$this->MailModel->mail_send($email,$subject,$message);
// if($result){
//         $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i>Congratulations!</h4>
//                  You have Successfully Submitted your Abstract. Check your email for final submitted Abstract.
//               </div>');
//   redirect('User/Profile');
//     }else{
//       $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i></h4>
//                 Fail! Something missing... Try again !
//               </div>');
//   redirect('User/Profile');
//     }
// }
// $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i></h4>
//                 Email not sent because you have not saved yet.
//               </div>');
//   redirect('User/Profile');
  
//   }


  public function SendDoctoEmail2(){
//  $data['research']=$this->UserModel->research();
// $data['research2']=$this->UserModel->research2();  
$email=$this->session->userdata('email');
$data7=$this->UserModel->researchpaper();
$data8=$this->UserModel->researchpaper2();

 $subject='Final Abstract for ICWFM conference 2021';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>
You have successfully submitted your abstract for the ICWFM 2021.<br>
Your 1st submitted abstract corresponding to $data7->paperId can be downloaded from this link https://icwfmconference.live/books/$data7->docs <br>
Your 2nd submitted abstract corresponding to $data8->paperId2 can be downloaded from this link https://icwfmconference.live/books/$data8->docs2 <br>
Thank you for your submission. You will be notified in due time with further instructions.

</p>
</body>
</html>";     
if($data7||$data8){
  $result=$this->MailModel->mail_send($email,$subject,$message);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Congratulations!</h4>
               You have successfully Successfully Submitted you Abstract. Check you email for final submitted Abstract.
              </div>');
   redirect('User/Profile2');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Profile2');
    }
  
  }else{
   $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Email not sent because you have not saved yet.
              </div>');
  redirect('User/Profile2');   
  }
  }
  
 public function SendDoctoEmailAbstract(){
//  $data['research']=$this->UserModel->research();
// $data['research2']=$this->UserModel->research2();  
$email=$this->session->userdata('email');
$data7=$this->UserModel->researchpaper1stabs();
$data8=$this->UserModel->researchpaper2ndabs();

 $subject='Final Abstract for ICWFM conference 2021';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>
You have successfully submitted your abstract for the ICWFM 2021.<br>
Your 1st submitted abstract corresponding to $data7->paperId can be downloaded from this link https://www.icwfmconference.live/index.php/User/firstabstract?absId=$data7->paperId <br>
Your 2nd submitted abstract corresponding to $data8->paperId2 can be downloaded from this link https://www.icwfmconference.live/index.php/User/secondabstract?absId=$data8->paperId2 <br>
Thank you for your submission. You will be notified in due time with further instructions.

</p>
</body>
</html>";     
if($data7||$data8){
  $result=$this->MailModel->mail_send($email,$subject,$message);
if($result){
    $data2=array();
    $data2['secondabs_submitstatus']='1';
    $this->UserModel->update2ndsubmitstatus($email,$data2);
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Congratulations!</h4>
               You have successfully Successfully Submitted your Abstract. Check you email for final submitted Abstract.
              </div>');
   redirect('User/Profile4');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Profile4');
    }
  
  }else{
   $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Email not sent because you have not saved yet.
              </div>');
  redirect('User/Profile4');   
  }
  }
  
   public function SendDoctoEmail1stAbstract(){
//  $data['research']=$this->UserModel->research();
// $data['research2']=$this->UserModel->research2();  
$email=$this->session->userdata('email');
$data7=$this->UserModel->researchpaper1stabs();
$data8=$this->UserModel->researchpaper2ndabs();
$subject='Final Abstract for ICWFM conference 2021';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>
You have successfully submitted your abstract for the ICWFM 2021.<br>
Your 1st submitted abstract corresponding to $data7->paperId can be downloaded from this link https://www.icwfmconference.live/index.php/User/firstabstract?absId=$data7->paperId <br>

Thank you for your submission. You will be notified in due time with further instructions.

</p>
</body>
</html>";     
if($data7||$data8){
  $result=$this->MailModel->mail_send($email,$subject,$message);
if($result){
    $data2=array();
    $data2['firstabs_submitstatus']='1';
    $this->UserModel->update1stsubmitstatus($email,$data2);
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Congratulations!</h4>
               You have successfully Successfully Submitted you Abstract. Check you email for final submitted Abstract.
              </div>');
   redirect('User/Profile3');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Fail! Something missing... Try again !
              </div>');
  redirect('User/Profile3');
    }
  
  }else{
   $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i></h4>
                Email not sent because you have not saved yet.
              </div>');
  redirect('User/Profile3');   
  }
  }
  
public function UploadStdoc(){
$user_id=$this->session->userdata('user_id');
$data=array();
$data['docupd']='2nd Time Upload';
$idata=array();
$error="";
$config['upload_path'] = 'documents/';
$config['allowed_types']= 'docx|doc';
$config['max_size'] = 1000000;
$config['max-width'] =20486;
$config['max-height'] =10240;

$this->load->library('upload', $config);
if(!$this->upload->do_upload('image')){
 $error =$this->upload->display_errors(); 
}else{
  $idata = $this->upload->data();
  $data['docs']=$config['upload_path'].$idata['file_name'];  

}
// print_r($data);
// exit(); 
 $result=$this->UserModel->memberdoc_uploaded($data,$user_id);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully Uploaded !
              </div>');
     redirect('User/profile');

    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/profile');

    }
  
}
// public function testmail2(){
//   $this->load->view('testmail',$data);
// }

// public function testmail(){
// if(isset($_FILES["file"]["name"])){
//   $email = $this->session->userdata('email');
//     $name = $this->session->userdata('membername');
//     $subject = 'Test2';
//     $message ="Test3";
// $fromemail =  $email;
// $subject="Research Paper Submitted";
// $email_message = '<h2>Research</h2>
//                     <p><b>Name:</b> '.$name.'</p>
//                     <p><b>Email:</b> '.$email.'</p>
//                     <p><b>Subject:</b> '.$subject.'</p>
//                     <p><b>Message:</b><br/>'.$message.'</p>';
// $email_message.="Please find the attachment";
// $semi_rand = md5(uniqid(time()));
// $headers = "From: ".$fromemail;
// $headers= "Cc: hasanbdsoft@gmail.com";  
// $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
//     $headers .= "\nMIME-Version: 1.0\n" .
//     "Content-Type: multipart/mixed;\n" .
//     " boundary=\"{$mime_boundary}\"";
 
// $strFilesName = $_FILES["file"]["name"];  
// $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
//     $email_message .= "This is a multi-part message in MIME format.\n\n" .
//     "--{$mime_boundary}\n" .
//     "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
//     "Content-Transfer-Encoding: 7bit\n\n" .
//     $email_message .= "\n\n";
//     $email_message .= "--{$mime_boundary}\n" .
//     "Content-Type: application/octet-stream;\n" .
//     " name=\"{$strFilesName}\"\n" .
//     //"Content-Disposition: attachment;\n" .
//     //" filename=\"{$fileatt_name}\"\n" .
//     "Content-Transfer-Encoding: base64\n\n" .
//     $strContent  .= "\n\n" .
//     "--{$mime_boundary}--\n";
// $toemail=$email;
// if(mail($toemail, $subject, $email_message, $headers)){
//  $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Successfully sent to email !
//               </div>');
//      redirect('User/profile');

//     }else{
//       $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Fails !
//               </div>');
//   redirect('User/profile');

//     }
// }  
    
// } 

public function Uploadbook(){
     if(isset($_POST["submit"])){
                   $name = $_POST['name'];
                   $d3=$this->UserModel->Pid();
                   $data1['paperId']=abstractID.'_'.'100'.$d3->paperId; 
                   $targetDir = "books/";
                  $file_name =$data1['paperId'].'.docx';
                  $targetFilePath = $targetDir . $file_name;
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    $user_id=$this->session->userdata('user_id');
    $data3=array();
    $data3['category']=trim($_POST['category']); 
   $data3['subcategory']=trim($_POST['subcategory']); 
   $data3['membername']=$this->session->userdata('membername');
  $data3['user_id']=$this->session->userdata('user_id');
   $data3['docs']=$file_name;
  $data3['paperId']=abstractID.'_'.'100'.$d3->paperId; 
  $data3['paperId2']=abstractID.'_'.'200'.$d3->paperId;
   $datva=$this->UserModel->ChkExist($user_id);
     if($datva){
       $rsl=$this->UserModel->UpdateduploadBook($user_id, $data3);
       if($rsl){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p>Your Abstract has been saved but not yet submitted. For final submissions please press Final Submission button.</p>
              </div>');
     redirect('User/profile');   
       }else{
        $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/profile');   
       }
       
     }else{
 $this->UserModel->memberbook_upload($data3);
$data2=array();
$data2['step']='1';
$result=$this->UserModel->updatestep($data2,$user_id);
if($result){
     $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p>Your Abstract has been saved but not yet submitted. For final submissions please press Final Submission button.</p>
              </div>');
     
     redirect('User/profile');

    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/profile');

    }
}
}
}


public function Uploadbook2(){
        if(isset($_POST["submit"])){
                   $name = $_POST['name'];
                   $d3=$this->UserModel->Pid2();
                   $data1['paperId2']=abstractID.'_'.'200'.$d3->paperId2; 
                   $targetDir = "books/";
                  $file_name =$data1['paperId2'].'.docx';
                  $targetFilePath = $targetDir . $file_name;
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    $user_id=$this->session->userdata('user_id');
    $data3=array();
    $data3['category2']=trim($_POST['category']); 
   $data3['subcategory2']=trim($_POST['subcategory']); 
   $data3['membername']=$this->session->userdata('membername');
  $data3['user_id']=$this->session->userdata('user_id');
  $data3['docs2']=$file_name;
$this->UserModel->memberbook_upload2($data3,$user_id);
$data2=array();
$data2['step']='2';
$result=$this->UserModel->updatestep2($data2,$user_id);
if($result){
     $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p>Your Abstract has been saved but not yet submitted. For final submissions please press Final Submission button.</p>
              </div>');
     redirect('User/profile2');

    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/profile2');

    }
    
 
}                
}


public function check_email_avalibility(){
    $email=$_POST['email'];
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-envelope form-control-feedback"></span> Invalid Email</span></label>';  
           }else{ 
    $result=$this->UserModel->is_email_available($email);
  if ($result)
    echo '<label class="text-danger"><span class="glyphicon glyphicon-envelope form-control-feedback"></span> Email Already registered</label>'; 
  else
  echo '<label class="text-success"><span class="glyphicon glyphicon-envelope form-control-feedback glyphicon glyphicon-ok"></span> Email Available</label>';  
  
}
}
public function check_email_avalibility2(){
    $email=$_POST['email'];
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-envelope form-control-feedback"></span> Invalid Email</span></label>';  
           }else{ 
    $result=$this->UserModel->is_email_available($email);
  if ($result)
    echo '<label class="text-success"><span class="glyphicon glyphicon-envelope form-control-feedback"></span>Your email registered. So Get Password in Email</label>'; 
  else
  echo '<label class="text-danger"><span class="glyphicon glyphicon-envelope form-control-feedback glyphicon glyphicon-ok"></span>Sorry! Your Email Not Existed</label>';  
  
}
}

public function profupdate(){
  $user_id=$this->session->userdata('user_id');
 $data=array();
    $data['profupdate']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
$data['pu']=$this->UserModel->profupdate();
$data['brn']=$this->UserModel->branchsearch();

//print_r($data['pu']);

  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('updateuprofile',$data);
}
public function CreateUser(){
	 $data=array();
    $data['ac_menu25']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
$data['brn']=$this->UserModel->branchsearch();

	$this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('create_user',$data);
    $this->load->view('footer'); 
}
public function UsersList(){
   $data=array();
    $data['ac_ul']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
$data['ul']=$this->UserModel->searchul();

  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('userlist',$data);
    $this->load->view('footer'); 
}
// public function DailyCrbyUser(){
//  $user_id=$_GET['user_id'];
//  $data=array();
// //$data['salcus']=$this->SaleModel->salcus();
// $data['ac_menusales']='active';
//     $data['muser']='ActivePanel';
//     $data['ac_hover']='<style type="text/css">
//  .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}

//  </style>
// ';
//   $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
//       $data['cp']=$this->SaleModel->DailyCrByUid($user_id);
//       $data['cps']=$this->SaleModel->DailyCrByUidTotal($user_id);
//       $data['dis']=$this->SaleModel->dis();
//      $data['dcr']=$this->SaleModel->dcr();
//      $data['mcr']=$this->SaleModel->mcr();
// //print_r($data['cps']);

//    $this->load->view('header',$data); 
//     $this->load->view('sidebar',$data);  
//     $this->load->view('Sale/brmanagerdailycr',$data);
//     $this->load->view('footer');

// }
// public function CreateStaffDG(){
//   $data=array();
//     $data['ac_menu25']='active';
//     $data['muser']='ActivePanel';
//     $data['uncolapse']='hold-transition skin-blue sidebar-mini';
//     $data['ac_hover']='<style type="text/css">
//  .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
//  </style>
// ';   

//   $this->load->view('header',$data);
//   $this->load->view('sidebardg',$data);
//     $this->load->view('create_staffDG',$data);
//     $this->load->view('footer'); 
// }
public function CreateStaff(){
   $data=array();
    $data['ac_menu25']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   

  $this->load->view('header',$data);
   $this->load->view('sidebar',$data);
    $this->load->view('create_staff',$data);
    $this->load->view('footer'); 
}

// public function CreatedStaff(){
// $data=array();
// $data['NAME']=$this->input->post('NAME', true);
// $data['AC_NO']=$this->input->post('AC_NO', true);
// $data['TITLE']=$this->input->post('TITLE', true);
// $data['DEPTNAME']=$this->input->post('DEPTNAME', true);
// $data['SECTION']=$this->input->post('SECTION', true);
// $data['SUB_SEC']=$this->input->post('SUB_SEC', true);
// $data['UNIT']=$this->input->post('UNIT', true);
// $data['OPHONE']=$this->input->post('OPHONE', true);
// $data['jdate']=$this->input->post('jdate', true);
// $data['salary']=$this->input->post('salary', true);
// $idata=array();
// $error="";
// $config['upload_path'] = 'images/';
// $config['allowed_types']= 'gif|jpg|png';
// $config['max_size'] = 1000000;
// $config['max-width'] =20486;
// $config['max-height'] =10240;

// $this->load->library('upload', $config);
// if(!$this->upload->do_upload('image')){
//  $error =$this->upload->display_errors(); 
// }else{
//   $idata = $this->upload->data();
//   $data['image']=$config['upload_path'].$idata['file_name'];  

// }
//  $chk=$this->UserModel->card_check2($data['AC_NO']);
//  if($chk){
//         $result=$this->UserModel->staff_created2($data);
// if($result){
//         $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Successfully Created !
//               </div>');
//   redirect('SecurityDep/Stafflist');
//     }else{
//       $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 This User Already Existed !
//               </div>');
//   redirect('SecurityDep/Stafflist');
//     }
  
//   }else{
//     $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 This User ID Already Existed !
//               </div>');
//   redirect('SecurityDep/Stafflist');
//   }
// }
// public function CreatedStaffDGEdit(){
// $AC_NO=$_POST['AC_NO'];
// $data=array();
// $data['NAME']=$this->input->post('NAME', true);
// $data['AC_NO']=$this->input->post('AC_NO', true);
// $data['TITLE']=$this->input->post('TITLE', true);
// $data['DEPTNAME']=$this->input->post('DEPTNAME', true);
// $data['SECTION']=$this->input->post('SECTION', true);
// $data['SUB_SEC']=$this->input->post('SUB_SEC', true);
// $data['UNIT']=$this->input->post('UNIT', true);
// $data['OPHONE']=$this->input->post('OPHONE', true);
// $data['jdate']=$this->input->post('jdate', true);
// $idata=array();
// $error="";
// $config['upload_path'] = 'imagesDG/';
// $config['allowed_types']= 'gif|jpg|png';
// $config['max_size'] = 1000000;
// $config['max-width'] =20486;
// $config['max-height'] =10240;

// $this->load->library('upload', $config);
// if(!$this->upload->do_upload('image')){
//  $error =$this->upload->display_errors(); 
// }else{
//   $idata = $this->upload->data();
//   $data['image']=$config['upload_path'].$idata['file_name'];  

// }
// // print_r($data);
// // exit(); 
//  $result=$this->UserModel->staff_updateDg($data,$AC_NO);
// if($result){
//         $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Successfully Updated !
//               </div>');
//   redirect('SecurityDep/StafflistDG');
//     }else{
//       $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Fails !
//               </div>');
//   redirect('SecurityDep/StafflistDG');
//     }
  
//   }
//   public function CreatedStaffEdit(){
// $AC_NO=$_POST['AC_NO'];
// $data=array();
// $data['NAME']=$this->input->post('NAME', true);
// $data['AC_NO']=$this->input->post('AC_NO', true);
// $data['TITLE']=$this->input->post('TITLE', true);
// $data['DEPTNAME']=$this->input->post('DEPTNAME', true);
// $data['SECTION']=$this->input->post('SECTION', true);
// $data['SUB_SEC']=$this->input->post('SUB_SEC', true);
// $data['UNIT']=$this->input->post('UNIT', true);
// $data['OPHONE']=$this->input->post('OPHONE', true);
// $data['jdate']=$this->input->post('jdate', true);
// $idata=array();
// $error="";
// $config['upload_path'] = 'images/';
// $config['allowed_types']= 'gif|jpg|png';
// $config['max_size'] = 1000000;
// $config['max-width'] =20486;
// $config['max-height'] =10240;

// $this->load->library('upload', $config);
// if(!$this->upload->do_upload('image')){
//  $error =$this->upload->display_errors(); 
// }else{
//   $idata = $this->upload->data();
//   $data['image']=$config['upload_path'].$idata['file_name'];  

// }
// // print_r($data);
// // exit(); 
//  $result=$this->UserModel->staff_update($data,$AC_NO);
// if($result){
//         $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Successfully Updated !
//               </div>');
//   redirect('SecurityDep/Stafflist');
//     }else{
//       $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Fails !
//               </div>');
//   redirect('SecurityDep/Stafflist');
//     }
  
//   }


public function prfupdated(){
$user_id=$_POST['user_id'];
$data=array();
$data['email']=$this->input->post('email', true);
$data['membername']=$this->input->post('membername', true);
$data['address']=$this->input->post('address', true);
$data['university']=$this->input->post('university', true);
 $result=$this->UserModel->author_update($data,$user_id);
if($result){
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully Updated !
              </div>');
   redirect('User/profupdate');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/profupdate');
    }

}




// public function CreatedStaffDG(){

// $data=array();
// $data['NAME']=$this->input->post('NAME', true);
// $data['AC_NO']=$this->input->post('AC_NO', true);
// $data['TITLE']=$this->input->post('TITLE', true);
// $data['DEPTNAME']=$this->input->post('DEPTNAME', true);
// $data['SECTION']=$this->input->post('SECTION', true);
// $data['SUB_SEC']=$this->input->post('SUB_SEC', true);
// $data['UNIT']=$this->input->post('UNIT', true);
// $data['OPHONE']=$this->input->post('OPHONE', true);
// $data['jdate']=$this->input->post('jdate', true);

// $idata=array();
// $error="";
// $config['upload_path'] = 'imagesDG/';
// $config['allowed_types']= 'gif|jpg|png';
// $config['max_size'] = 1000000;
// $config['max-width'] =20486;
// $config['max-height'] =10240;

// $this->load->library('upload', $config);
// if(!$this->upload->do_upload('image')){
//  $error =$this->upload->display_errors(); 
// }else{
//   $idata = $this->upload->data();
//   $data['image']=$config['upload_path'].$idata['file_name'];  

// }
//  $chk=$this->UserModel->card_check($data['AC_NO']);
//  if($chk){
//         $result=$this->UserModel->staff_created($data);
// if($result){
//         $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 Successfully Created !
//               </div>');
//   redirect('SecurityDep/StafflistDG');
//     }else{
//       $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 This User Already Existed !
//               </div>');
//   redirect('SecurityDep/StafflistDG');
//     }
  
//   }else{
//     $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 <h4><i class="icon fa fa-check"></i> Alert!</h4>
//                 This User ID Already Existed !
//               </div>');
//   redirect('SecurityDep/StafflistDG');
//   }
// }
public function Created(){
$data=array();
$data['email']=$this->input->post('email', true);
$data['user_id']=$this->input->post('user_id', true);
$data['password']=$this->input->post('password', true);
$data['username']=$this->input->post('username', true);
$data['branch']=$this->input->post('branch', true);
$data['fullname']=$this->input->post('fullname', true);
$data['mobile']=$this->input->post('mobile', true);
$data['designation']=$this->input->post('designation', true);
$data['presentaddress2']=$this->input->post('presentaddress2', true);
$data['note']=$this->input->post('note', true);
// $data['emergencycontact']=$this->input->post('emergencycontact', true);
 $data['joiningDate']=$this->input->post('joiningDate', true);
 $data['salary']=$this->input->post('salary', true);
 $data['dob']=$this->input->post('dob', true);
 
 // print_r($data);
 // exit();
 $data2=array();
 $data2['hd']=$this->input->post('username', true);


$idata=array();
$error="";
$config['upload_path'] = 'images/';
$config['allowed_types']= 'gif|jpg|png';
$config['max_size'] = 1000000;
$config['max-width'] =20486;
$config['max-height'] =10240;

$this->load->library('upload', $config);
if(!$this->upload->do_upload('image')){
 $error =$this->upload->display_errors(); 
}else{
  $idata = $this->upload->data();
  $data['image']=$config['upload_path'].$idata['file_name'];  
  $data['nid']=$config['upload_path'].$idata['file_name'];  

}
 $chk=$this->UserModel->email_check($data['email']);
 if($chk){
   $chk2=$this->UserModel->username_check($data['username']);
  if($chk2){
       $chk3=$this->UserModel->userid_check($data['user_id']);
    if($chk3){
        $this->UserModel->user_create($data);
        $this->UserModel->header_create($data2);
        $this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully Created !
              </div>');
   redirect('User/CreateUser');
    }else{
      $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                This User ID Already Existed !
              </div>');
  redirect('User/CreateUser');
    }
  
  }else{
     $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                This Username Already Existed !
              </div>');
  redirect('User/CreateUser');

  }

}
else{
  $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                This User Email Already Existed !
              </div>');
  redirect('User/CreateUser');

}
}
public function createRole(){
  $data=array();
    $data['ac_menu35']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   

  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('createRole',$data);
    $this->load->view('footer');


}
public function chooseEmployee(){
	$json = [];
    $this->load->database();
    if(!empty($this->input->get("q"))){
      $this->db->like('user_id', $this->input->get("q"));
      $query = $this->db->select('user_id id, username as text')
            ->limit(10)
            ->get("users");
      $json = $query->result();
    }

    
    echo json_encode($json);
  }
  
public function createdRole(){
  $user_id=$_POST['user_id'];
  $data=array();
$data['type']=$this->input->post('type', true);
$data['active']=$this->input->post('active', true);
$updata=$this->UserModel->updateRole($data,$user_id);
if($updata){
$this->session->set_flashdata('success_msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully Updated !
              </div>');
redirect('User/createRole');
}
else{
  $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
  redirect('User/createRole');

}
}
// public function profile(){
//   $data=array();
//     $data['profile']='active';
//     $data['muser']='ActivePanel';
//     $data['uncolapse']='hold-transition skin-blue sidebar-mini';
//     $data['ac_hover']='<style type="text/css">
//  .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
//  </style>
// ';   
// $data['pu']=$this->UserModel->profupdate();
// $data['research']=$this->UserModel->research();
// $data['research2']=$this->UserModel->research2();
// $data['category']=$this->UserModel->dropdown();

//   $this->load->view('header',$data);
//     $this->load->view('sidebar',$data);
//     $this->load->view('profile',$data);
//     $this->load->view('footer');
// }
// public function profile2(){
//   $data=array();
//     $data['profile']='active';
//     $data['muser']='ActivePanel';
//     $data['uncolapse']='hold-transition skin-blue sidebar-mini';
//     $data['ac_hover']='<style type="text/css">
//  .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
//  </style>
// ';   
// $data['pu']=$this->UserModel->profupdate();
// $data['research']=$this->UserModel->research();
// $data['research2']=$this->UserModel->research2();
// $data['category']=$this->UserModel->dropdown();

//   $this->load->view('header',$data);
//     $this->load->view('sidebar',$data);
//     $this->load->view('profile2',$data);
//     $this->load->view('footer');
// }
public function profile3(){
  $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
$data['pu']=$this->UserModel->profupdate();
$data['pbdisable']=$this->UserModel->paybuttondisable();
$data['research']=$this->UserModel->research();
$data['research2']=$this->UserModel->research2();
$data['category']=$this->UserModel->dropdown();
$data['cnt']=$this->UserModel->countryShow();
$data['audoc']=$this->UserModel->audocpro();
$data['audoc2']=$this->UserModel->audocpro2();
//print_r($data['pbdisable']);
  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('profile3',$data);
   $this->load->view('footer');
}
public function profile4(){
  $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
$data['pu']=$this->UserModel->profupdate();
$data['research']=$this->UserModel->research();
$data['research2']=$this->UserModel->research2();
$data['category']=$this->UserModel->dropdown();
$data['cnt']=$this->UserModel->countryShow();
$data['audoc']=$this->UserModel->audocpro();
$data['audoc2']=$this->UserModel->audocpro2();

  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('profile4',$data);
   $this->load->view('footer');
}
public function fetch_subcategory(){
   $this->session->set_userdata(array(       
        'category' => trim($_POST['category'])
    )); 
    
    $data=$this->UserModel->fetch_subcategory();
    echo json_encode($data);
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
  redirect('User/change_password');
}else{
  redirect('User/change_password');
  $this->session->set_flashdata('error_msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Fails !
              </div>');
}

}
public function change_password(){
  $data=array();
    $data['change_password']='active';
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
}






