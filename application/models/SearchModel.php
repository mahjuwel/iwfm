<?php
if  (!defined('BASEPATH')) exit('No direct script access allowed');

class SearchModel extends CI_model{
   
   public function crtData($data){
 $result=$this->db->insert('cart',$data);
 return $result;
  
 }



public function searchpro($product_code){
	$this->db->select('barcode, product_code, productName, supplier, category, sellprice, buyprice, image, (tstock - tout) as avl');  
 $this->db->where('product_code', $product_code);
        $query=$this->db->get('product');
        return $query->row();
}
public function CartData($user_id){
	  $this->db->where('user_id',$user_id);
	   $query = $this->db->get('cart');
        return $query->result();

}
public function CartData2($user_id){
	 $this->db->select('SUM(sellprice*qty) subt, sum(qty) q, SUM(sellprice*qty)*0.10 tax');   
	  	  $this->db->group_by('user_id');
	  $this->db->where('user_id',$user_id);
	   $query = $this->db->get('cart');
        return $query->result();

}
public function cart_updatebyId($data,$id){
		  $result=$this->db->where('id',$id);
	 $result=$this->db->update('cart',$data);
 return $result;
}
public function createposPay($data){
	 $result=$this->db->insert('paymentrecord',$data);
 return $result;
}
public function deleteCart($data,$user_id){
	$result=$this->db->where('user_id',$user_id);
	$result=$this->db->delete('cart');
	 return $result; 

}
public function productInfofromCart($user_id){
	  $this->db->where('user_id',$user_id);
	   $query = $this->db->get('cart');
        return $query->result();
}
public function posCartData(){
	   $query = $this->db->order_by('invoice','desc');
         $query = $this->db->get('paymentrecord');
        return $query->result();	
}
public function invoice_datapull($data3){
  $result=$this->db->select('count(id) as code');
 $result=$this->db->get('paymentrecord')->row();
  return $result;
} 
public function credit_create($data){
 $result=$this->db->insert('tbl_credit2',$data);
    return $result; 
}
public function createCredit($data){
	 $result=$this->db->insert('tbl_credit2',$data);
    return $result; 
}
public function createDebit($data){
   $result=$this->db->insert('tbl_debit2',$data);
    return $result; 
}

public function CrRecd(){
$ledger=$this->session->userdata('ledger');
$trdate=$this->session->userdata('trdate');
$trdate2=$this->session->userdata('trdate2');
if($ledger=='All'){
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('crto2',$ledger);
$query = $this->db->get('tbl_credit2');
return $query->result(); 
}
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('crto',$ledger);
$query = $this->db->get('tbl_credit2');
return $query->result(); 
}

public function CrRecd2(){
$date=date('m/d/Y');
$query=$this->db->where('trdate',$date);
$query=$this->db->where('cat','Expense');
$query=$this->db->select('sum(dr) tdr');
$query=$this->db->group_by('trdate');
$query = $this->db->get('drcrrecord');
        return $query->result();	
	
}

public function CrRec(){
$ledger=$this->session->userdata('ledger');
$trdate=$this->session->userdata('trdate');
$trdate2=$this->session->userdata('trdate2');
if($ledger=='All'){
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('crto2',$ledger);
$query=$this->db->select('sum(cr) tcr');
$query = $this->db->get('tbl_credit2');
return $query->result(); 
}
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('crto',$ledger);
$query=$this->db->select('sum(cr) tcr');
$query = $this->db->get('tbl_credit2');
return $query->result();

}


public function CrRecd3(){
$query=$this->db->select('sum(cr) tcr2, sum(dr) tdr2, sum(cr)-sum(dr) bal, count(invoice) as inv');
$query = $this->db->get('drcrrecord');
        return $query->result();		
}
public function CrRecd13(){
$ledger=$this->session->userdata('ledger');
if($ledger=='All'){
$query=$this->db->where('crto2',$ledger);
$query=$this->db->select('sum(cr) tcr2');
$query = $this->db->get('tbl_credit2');
return $query->result(); 
}
$query=$this->db->where('crto',$ledger);
$query=$this->db->select('sum(cr) tcr2');
$query = $this->db->get('tbl_credit2');
return $query->result();

}
public function CrRecd14(){
$query=$this->db->where('cat','Expense');
$query=$this->db->select('sum(dr) tdr2');
$query = $this->db->get('drcrrecord');
 return $query->result();		
}
public function CashcrBal(){
$query=$this->db->where('crto','Cash');
$query=$this->db->select('sum(cr) cashcr');
$query = $this->db->get('drcrrecord');
        return $query->result();		
}
public function CashdrBal(){
$query=$this->db->where('drfrom','Cash');
$query=$this->db->select('sum(dr) cashdr');
$query = $this->db->get('drcrrecord');
 return $query->result();		
}
public function todayCashcrBal(){
$date=date('Y-m-d');
$query=$this->db->where('crto','Cash');
$query=$this->db->where('trdate', $date);
$query=$this->db->select('sum(cr) tcashcr');
$query = $this->db->get('drcrrecord');
        return $query->result();		
}
public function todayCashdrBal(){
$date=date('Y-m-d');
$query=$this->db->where('drfrom','Cash');
$query=$this->db->where('trdate', $date);
$query=$this->db->select('sum(dr) tcashdr');
$query = $this->db->get('drcrrecord');
 return $query->result();		
}
public function CrRecd4(){
$query=$this->db->select('count(invoice) as inv');
$query = $this->db->get('tbl_credit2');
        return $query->result();		
}

public function DrRecd(){
$trdate=$this->session->userdata('trdate');
$trdate2=$this->session->userdata('trdate2');
$ledger=$this->session->userdata('ledger');
if($ledger=='All'){
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('drfrom2',$ledger);
$query = $this->db->get('tbl_debit2');
  return $query->result();	
}
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('drfrom',$ledger);
$query = $this->db->get('tbl_debit2');
return $query->result();  
}
public function DrRecd2(){
	$date=date('Y-m-d');
$query=$this->db->where('dr_date',$date);
$query=$this->db->select('sum(dr) tdr');
$query=$this->db->group_by('dr_date');
$query = $this->db->get('tbl_debit');
        return $query->result();	
	
}
public function DrRecd3(){
$ledger=$this->session->userdata('ledger');
if($ledger=='All'){
$query=$this->db->select('sum(dr) tdr2');
$query=$this->db->where('drfrom2',$ledger);
$query = $this->db->get('tbl_debit2');
 return $query->result();		
}
$query=$this->db->select('sum(dr) tdr2');
$query=$this->db->where('drfrom',$ledger);
$query = $this->db->get('tbl_debit2');
 return $query->result();
}
public function DrRecd20(){
$trdate=$this->session->userdata('trdate');
$trdate2=$this->session->userdata('trdate2');
$ledger=$this->session->userdata('ledger');
if($ledger=='All'){
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('drfrom2',$ledger);
$query=$this->db->select('sum(dr) tdr2');
$query = $this->db->get('tbl_debit2');
return $query->result();   
}
$query=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($trdate)). '" and "'. date('m/d/Y', strtotime($trdate2)).'"');
$query=$this->db->where('drfrom',$ledger);
$query=$this->db->select('sum(dr) tdr2');
$query = $this->db->get('tbl_debit2');
return $query->result();  
}
public function createHeader($data){
	 $result=$this->db->insert('drcr_header',$data);
    return $result; 
}
public function OpeningBal(){ 
 $start_date=$this->session->userdata('trdate');
 $ledger=$this->session->userdata('ledger');
$dt=$this->session->userdata('trdate2');
$date1 = str_replace('-', '/', $dt);
$yesterday = date('m/d/Y',strtotime($date1 . "-1 days"));
  $result=$this->db->select('sum(cr) obcr');
  $result=$this->db->where('crto',$ledger);
   $result=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($start_date)). '" and "'. date('m/d/Y', strtotime($yesterday)).'"');
  $result=$this->db->get('tbl_credit2')->result();
return $result; 
}

public function OpeningBal2(){ 
 $start_date=$this->session->userdata('trdate');
 $ledger=$this->session->userdata('ledger');
$dt=$this->session->userdata('trdate2');
$date1 = str_replace('-', '/', $dt);
$yesterday = date('m/d/Y',strtotime($date1 . "-1 days"));
 $result=$this->db->where('drfrom',$ledger);
  $result=$this->db->select('sum(dr) obdr');
   $result=$this->db->where('trdate BETWEEN "'. date('m/d/Y', strtotime($start_date)). '" and "'. date('m/d/Y', strtotime($yesterday)).'"');
  $result=$this->db->get('tbl_debit2')->result();
return $result; 
}



public function onedayagocr(){	
 $start_date='2000-01-01';
$dt=date('Y-m-d');
$date1 = str_replace('-', '/', $dt);
$yesterday = date('Y-m-d',strtotime($date1 . "-1 days"));
  $result=$this->db->select('sum(cr) cashcro');
  $result=$this->db->where('crto','Cash');
   $result=$this->db->where('trdate BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($yesterday)).'"');
  $result=$this->db->get('drcrrecord')->result();
return $result; 
}
public function onedayagodr(){	
 $start_date='2000-01-01';
$dt=date('Y-m-d');
$date1 = str_replace('-', '/', $dt);
$yesterday = date('Y-m-d',strtotime($date1 . "-1 days"));
  $result=$this->db->select('sum(dr) cashdro');
  $result=$this->db->where('drfrom','Cash');
   $result=$this->db->where('trdate BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($yesterday)).'"');
  $result=$this->db->get('drcrrecord')->result();
return $result; 
}
public function salary(){
	$query=$this->db->select('sum(cr) salcr');
	 $query=$this->db->where('cat','Salary');
$query = $this->db->get('drcrrecord');
 return $query->result();		
}

public function InvoiceByCode($invoice){
   $query=$this->db->where('invoice',$invoice);
   $query = $this->db->get('paymentrecord');
 return $query->result(); 
}
public function get_by_invoice($invoice){
   $query=$this->db->where('invoice',$invoice);
   $query = $this->db->get('paymentrecord');
 return $query->row(); 
}

public function orderUpdate($data,$invoice){
   $result=$this->db->where('invoice',$invoice);
   $result=$this->db->update('paymentrecord',$data);
 return $result;
}
}
