<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

public function __construct(){

        parent::__construct();
      $this->load->helper('url');
      $this->load->model('UserModel');
        $this->load->model('MailModel');
        $this->load->library('session');

}

  public function index()
  {
   
          $this->load->view('adminlogin.php');

}
public function StudentList(){
    $data=array();
    $data['StudentList']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['parlist']=$this->UserModel->studentlist();
   //print_r($data['alist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('StudentList',$data);
         $this->load->view('footer');
}
public function AuthorStudentList(){
    $data=array();
    $data['AuthorStudentList']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['aslist']=$this->UserModel->AuthorStudentList();
   //print_r($data['alist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('AuthorStudentList',$data);
         $this->load->view('footer');
}
public function BrowserShutDownPayment(){
    $data=array();
    $data['BrowserShutDownPayment']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['parlist']=$this->UserModel->BrowserShutDownPayment();
   //print_r($data['parlist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('BrowserShutDownPayment',$data);
         $this->load->view('footer');
}
public function NonStudentList(){
    $data=array();
    $data['NonStudentList']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['parlist']=$this->UserModel->nonstudentlist();
   //print_r($data['alist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('NonStudentList',$data);
         $this->load->view('footer');
}

public function NonStudentAuthorPayment(){
    $data=array();
    $data['NonStudentAuthorPayment']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['parlist']=$this->UserModel->NonStudentAuthorPayment();
   //print_r($data['parlist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('NonStudentAuthorPayment',$data);
         $this->load->view('footer');
}
public function NonStudentAuthorPaymentDownloadCSV(){
 $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->NonStudentAuthorPayment();
      // print_r($prd);
      // exit();
       $title = array("AuthorName","Ist AbstractID","2nd AbstractID","Email","Contact","Organization<br>University","Address","Country","Trans.ID","Currency","TotalAmount","StoreAmount","CardType","BankTran.ID","CardNo",
                     "Tran.DateTime","Status");        
        header('Content-Type: text/csv');
        $fileName = 'NonStudentAuthorPayment Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->cus_name;
        $val[1] =$line->value_a;
        $val[2] = $line->value_d;
        $val[3] = $line->cus_email;
        $val[4] = $line->cus_phone; 
        $val[5] = $line->value_b; 
        $val[6] = $line->cus_add1; 
        $val[7] = $line->cus_country; 
        $val[8] =$line->tran_id;
        $val[9] =$line->currency;       
        $val[10] =$line->total_amount;
        $val[11] =$line->store_amount;    
        $val[12] =$line->card_type; 
        $val[13] =$line->bank_tran_id; 
        $val[14] =$line->card_no; 
        $val[15] =$line->tran_date;   
          if($line->risk_level=='1'){
        $val[16] ='Hold'; 
        }
         if($line->risk_level=='0'){
        $val[16] ='Success'; 
        }
        if($line->risk_level=='NULL'){
        $val[16] ='Unpaid'; 
        }
        
        fputcsv($fp, $val);
    }

    fclose($fp);

    
      
}
public function DownloadCSV(){

  $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->alist();
      // print_r($prd);
      // exit();
       $title = array("Paper Submission Author","Email","Role","Address","Organization<br>University","Country","1st Abstract ID","2nd Abstract ID","1st Theme","1st Subtheme","2nd Theme","2nd Subtheme","1st Abstract 1stAuthorName",
                     "1st Abstract 1stAuthorEmail","1st Abstract 1stAuthorPhone","1st Abstract 1stAuthorAffiliation","1st Abstract 1stAuthorCountry","1st Abstract PresentingAuthorName",
                     "1st Abstract PresentingAuthorEmail","1st Abstract PresentingAuthorPhone","1st Abstract PresentingAuthorAffiliation","1st Abstract PresentingAuthorCountry","1st Abstract CorrespondingAuthorName","1st Abstract CorrespondingAuthorEmail",
                     "1st Abstract CorrespondingAuthorPhone","1st Abstract CorrespondingAuthorAffiliation","1st Abstract CorrespondingAuthorCountry",
                  "2nd Abstract 1stAuthorName","2nd Abstract 1stAuthorEmail","2nd Abstract 1stAuthorPhone","2nd Abstract 1stAuthorAffiliation","2nd Abstract 1stAuthorCountry","2nd Abstract PresentingAuthorName",
                     "2nd Abstract PresentingAuthorEmail","2nd Abstract PresentingAuthorPhone","2nd Abstract PresentingAuthorAffiliation","2nd Abstract PresentingAuthorCountry",
                     "2nd Abstract CorrespondingAuthorName","2nd Abstract CorrespondingAuthorEmail","2nd Abstract CorrespondingAuthorPhone","2nd Abstract CorrespondingAuthorAffiliation","2nd Abstract CorrespondingAuthorCountry","1st Abstract Submitted Status","2nd Abstract Submitted Status","Date");        
        header('Content-Type: text/csv');
        $fileName = 'Author Abstract Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->membername;
        $val[1] =$line->email;
       if($line->role>'0'){
        $val[2] ='Student'; 
        }else{
          $val[2] ='Non-Student';  
        }
        $val[3] = $line->address;
        $val[4] = $line->university;
        $val[5] = $line->countryname; 
        $val[6] = $line->prof_id; 
        $val[7] = $line->prof_id2; 
        $val[8] = $line->category; 
        $val[9] =$line->subcategory;
        $val[10] =$line->category2;       
        $val[11] =$line->subcategory2;
        $val[12] =$line->firstauthfname.' '.$line->firstauthmname.' '.$line->firstauthlname;    
        $val[13] =$line->firstauthemail; 
        $val[14] =$line->firstauthcontactno; 
        $val[15] =$line->firstauthaffiliation; 
        $val[16] =$line->firstauthcountryname;   
        $val[17] =$line->corauthfname.' '.$line->corauthmname.' '.$line->corauthlname;    
        $val[18] =$line->corauthemail; 
        $val[19] =$line->corauthcontactno; 
        $val[20] =$line->corauthaffiliation; 
        $val[21] =$line->corauthcountryname; 
        $val[22] =$line->preauthfname.' '.$line->preauthmname.' '.$line->preauthlname;    
        $val[23] =$line->preauthemail; 
        $val[24] =$line->preauthcontactno; 
        $val[25] =$line->preauthaffiliation; 
        $val[26] =$line->preauthcountryname;   
        $val[27] =$line->firstauthfname2.' '.$line->firstauthmname2.' '.$line->firstauthlname2;    
        $val[28] =$line->firstauthemail2; 
        $val[29] =$line->firstauthcontactno2; 
        $val[30] =$line->firstauthaffiliation2; 
        $val[31] =$line->firstauthcountryname2;   
        $val[32] =$line->corauthfname2.' '.$line->corauthmname2.' '.$line->corauthlname2;    
        $val[33] =$line->corauthemail2; 
        $val[34] =$line->corauthcontactno2; 
        $val[35] =$line->corauthaffiliation2; 
        $val[36] =$line->corauthcountryname2; 
        $val[37] =$line->preauthfname2.' '.$line->preauthmname2.' '.$line->preauthlname2;    
        $val[38] =$line->preauthemail2; 
        $val[39] =$line->preauthcontactno2; 
        $val[40] =$line->preauthaffiliation2; 
        $val[41] =$line->preauthcountryname2; 
        if($line->firstabs_submitstatus>'0'){
        $val[42] ='First Abstract Submitted'; 
        }else{
          $val[42] ='First Abstract Not Submitted';  
        }
         if($line->secondabs_submitstatus>'0'){
        $val[43] ='Second Abstract Submitted'; 
        }else{
          $val[43] ='Second Abstract Not Submitted';  
        }
        $val[44] =$line->regdate; 

         
        fputcsv($fp, $val);
    }

    fclose($fp);

    
    }
    
public function CO_AUTHORDownloadCSV(){

  $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->Coauthorlist();
      // print_r($prd);
      // exit();
       $title = array("1st Abstract ID","Email","Ist Co-Author Name","Ist Affiliatio/Email","2nd Co-Author Name","2nd Affiliatio/Email","3rd Co-Author Name","3rd Affiliatio/Email","4th Co-Author Name","4th Affiliatio/Email","5th Co-Author Name","5th Affiliatio/Email","6th Co-Author Name","6th Affiliatio/Email","7th Co-Author Name","7th Affiliatio/Email","8th Co-Author Name","8th Affiliatio/Email","9th Co-Author Name","9th Affiliatio/Email","10th Co-Author Name","10th Affiliatio/Email");        
        header('Content-Type: text/csv');
        $fileName = '1ST Abstract Co-Author Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->prof_id;
        $val[1] =$line->email;
        $val[2] =$line->authfname_box1.' '.$line->authmname_box1.' '.$line->authlname_box1; 
        $val[3] =$line->affiliation_box1; 
         $val[4] =$line->authfname2.' '.$line->authmname2.' '.$line->authlname2; 
        $val[5] =$line->affiliation2; 
         $val[6] =$line->authfname3.' '.$line->authmname3.' '.$line->authlname3; 
        $val[7] =$line->affiliation3; 
        $val[8] =$line->authfname4.' '.$line->authmname4.' '.$line->authlname4; 
        $val[9] =$line->affiliation4; 
         $val[10] =$line->authfname5.' '.$line->authmname5.' '.$line->authlname5; 
        $val[11] =$line->affiliation5; 
         $val[12] =$line->authfname6.' '.$line->authmname6.' '.$line->authlname6; 
        $val[13] =$line->affiliation6; 
         $val[14] =$line->authfname7.' '.$line->authmname7.' '.$line->authlname7; 
        $val[15] =$line->affiliation7; 
        $val[16] =$line->authfname8.' '.$line->authmname8.' '.$line->authlname8; 
        $val[17] =$line->affiliation8; 
        $val[18] =$line->authfname9.' '.$line->authmname9.' '.$line->authlname9; 
        $val[19] =$line->affiliation9; 
        $val[20] =$line->authfname10.' '.$line->authmname10.' '.$line->authlname10; 
        $val[21] =$line->affiliation10; 
         
        fputcsv($fp, $val);
    }

    fclose($fp);

    
    }
    public function CO_AUTHORDownloadCSV2(){

  $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->Coauthorlist2();
      // print_r($prd);
      // exit();
       $title = array("1st Abstract ID","Email","Ist Co-Author Name","Ist Affiliatio/Email","2nd Co-Author Name","2nd Affiliatio/Email","3rd Co-Author Name","3rd Affiliatio/Email","4th Co-Author Name","4th Affiliatio/Email","5th Co-Author Name","5th Affiliatio/Email","6th Co-Author Name","6th Affiliatio/Email","7th Co-Author Name","7th Affiliatio/Email","8th Co-Author Name","8th Affiliatio/Email","9th Co-Author Name","9th Affiliatio/Email","10th Co-Author Name","10th Affiliatio/Email");        
        header('Content-Type: text/csv');
        $fileName = '2nd Abstract Co-Author Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->prof_id;
        $val[1] =$line->email;
        $val[2] =$line->authfname_box1.' '.$line->authmname_box1.' '.$line->authlname_box1; 
        $val[3] =$line->affiliation_box1; 
         $val[4] =$line->authfname2.' '.$line->authmname2.' '.$line->authlname2; 
        $val[5] =$line->affiliation2; 
         $val[6] =$line->authfname3.' '.$line->authmname3.' '.$line->authlname3; 
        $val[7] =$line->affiliation3; 
        $val[8] =$line->authfname4.' '.$line->authmname4.' '.$line->authlname4; 
        $val[9] =$line->affiliation4; 
         $val[10] =$line->authfname5.' '.$line->authmname5.' '.$line->authlname5; 
        $val[11] =$line->affiliation5; 
         $val[12] =$line->authfname6.' '.$line->authmname6.' '.$line->authlname6; 
        $val[13] =$line->affiliation6; 
         $val[14] =$line->authfname7.' '.$line->authmname7.' '.$line->authlname7; 
        $val[15] =$line->affiliation7; 
        $val[16] =$line->authfname8.' '.$line->authmname8.' '.$line->authlname8; 
        $val[17] =$line->affiliation8; 
        $val[18] =$line->authfname9.' '.$line->authmname9.' '.$line->authlname9; 
        $val[19] =$line->affiliation9; 
        $val[20] =$line->authfname10.' '.$line->authmname10.' '.$line->authlname10; 
        $val[21] =$line->affiliation10; 
         
        fputcsv($fp, $val);
    }

    fclose($fp);

    
    }
    
public function DownloadCSV2ndAbsSaved(){

  $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->alistsave2();
      // print_r($prd);
      // exit();
       $title = array("AuthorName","Organization<br>University","Country","1st Abstract ID","2nd Abstract ID","1st Theme","1st Subtheme","2nd Theme","2nd Subtheme","1st Abstract 1stAuthorName",
                     "1st Abstract 1stAuthorEmail","1st Abstract 1stAuthorPhone","1st Abstract 1stAuthorAffiliation","1st Abstract 1stAuthorCountry","1st Abstract PresentingAuthorName",
                     "1st Abstract PresentingAuthorEmail","1st Abstract PresentingAuthorPhone","1st Abstract PresentingAuthorAffiliation","1st Abstract PresentingAuthorCountry","1st Abstract CorrespondingAuthorName","1st Abstract CorrespondingAuthorEmail",
                     "1st Abstract CorrespondingAuthorPhone","1st Abstract CorrespondingAuthorAffiliation","1st Abstract CorrespondingAuthorCountry",
                  "2nd Abstract 1stAuthorName","2nd Abstract 1stAuthorEmail","2nd Abstract 1stAuthorPhone","2nd Abstract 1stAuthorAffiliation","2nd Abstract 1stAuthorCountry","2nd Abstract PresentingAuthorName",
                     "2nd Abstract PresentingAuthorEmail","2nd Abstract PresentingAuthorPhone","2nd Abstract PresentingAuthorAffiliation","2nd Abstract PresentingAuthorCountry",
                     "2nd Abstract CorrespondingAuthorName","2nd Abstract CorrespondingAuthorEmail","2nd Abstract CorrespondingAuthorPhone","2nd Abstract CorrespondingAuthorAffiliation","2nd Abstract CorrespondingAuthorCountry","1st Abstract Submitted Status","2nd Abstract Submitted Status","Date");        
        header('Content-Type: text/csv');
        $fileName = 'Author Abstract Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->membername;
        $val[1] = $line->university;
        $val[2] = $line->countryname; 
        $val[3] = $line->prof_id; 
        $val[4] = $line->prof_id2; 
        $val[5] = $line->category; 
        $val[6] =$line->subcategory;
        $val[7] =$line->category2;       
        $val[8] =$line->subcategory2;
        $val[9] =$line->firstauthfname.' '.$line->firstauthmname.' '.$line->firstauthlname;    
        $val[10] =$line->firstauthemail; 
        $val[11] =$line->firstauthcontactno; 
        $val[12] =$line->firstauthaffiliation; 
        $val[13] =$line->firstauthcountryname;   
        $val[14] =$line->corauthfname.' '.$line->corauthmname.' '.$line->corauthlname;    
        $val[15] =$line->corauthemail; 
        $val[16] =$line->corauthcontactno; 
        $val[17] =$line->corauthaffiliation; 
        $val[18] =$line->corauthcountryname; 
        $val[19] =$line->preauthfname.' '.$line->preauthmname.' '.$line->preauthlname;    
        $val[20] =$line->preauthemail; 
        $val[21] =$line->preauthcontactno; 
        $val[22] =$line->preauthaffiliation; 
        $val[23] =$line->preauthcountryname;   
        $val[24] =$line->firstauthfname2.' '.$line->firstauthmname2.' '.$line->firstauthlname2;    
        $val[25] =$line->firstauthemail2; 
        $val[26] =$line->firstauthcontactno2; 
        $val[27] =$line->firstauthaffiliation2; 
        $val[28] =$line->firstauthcountryname2;   
        $val[29] =$line->corauthfname2.' '.$line->corauthmname2.' '.$line->corauthlname2;    
        $val[30] =$line->corauthemail2; 
        $val[31] =$line->corauthcontactno2; 
        $val[32] =$line->corauthaffiliation2; 
        $val[33] =$line->corauthcountryname2; 
        $val[34] =$line->preauthfname2.' '.$line->preauthmname2.' '.$line->preauthlname2;    
        $val[35] =$line->preauthemail2; 
        $val[36] =$line->preauthcontactno2; 
        $val[37] =$line->preauthaffiliation2; 
        $val[38] =$line->preauthcountryname2; 
        if($line->firstabs_submitstatus>'0'){
        $val[39] ='First Abstract Submitted'; 
        }else{
          $val[39] ='First Abstract Not Submitted';  
        }
         if($line->secondabs_submitstatus>'0'){
        $val[40] ='Second Abstract Submitted'; 
        }else{
          $val[40] ='Second Abstract Not Submitted';  
        }
        $val[41] =$line->regdate; 

         
        fputcsv($fp, $val);
    }

    fclose($fp);

    
    }
    
public function AbstractSubmitted(){
    $data=array();
    $data['abs_subm']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alist']=$this->UserModel->alistsubmitted();
   //print_r($data['alist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('AbstractSubmitted',$data);
         $this->load->view('footer');
}
public function SecondAbstractSubmitted(){
    $data=array();
    $data['abs_subm2']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alist']=$this->UserModel->alistsubmitted2();
   //print_r($data['alist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('SecondAbstractSubmitted',$data);
         $this->load->view('footer');
}
public function AbstractSave(){
      $data=array();
    $data['abs_save']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alist']=$this->UserModel->alistsave();
   //print_r($data['alist']);
     $this->load->view('adminheader',$data);
    $this->load->view('sidebaradmin',$data);
    $this->load->view('AbstractSave',$data);
    $this->load->view('footer');
}
public function SecondAbstractSave(){
  $data=array();
    $data['abs_save2']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alist']=$this->UserModel->alistsave2();
   //print_r($data['alist']);
     $this->load->view('adminheader',$data);
    $this->load->view('sidebaradmin',$data);
    $this->load->view('secondabssaved',$data);
    $this->load->view('footer');   
}
public function DownloadCSVAbsSaved(){
   
  $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->alistsave();
      // print_r($prd);
      // exit();
       $title = array("AuthorName","Organization<br>University","Country","1st Abstract ID","2nd Abstract ID","1st Theme","1st Subtheme","2nd Theme","2nd Subtheme","1st Abstract 1stAuthorName",
                     "1st Abstract 1stAuthorEmail","1st Abstract 1stAuthorPhone","1st Abstract 1stAuthorAffiliation","1st Abstract 1stAuthorCountry","1st Abstract PresentingAuthorName",
                     "1st Abstract PresentingAuthorEmail","1st Abstract PresentingAuthorPhone","1st Abstract PresentingAuthorAffiliation","1st Abstract PresentingAuthorCountry","1st Abstract CorrespondingAuthorName","1st Abstract CorrespondingAuthorEmail",
                     "1st Abstract CorrespondingAuthorPhone","1st Abstract CorrespondingAuthorAffiliation","1st Abstract CorrespondingAuthorCountry",
                  "2nd Abstract 1stAuthorName","2nd Abstract 1stAuthorEmail","2nd Abstract 1stAuthorPhone","2nd Abstract 1stAuthorAffiliation","2nd Abstract 1stAuthorCountry","2nd Abstract PresentingAuthorName",
                     "2nd Abstract PresentingAuthorEmail","2nd Abstract PresentingAuthorPhone","2nd Abstract PresentingAuthorAffiliation","2nd Abstract PresentingAuthorCountry",
                     "2nd Abstract CorrespondingAuthorName","2nd Abstract CorrespondingAuthorEmail","2nd Abstract CorrespondingAuthorPhone","2nd Abstract CorrespondingAuthorAffiliation","2nd Abstract CorrespondingAuthorCountry","1st Abstract Submitted Status","2nd Abstract Submitted Status","Date");        
        header('Content-Type: text/csv');
        $fileName = 'Author Abstract Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->membername;
        $val[1] = $line->university;
        $val[2] = $line->countryname; 
        $val[3] = $line->prof_id; 
        $val[4] = $line->prof_id2; 
        $val[5] = $line->category; 
        $val[6] =$line->subcategory;
        $val[7] =$line->category2;       
        $val[8] =$line->subcategory2;
        $val[9] =$line->firstauthfname.' '.$line->firstauthmname.' '.$line->firstauthlname;    
        $val[10] =$line->firstauthemail; 
        $val[11] =$line->firstauthcontactno; 
        $val[12] =$line->firstauthaffiliation; 
        $val[13] =$line->firstauthcountryname;   
        $val[14] =$line->corauthfname.' '.$line->corauthmname.' '.$line->corauthlname;    
        $val[15] =$line->corauthemail; 
        $val[16] =$line->corauthcontactno; 
        $val[17] =$line->corauthaffiliation; 
        $val[18] =$line->corauthcountryname; 
        $val[19] =$line->preauthfname.' '.$line->preauthmname.' '.$line->preauthlname;    
        $val[20] =$line->preauthemail; 
        $val[21] =$line->preauthcontactno; 
        $val[22] =$line->preauthaffiliation; 
        $val[23] =$line->preauthcountryname;   
        $val[24] =$line->firstauthfname2.' '.$line->firstauthmname2.' '.$line->firstauthlname2;    
        $val[25] =$line->firstauthemail2; 
        $val[26] =$line->firstauthcontactno2; 
        $val[27] =$line->firstauthaffiliation2; 
        $val[28] =$line->firstauthcountryname2;   
        $val[29] =$line->corauthfname2.' '.$line->corauthmname2.' '.$line->corauthlname2;    
        $val[30] =$line->corauthemail2; 
        $val[31] =$line->corauthcontactno2; 
        $val[32] =$line->corauthaffiliation2; 
        $val[33] =$line->corauthcountryname2; 
        $val[34] =$line->preauthfname2.' '.$line->preauthmname2.' '.$line->preauthlname2;    
        $val[35] =$line->preauthemail2; 
        $val[36] =$line->preauthcontactno2; 
        $val[37] =$line->preauthaffiliation2; 
        $val[38] =$line->preauthcountryname2; 
        if($line->firstabs_submitstatus>'0'){
        $val[39] ='First Abstract Submitted'; 
        }else{
          $val[39] ='First Abstract Not Submitted';  
        }
         if($line->secondabs_submitstatus>'0'){
        $val[40] ='Second Abstract Submitted'; 
        }else{
          $val[40] ='Second Abstract Not Submitted';  
        }
        $val[41] =$line->regdate; 

         
        fputcsv($fp, $val);
    }

    fclose($fp);

     
}
public function DownloadCSVAbssummitted(){
   $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->alistsubmitted();
      // print_r($prd);
      // exit();
       $title = array("AuthorName","Organization<br>University","Country","1st Abstract ID","2nd Abstract ID","1st Theme","1st Subtheme","2nd Theme","2nd Subtheme","1st Abstract 1stAuthorName",
                     "1st Abstract 1stAuthorEmail","1st Abstract 1stAuthorPhone","1st Abstract 1stAuthorAffiliation","1st Abstract 1stAuthorCountry","1st Abstract PresentingAuthorName",
                     "1st Abstract PresentingAuthorEmail","1st Abstract PresentingAuthorPhone","1st Abstract PresentingAuthorAffiliation","1st Abstract PresentingAuthorCountry","1st Abstract CorrespondingAuthorName","1st Abstract CorrespondingAuthorEmail",
                     "1st Abstract CorrespondingAuthorPhone","1st Abstract CorrespondingAuthorAffiliation","1st Abstract CorrespondingAuthorCountry",
                  "2nd Abstract 1stAuthorName","2nd Abstract 1stAuthorEmail","2nd Abstract 1stAuthorPhone","2nd Abstract 1stAuthorAffiliation","2nd Abstract 1stAuthorCountry","2nd Abstract PresentingAuthorName",
                     "2nd Abstract PresentingAuthorEmail","2nd Abstract PresentingAuthorPhone","2nd Abstract PresentingAuthorAffiliation","2nd Abstract PresentingAuthorCountry",
                     "2nd Abstract CorrespondingAuthorName","2nd Abstract CorrespondingAuthorEmail","2nd Abstract CorrespondingAuthorPhone","2nd Abstract CorrespondingAuthorAffiliation","2nd Abstract CorrespondingAuthorCountry","1st Abstract Submitted Status","2nd Abstract Submitted Status","Date");        
        header('Content-Type: text/csv');
        $fileName = 'Author Abstract Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->membername;
        $val[1] = $line->university;
        $val[2] = $line->countryname; 
        $val[3] = $line->prof_id; 
        $val[4] = $line->prof_id2; 
        $val[5] = $line->category; 
        $val[6] =$line->subcategory;
        $val[7] =$line->category2;       
        $val[8] =$line->subcategory2;
        $val[9] =$line->firstauthfname.' '.$line->firstauthmname.' '.$line->firstauthlname;    
        $val[10] =$line->firstauthemail; 
        $val[11] =$line->firstauthcontactno; 
        $val[12] =$line->firstauthaffiliation; 
        $val[13] =$line->firstauthcountryname;   
        $val[14] =$line->corauthfname.' '.$line->corauthmname.' '.$line->corauthlname;    
        $val[15] =$line->corauthemail; 
        $val[16] =$line->corauthcontactno; 
        $val[17] =$line->corauthaffiliation; 
        $val[18] =$line->corauthcountryname; 
        $val[19] =$line->preauthfname.' '.$line->preauthmname.' '.$line->preauthlname;    
        $val[20] =$line->preauthemail; 
        $val[21] =$line->preauthcontactno; 
        $val[22] =$line->preauthaffiliation; 
        $val[23] =$line->preauthcountryname;   
        $val[24] =$line->firstauthfname2.' '.$line->firstauthmname2.' '.$line->firstauthlname2;    
        $val[25] =$line->firstauthemail2; 
        $val[26] =$line->firstauthcontactno2; 
        $val[27] =$line->firstauthaffiliation2; 
        $val[28] =$line->firstauthcountryname2;   
        $val[29] =$line->corauthfname2.' '.$line->corauthmname2.' '.$line->corauthlname2;    
        $val[30] =$line->corauthemail2; 
        $val[31] =$line->corauthcontactno2; 
        $val[32] =$line->corauthaffiliation2; 
        $val[33] =$line->corauthcountryname2; 
        $val[34] =$line->preauthfname2.' '.$line->preauthmname2.' '.$line->preauthlname2;    
        $val[35] =$line->preauthemail2; 
        $val[36] =$line->preauthcontactno2; 
        $val[37] =$line->preauthaffiliation2; 
        $val[38] =$line->preauthcountryname2; 
        if($line->firstabs_submitstatus>'0'){
        $val[39] ='First Abstract Submitted'; 
        }else{
          $val[39] ='First Abstract Not Submitted';  
        }
         if($line->secondabs_submitstatus>'0'){
        $val[40] ='Second Abstract Submitted'; 
        }else{
          $val[40] ='Second Abstract Not Submitted';  
        }
        $val[41] =$line->regdate; 

         
        fputcsv($fp, $val);
    }

    fclose($fp);    
}
public function DownloadCSV2ndAbssummitted(){
   $export_arr = array();
       //$prd=$this->ProductModel->productSearch();
      $abslist=$this->UserModel->alistsubmitted2();
      // print_r($prd);
      // exit();
       $title = array("AuthorName","Organization<br>University","Country","1st Abstract ID","2nd Abstract ID","1st Theme","1st Subtheme","2nd Theme","2nd Subtheme","1st Abstract 1stAuthorName",
                     "1st Abstract 1stAuthorEmail","1st Abstract 1stAuthorPhone","1st Abstract 1stAuthorAffiliation","1st Abstract 1stAuthorCountry","1st Abstract PresentingAuthorName",
                     "1st Abstract PresentingAuthorEmail","1st Abstract PresentingAuthorPhone","1st Abstract PresentingAuthorAffiliation","1st Abstract PresentingAuthorCountry","1st Abstract CorrespondingAuthorName","1st Abstract CorrespondingAuthorEmail",
                     "1st Abstract CorrespondingAuthorPhone","1st Abstract CorrespondingAuthorAffiliation","1st Abstract CorrespondingAuthorCountry",
                  "2nd Abstract 1stAuthorName","2nd Abstract 1stAuthorEmail","2nd Abstract 1stAuthorPhone","2nd Abstract 1stAuthorAffiliation","2nd Abstract 1stAuthorCountry","2nd Abstract PresentingAuthorName",
                     "2nd Abstract PresentingAuthorEmail","2nd Abstract PresentingAuthorPhone","2nd Abstract PresentingAuthorAffiliation","2nd Abstract PresentingAuthorCountry",
                     "2nd Abstract CorrespondingAuthorName","2nd Abstract CorrespondingAuthorEmail","2nd Abstract CorrespondingAuthorPhone","2nd Abstract CorrespondingAuthorAffiliation","2nd Abstract CorrespondingAuthorCountry","1st Abstract Submitted Status","2nd Abstract Submitted Status","Date");        
        header('Content-Type: text/csv');
        $fileName = 'Author Abstract Details-' . date('d-m-Y') . '.csv';
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $title); 
       
    foreach ($abslist as $line ) {       
        $val[0] =$line->membername;
        $val[1] = $line->university;
        $val[2] = $line->countryname; 
        $val[3] = $line->prof_id; 
        $val[4] = $line->prof_id2; 
        $val[5] = $line->category; 
        $val[6] =$line->subcategory;
        $val[7] =$line->category2;       
        $val[8] =$line->subcategory2;
        $val[9] =$line->firstauthfname.' '.$line->firstauthmname.' '.$line->firstauthlname;    
        $val[10] =$line->firstauthemail; 
        $val[11] =$line->firstauthcontactno; 
        $val[12] =$line->firstauthaffiliation; 
        $val[13] =$line->firstauthcountryname;   
        $val[14] =$line->corauthfname.' '.$line->corauthmname.' '.$line->corauthlname;    
        $val[15] =$line->corauthemail; 
        $val[16] =$line->corauthcontactno; 
        $val[17] =$line->corauthaffiliation; 
        $val[18] =$line->corauthcountryname; 
        $val[19] =$line->preauthfname.' '.$line->preauthmname.' '.$line->preauthlname;    
        $val[20] =$line->preauthemail; 
        $val[21] =$line->preauthcontactno; 
        $val[22] =$line->preauthaffiliation; 
        $val[23] =$line->preauthcountryname;   
        $val[24] =$line->firstauthfname2.' '.$line->firstauthmname2.' '.$line->firstauthlname2;    
        $val[25] =$line->firstauthemail2; 
        $val[26] =$line->firstauthcontactno2; 
        $val[27] =$line->firstauthaffiliation2; 
        $val[28] =$line->firstauthcountryname2;   
        $val[29] =$line->corauthfname2.' '.$line->corauthmname2.' '.$line->corauthlname2;    
        $val[30] =$line->corauthemail2; 
        $val[31] =$line->corauthcontactno2; 
        $val[32] =$line->corauthaffiliation2; 
        $val[33] =$line->corauthcountryname2; 
        $val[34] =$line->preauthfname2.' '.$line->preauthmname2.' '.$line->preauthlname2;    
        $val[35] =$line->preauthemail2; 
        $val[36] =$line->preauthcontactno2; 
        $val[37] =$line->preauthaffiliation2; 
        $val[38] =$line->preauthcountryname2; 
        if($line->firstabs_submitstatus>'0'){
        $val[39] ='First Abstract Submitted'; 
        }else{
          $val[39] ='First Abstract Not Submitted';  
        }
         if($line->secondabs_submitstatus>'0'){
        $val[40] ='Second Abstract Submitted'; 
        }else{
          $val[40] ='Second Abstract Not Submitted';  
        }
        $val[41] =$line->regdate; 

         
        fputcsv($fp, $val);
    }

    fclose($fp);   
}
public function MemberNotSaveSubmit(){
    $data=array();
    $data['member']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alist']=$this->UserModel->MemberNotSaveSubmit();
   //print_r($data['alist']);
     $this->load->view('adminheader',$data);
    $this->load->view('sidebaradmin',$data);
    $this->load->view('authorlist',$data);
    $this->load->view('footer');   
}
public function AuthorList(){
    $data=array();
    $data['AuthorList']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alist']=$this->UserModel->alist();
   //print_r($data['alist']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('authorlist',$data);
         $this->load->view('footer');
}
public function Home(){
    $data=array();
    $data['profile']='active';
    $data['muser']='ActivePanel';
    $data['uncolapse']='hold-transition skin-blue sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
    $data['alistc']=$this->UserModel->alistsubmittedcount();
    $data['alistc2']=$this->UserModel->alistsubmitted2count();
    $data['alists']=$this->UserModel->alistsubmittedSave();
    $data['alists2']=$this->UserModel->alistsubmittedSave2();
    //print_r($data['alistc']);
        $this->load->view('adminheader',$data);
         $this->load->view('sidebaradmin',$data);
         $this->load->view('dashboard',$data);
         $this->load->view('footer');
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
 $data['audoc']=$this->UserModel->abs1stdataAdmin($absId);
 //print_r($data['audoc']);
 //$this->load->view('header',$data);
  //$this->load->view('sidebar',$data);
 $this->load->view('AuthorDocs',$data);
    
}
// public function Downloadabs1(){
//     $data=$this->UserModel->absEmail();
//      echo json_encode($data);
   
// }
// public function Download(){
//     $data=array();
//     $data['fdownload']=$this->UserModel->absEmail();
//     $this->load->view('download',$data);
// }
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
 $data['audoc']=$this->UserModel->abs2ndataAdmin($absId);
 //print_r($data['audoc']);
 //$this->load->view('header',$data);
  //$this->load->view('sidebar',$data);
 $this->load->view('AuthorDocs2',$data);
}
  public function Admin_login(){
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $data2=$this->UserModel->login_admin2($email,$password);
    if($data2){
    $data=$this->UserModel->login_admin($email,$password);
    $user_id=$this->session->userdata('user_id');
      if($data || $user_id ){
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('username',$data['username']);
        $this->session->set_userdata('type',$data['type']);
       $this->session->set_userdata('image',$data['image']);
       redirect('Admin/Home');
      }
 

  }else{
      $this->session->set_flashdata('error_msg', 'Your Credentials Invalid !');
        redirect('Admin');  
  }
  }
public function Admin_logout(){
  $this->session->sess_destroy();
  redirect('Admin', 'refresh');
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
  redirect('Admin/change_password');
}else{
  redirect('Admin/change_password');
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