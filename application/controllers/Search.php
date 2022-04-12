<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

public function __construct(){

        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('UserModel');
  	 	 $this->load->model('CustomerModel');
  	 	$this->load->model('AccountingModel');
  	 	 $this->load->model('SearchModel');
        $this->load->library('session');

}

public function DailyLedgerByDate2(){
     $data=array();
    $data['ac_menu6']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   


  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('drcrSearchByDate',$data);
    $this->load->view('footer'); 
}
public function DailyLedgerByDate(){
     $data=array();
    $data['ac_menu6']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
 $this->session->set_userdata(array(
        'trdate3'  => $_POST['trdate3']
        
    )); 
  $data['creditRec']=$this->AccountingModel->CrRecddate();
   $data['debitRec']=$this->AccountingModel->DrRecddate();
  $data['crRecord']=$this->AccountingModel->CrRecdate();

  $data['creditRec13']=$this->AccountingModel->CrRecd13date();
  $data['debitRec20']=$this->AccountingModel->DrRecd20date();
    $data['debitRec3']=$this->AccountingModel->DrRecd3date();
    $data['pb']=$this->AccountingModel->OpeningBaldate();
    $data['pb2']=$this->AccountingModel->OpeningBal2date();

  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('drcrSearchByDate2',$data);
    $this->load->view('footer'); 
}


public function DailyLedger(){
	   $data=array();
    $data['ac_menu6']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
    
	$data['creditRec']=$this->AccountingModel->CrRecd();
	 $data['debitRec']=$this->AccountingModel->DrRecd();
	$data['crRecord']=$this->AccountingModel->CrRec();

	$data['creditRec13']=$this->AccountingModel->CrRecd13();
	$data['debitRec20']=$this->AccountingModel->DrRecd20();
    $data['debitRec3']=$this->AccountingModel->DrRecd3();
    $data['pb']=$this->AccountingModel->OpeningBal();
    $data['pb2']=$this->AccountingModel->OpeningBal2();

  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('dailyledger',$data);
    $this->load->view('footer'); 
}

public function DailyUserTr(){
     $data=array();
    $data['ac_menu6']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
    
  $data['creditRec']=$this->AccountingModel->CrRecdUser();
   $data['debitRec']=$this->AccountingModel->CrRecdUser2();
  $data['crRecord']=$this->AccountingModel->CrRecUser();
  $data['debitRec20']=$this->AccountingModel->DrRecd20User();


  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('dailytruser',$data);
    $this->load->view('footer'); 
}
public function DateWiseCash(){
   $data=array();
    $data['ac_menu6']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
$this->session->set_userdata(array(
        'trdate2'  => $_POST['trdate2']
        
    )); 
$data['creditRec']=$this->AccountingModel->CrRecdUser7();
   $data['debitRec']=$this->AccountingModel->CrRecdUser9();
  $data['crRecord']=$this->AccountingModel->CrRecUser7();
  $data['debitRec20']=$this->AccountingModel->DrRecd20User7();
  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('datewisecash',$data);
    $this->load->view('footer'); 

}
public function Ledger(){
  $data=array();
      $data['ac_menu7']='active';
    $data['muser']='SuperAdmin';
        $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';

    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   

	$this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('ledgerSearch',$data);
    $this->load->view('footer'); 

}
public function LedgerSearch(){	


  $this->session->set_userdata(array(
        'ledger'  => trim($_POST['ledger']),
        'trdate' => trim($_POST['trdate']),
        'trdate2' => trim($_POST['trdate2'])     
        
    )); 
  
   	$data=array();
      $data['ac_menu7']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
      // print_r($data);
  $data['creditRec']=$this->SearchModel->CrRecd();
  $data['crRecord']=$this->SearchModel->CrRec();
        //print_r($data);

  $data['creditRec13']=$this->SearchModel->CrRecd13();

     $data['debitRec']=$this->SearchModel->DrRecd();
  $data['debitRec20']=$this->SearchModel->DrRecd20();
    $data['debitRec3']=$this->SearchModel->DrRecd3();
    $data['pb']=$this->SearchModel->OpeningBal();
   $data['pb2']=$this->SearchModel->OpeningBal2();



	//$data['creditRec']=$this->AccountingModel->CrRecd($data);
	 // $data['debitRec']=$this->AccountingModel->DrRecd();
	//$data['crRecord']=$this->AccountingModel->CrRec();
	//$data['creditRec13']=$this->AccountingModel->CrRecd13();
   // $data['pb']=$this->AccountingModel->OpeningBal();
	$this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('searchledger',$data);
    $this->load->view('footer'); 
		
}
public function MonthlyLedger(){
    $data=array();
      $data['ac_menu10']='active';
    $data['muser']='SuperAdmin';
    $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';  
  $this->session->set_userdata(array(
        'm'  => $_POST['m']
        
    )); 
  $data['creditRec']=$this->AccountingModel->mCrRecd();

   $data['debitRec']=$this->AccountingModel->mDrRecd();
  $data['crRecord']=$this->AccountingModel->mCrRec();
  $data['creditRec13']=$this->AccountingModel->CrRecd13();
  $data['debitRec20']=$this->AccountingModel->mDrRecd20();
    $data['debitRec3']=$this->AccountingModel->DrRecd3();
    $data['pb']=$this->AccountingModel->mOpeningBal();
    $data['pb2']=$this->AccountingModel->mOpeningBal2(); 
  $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('MonthlyLedger',$data);
    $this->load->view('footer'); 
  
}
public function DownloadPDF(){
  $dd=date('d/Y');
$m=$this->session->userdata('m');
 $dt=$m.'/'.$dd;
  $data=array();
  $data['creditRec']=$this->AccountingModel->mCrRecd();
   $data['debitRec']=$this->AccountingModel->mDrRecd();
  $data['crRecord']=$this->AccountingModel->mCrRec();
  $data['creditRec13']=$this->AccountingModel->CrRecd13();
  $data['debitRec20']=$this->AccountingModel->mDrRecd20();
    $data['debitRec3']=$this->AccountingModel->DrRecd3();
    $data['pb']=$this->AccountingModel->mOpeningBal();
    $data['pb2']=$this->AccountingModel->mOpeningBal2(); 
  $mpdf = new \Mpdf\Mpdf();
   $html=$this->load->view('MonthlyLedger2',$data, true);
        $pdfFilePath = 'MonthlyLedger-'.$dt.'.pdf';
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "I");

}
public function CustomerDue(){
  $data=array();
  $data['ac_menu15']='active';
    $data['muser']='SuperAdmin';
   $data['colapse']='hold-transition skin-blue sidebar-collapse sidebar-mini';
    $data['ac_hover']='<style type="text/css">
 .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {color: #f39c12;}
 </style>
';   
  $data['duepay']=$this->AccountingModel->dpay();
  //print_r($data);
 $data['totaltk']=$this->AccountingModel->totaltk2();
$data['totaldue']=$this->AccountingModel->totaldue2();
$data['totalpaid']=$this->AccountingModel->totalpaid2();

   $this->load->view('header',$data);
    $this->load->view('sidebar',$data);
    $this->load->view('CustomerDue',$data);
    $this->load->view('footer'); 
}
public function DatewledgerPDF(){
  $ledger=$this->session->userdata('ledger');
$trdate=$this->session->userdata('trdate');
$trdate2=$this->session->userdata('trdate2');
  $data=array();
  $data['creditRec']=$this->SearchModel->CrRecd();
  $data['crRecord']=$this->SearchModel->CrRec();
        //print_r($data);

  $data['creditRec13']=$this->SearchModel->CrRecd13();

     $data['debitRec']=$this->SearchModel->DrRecd();
  $data['debitRec20']=$this->SearchModel->DrRecd20();
    $data['debitRec3']=$this->SearchModel->DrRecd3();
    $data['pb']=$this->SearchModel->OpeningBal();
   $data['pb2']=$this->SearchModel->OpeningBal2();
     $mpdf = new \Mpdf\Mpdf();
   $html=$this->load->view('searchledger2',$data, true);
        $pdfFilePath = 'Datewiseledger-'.$trdate.'.pdf';
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "I");

}
public function dailyledgerPDF(){
  $trdate=date('d-m-Y');
  $data=array();
  $data['creditRec']=$this->AccountingModel->CrRecd();
   $data['debitRec']=$this->AccountingModel->DrRecd();
  $data['crRecord']=$this->AccountingModel->CrRec();

  $data['creditRec13']=$this->AccountingModel->CrRecd13();
  $data['debitRec20']=$this->AccountingModel->DrRecd20();
    $data['debitRec3']=$this->AccountingModel->DrRecd3();
    $data['pb']=$this->AccountingModel->OpeningBal();
    $data['pb2']=$this->AccountingModel->OpeningBal2();
    $mpdf = new \Mpdf\Mpdf();
   $html=$this->load->view('dailyledgerPDF',$data, true);
        $pdfFilePath = 'Dailyledger-'.$trdate.'.pdf';
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "I");
}
public function CustomerDuePDF(){
    $trdate=date('d-m-Y');
  $data=array();
   $data['duepay']=$this->AccountingModel->dpay();
  //print_r($data);
 $data['totaltk']=$this->AccountingModel->totaltk2();
$data['totaldue']=$this->AccountingModel->totaldue2();
$data['totalpaid']=$this->AccountingModel->totalpaid2();
 $mpdf = new \Mpdf\Mpdf();
   $html=$this->load->view('CustomerDuePDF',$data, true);
        $pdfFilePath = 'CustomerDue-'.$trdate.'.pdf';
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "I");

}
}





