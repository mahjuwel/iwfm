<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct(){

        parent::__construct();
      $this->load->helper('url');
      $this->load->model('UserModel');
        $this->load->model('MailModel');
        $this->load->library('session');

}

  public function index()
  {
   
          $this->load->view('login.php');

}

 function send(){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'mail.deliveroneltd.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test@deliveroneltd.com';
        $mail->Password = 'w0exZ&#?7WTf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 26;
        $mail->setFrom('test@deliveroneltd.com', 'deliveroneltd');
        $mail->addReplyTo('mdalhasanj@gmail.com', 'Al Hasan Juwel');
        
        // Add a recipient
        $mail->addAddress('test@deliveroneltd.com');
        
        // Add cc or bcc 
        $mail->addCC('alhasanjuwelbd@gmail.com');
       // $mail->addBCC('');
        
        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email from localhost sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
   public function User_login(){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $data2=$this->UserModel->login_user2($email,$password);
    if($data2){
    $data=$this->UserModel->login_user($email,$password);
    $user_id=$this->session->userdata('user_id');
      if($data || $user_id ){
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('membername',$data['membername']);
        $this->session->set_userdata('step',$data['step']);
        $this->session->set_userdata('member_status',$data['member_status']);
       $this->session->set_userdata('image',$data['image']);
       redirect('User/profile3');
      }
 

  }else{
     $this->session->set_flashdata('error_msg', 'Credentials Invalid.');
        redirect('Login'); 
  }
  }
public function user_logout(){
  $this->session->sess_destroy();
  redirect('Login', 'refresh');
}


}