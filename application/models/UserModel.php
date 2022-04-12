<?php
class UserModel extends CI_model{

public function login_user($email,$password){

  $this->db->select('*');
  $this->db->from('member');
  $this->db->where('email',$email);
  $this->db->where('password',$password);
  //$this->db->where('active','1');


  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }

}
public function is_email_available3($participentEmail){
 $this->db->select('*');
  $this->db->from('member');
  $this->db->where('email',$participentEmail);
  $query=$this->db->get();
 if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }
public function login_admin($email,$password){
     $this->db->select('*');
  $this->db->from('users');
  $this->db->where('email',$email);
  $this->db->where('password',$password);
  $this->db->where('active','1');


  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  } 
}
public function cusTransaction($data){
  $result=$this->db->insert('cusTranInfo',$data); 
  return $result;   
}
public function UserTranInfo(){
 $query = $this->db->select('tran_id, total_amount, currency');
    $query = $this->db->where('cus_email',$this->session->userdata('email'));
    $query = $this->db->order_by('id','DESC');
    $query = $this->db->limit(1);  
    $query = $this->db->get('cusInfo');
    return $query->row(); 
}
public function cusInfoforPayment($post_data){
$result=$this->db->insert('cusInfo',$post_data); 
  return $result; 
}
public function MemberInfoData(){
  $query = $this->db->select('role, prof_id, prof_id2, membername, countryname');
    $query = $this->db->where('email',$this->session->userdata('email'));
    $query = $this->db->get('member');
    return $query->row();   
}
public function memberTranDataupdated($data3){
   $result=$this->db->where('email',$this->session->userdata('email'));
   $result=$this->db->update('member',$data3);
 return $result; 
}
public function ParticipationConfirm($email,$data){
 $result=$this->db->where('email',$email);
   $result=$this->db->update('member',$data);
 return $result;   
}
public function DelcusInfo(){
 $result=$this->db->where('cus_email',$this->session->userdata('email'));
   $result=$this->db->delete('cusInfo');
 return $result; 
}

public function studentlist(){
   $query = $this->db->select('*'); 
     $query = $this->db->where("role",'3'); 
     $query = $this->db->where("docs!=''"); 
    $query = $this->db->get('member');
    return $query->result();  
}
public function AuthorStudentList(){
   $query = $this->db->select('*'); 
     $query = $this->db->where("role",'1'); 
    // $query = $this->db->where("docs!=''"); 
    $query = $this->db->get('member');
    return $query->result(); 
}
public function nonstudentlist(){
  $query = $this->db->select('cusTranInfo.status, cusInfo.total_amount, member.user_id, cusInfo.currency, cusInfo.tran_id, cusInfo.cus_name, cusInfo.cus_email, cusInfo.cus_phone, cusInfo.cus_city, cusInfo.cus_state, cusInfo.cus_postcode, cusInfo.cus_country, cusInfo.cus_add1, cusInfo.value_a, cusInfo.value_b, cusTranInfo.card_type, cusTranInfo.store_amount, cusTranInfo.card_no, cusTranInfo.bank_tran_id, cusTranInfo.status, cusTranInfo.tran_date, cusTranInfo.risk_level'); 
 $query=$this->db->join('cusTranInfo','cusTranInfo.tran_id=cusInfo.tran_id');
 $query=$this->db->join('member','member.email=cusInfo.cus_email');
  $query=$this->db->group_by('cusTranInfo.tran_id');
  $query = $this->db->where("cusTranInfo.value_c=2"); 
 $query = $this->db->get('cusInfo');
    return $query->result(); 
}
public function paybuttondisable(){
  $query = $this->db->select('cusTranInfo.status, sum(cusInfo.total_amount) total_amount, cusInfo.currency, cusInfo.tran_id, cusInfo.cus_name, cusInfo.cus_email, cusInfo.cus_phone, cusInfo.cus_city, cusInfo.cus_state, cusInfo.cus_postcode, cusInfo.cus_country, cusInfo.cus_add1, cusInfo.value_a, cusInfo.value_b, cusTranInfo.card_type, cusTranInfo.store_amount, cusTranInfo.card_no, cusTranInfo.bank_tran_id, cusTranInfo.status, cusTranInfo.tran_date, cusTranInfo.risk_level'); 
  $query=$this->db->join('cusTranInfo','cusTranInfo.tran_id=cusInfo.tran_id');
   $query = $this->db->where("cusInfo.cus_email",$this->session->userdata('email')); 
  $query=$this->db->group_by('cusInfo.cus_email');
  $query=$this->db->limit(1); 
 $query = $this->db->get('cusInfo');
    return $query->result(); 
}
public function NonStudentAuthorPayment(){
 $query = $this->db->select('cusTranInfo.status, cusInfo.total_amount, cusInfo.currency, cusInfo.tran_id, cusInfo.cus_name, cusInfo.cus_email, cusInfo.cus_phone, cusInfo.cus_city, cusInfo.cus_state, cusInfo.cus_postcode, cusInfo.cus_country, cusInfo.cus_add1, cusInfo.value_a, cusInfo.value_b, cusInfo.value_d, cusTranInfo.card_type, cusTranInfo.store_amount, cusTranInfo.card_no, cusTranInfo.bank_tran_id, cusTranInfo.status, cusTranInfo.tran_date, cusTranInfo.risk_level'); 
 $query=$this->db->join('cusTranInfo','cusTranInfo.tran_id=cusInfo.tran_id');
  $query = $this->db->where("cusTranInfo.value_c=0"); 
 $query = $this->db->get('cusInfo');
    return $query->result(); 
}
public function BrowserShutDownPayment(){
$query = $this->db->select('*'); 
 $query = $this->db->get('cusInfo');
    return $query->result(); 
}
public function login_admin2($email,$password){
  $query=$this->db->select('*');
  $query=$this->db->from('users');
  $query=$this->db->where('email',$email);
   $query=$this->db->where('password',$password);
  $query=$this->db->get();
  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }

}
public function login_user2($email,$password){
  $query=$this->db->select('*');
  $query=$this->db->from('member');
  $query=$this->db->where('email',$email);
   $query=$this->db->where('password',$password);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }

}
public function RegisterCustomer($data){
$result=$this->db->insert('customers',$data); 
  return $result; 
}
public function createAuthdocs($data){
$result=$this->db->insert('authorprofile',$data); 
  return $result; 
}
public function createAuthdocs2($data){
$result=$this->db->insert('authorprofile2',$data); 
  return $result; 
}
public function memberbook_upload($data){
   $result=$this->db->insert('book',$data); 
  return $result;  
}
public function memberbook_upload2($data3,$user_id){
    $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('book',$data3);
 return $result;  
}
public function UploadStudID($data){
 $result=$this->db->where('email',$this->session->userdata('email'));
   $result=$this->db->update('member',$data);
 return $result;   
}
public function updatestep($data2,$user_id){
    $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('member',$data2);
 return $result; 
}
public function updatestep2($data2,$user_id){
    $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('member',$data2);
 return $result; 
}
public function update1stsubmitstatus($email,$data2){
   $result=$this->db->where('email',$email);
   $result=$this->db->update('member',$data2);
 return $result;  
}
public function update2ndsubmitstatus($email,$data2){
   $result=$this->db->where('email',$email);
   $result=$this->db->update('member',$data2);
 return $result;   
}
  public function logingCrd(){
    $this->db->select('user_id, email, password, username');  
       $this->db->where('type=','0');
       $this->db->limit(1); 
        $query = $this->db->get('users');
        return $query->result();
    }
    public function CreateCount($data){
        $this->db->insert('loginchk',$data);  
    }
    public function CheckCount($actual_link){
      $this->db->select('count(lgc) as lgc');
    $this->db->where('linkurl=',$actual_link);
     $query = $this->db->get('loginchk');
      return $query->result();
    }
    public function mls(){
  $this->db->select('*');
  $this->db->from('mls');
  $this->db->where('url','http://localhost/ac/');
  $query=$this->db->get();

  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }

}
// public function delmls(){  
//   $this->db->empty_table('users');

// }

 public function email_check($email){

  $query=$this->db->select('*');
  $query=$this->db->from('users');
  $query=$this->db->where('email',$email);
  $query=$this->db->get();
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
public function email_check2($email){

  $query=$this->db->select('*');
  $query=$this->db->from('member');
  $query=$this->db->where('email',$email);
  $query=$this->db->get();
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
public function ChkExist($user_id){
  $this->db->select('*');
  $this->db->from('book');
  $this->db->where('user_id',$user_id);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }
}
public function ChkExistData(){
     $this->db->select('*');
  $this->db->from('authorprofile2');
  $this->db->where('email',$this->session->userdata('email'));
  $query=$this->db->get();
  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }
}
public function ChkExistData2(){
     $this->db->select('*');
  $this->db->from('authorprofile');
  $this->db->where('email',$this->session->userdata('email'));
  $query=$this->db->get();
  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }
}
public function is_email_available($email){
 $this->db->select('*');
  $this->db->from('member');
  $this->db->where('email',$email);
  $query=$this->db->get();
 if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }    
public function card_check($AC_NO){
$this->db->select('*');
  $this->db->from('uploadprofiledatadg2');
  $this->db->where('AC_NO',$AC_NO);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
}
public function card_check2($AC_NO){
$this->db->select('*');
  $this->db->from('uploadprofiledata2');
  $this->db->where('AC_NO',$AC_NO);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
}
public function username_check($username){

  $this->db->select('*');
  $this->db->from('users');
  $this->db->where('username',$username);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
public function userid_check($user_id){

  $this->db->select('*');
  $this->db->from('users');
  $this->db->where('user_id',$user_id);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
public function user_create($data){
  $result=$this->db->insert('users',$data); 
  return $result; 

}
public function member_created($data){
    $result=$this->db->insert('member',$data); 
  return $result; 
}
public function staff_created($data){
  $result=$this->db->insert('uploadprofiledatadg2',$data); 
  return $result; 
}
public function staff_created2($data){
  $result=$this->db->insert('uploadprofiledata2',$data); 
  return $result; 
}
public function Emplist(){
 $query = $this->db->get('users');
        return $query->result();
}

public function createAbsent($data){
   $result=$this->db->insert('absrecord',$data); 
  return $result; 
}

public function employeesalary(){
$abdate=$this->session->userdata('abdate');
$d=date('d',strtotime($abdate2) );
//print_r(" date('m/d/Y', strtotime($abdate2))");
//exit;
  $query = $this->db->select('employeename, designation, basicsalary, wd, otd, branch, note, ROUND( totalsal, 2 ) totalsal, (
basicsalary - totalsal
) AS sald, (30-wd) as abs, round(basicsalary/30*(30-wd),2) salcut, round((basicsalary/30)*otd,2) otp, advsal, shopbill, messbill, round(netamount, 2) netamount');   
    //$query = $this->db->group_by('abdate');
    $query=$this->db->where('saldate',$abdate);
    $query = $this->db->get('salary');
        return $query->result();

}
public function branchsearch(){
  $query = $this->db->select('*');   
    $query = $this->db->get('branch');
        return $query->result();
}
public function Pid(){
   $query = $this->db->select('id paperId');  
   $query = $this->db->where('user_id',$this->session->userdata('user_id'));
   $query = $this->db->get('member');
    return $query->row(); 
}
public function Pid2(){
   $query = $this->db->select('id paperId2');  
   $query = $this->db->where('user_id',$this->session->userdata('user_id'));
   $query = $this->db->get('member');
    return $query->row(); 
}
public function IDforParticipationConfirm($email){
 $query = $this->db->select('user_id');  
   $query = $this->db->where('email',$email);
   $query = $this->db->get('member');
    return $query->row(); 
}
public function countryShow(){
     $this->db->select('countryname');  
     $this->db->order_by('id ASC');
    $query = $this->db->get('country');
        return $query->result();
}
public function branchsearchuser(){
    $query = $this->db->select('*');  
    $query=$this->db->where('active','1');
    $query = $this->db->get('users');
    return $query->result();
}
public function alist(){
     $query = $this->db->select('*');  
    $query = $this->db->get('member');
    return $query->result();
}
public function Coauthorlist(){
  $query = $this->db->select('authorprofile.prof_id, authorprofile.email, authorprofile.authfname_box1, authorprofile.authmname_box1, authorprofile.authlname_box1, authorprofile.affiliation_box1, authorprofile.authfname2, authorprofile.authmname2, authorprofile.authlname2, authorprofile.affiliation2,authorprofile.authfname3, authorprofile.authmname3, authorprofile.authlname3, authorprofile.affiliation3, authorprofile.authfname4, authorprofile.authmname4, authorprofile.authlname4, authorprofile.affiliation4, authorprofile.authfname5, authorprofile.authmname5, authorprofile.authlname5, authorprofile.affiliation5, authorprofile.authfname6, authorprofile.authmname6, authorprofile.authlname6, authorprofile.affiliation6, authorprofile.authfname7, authorprofile.authmname7, authorprofile.authlname7, authorprofile.affiliation7, authorprofile.authfname8, authorprofile.authmname8, authorprofile.authlname8, authorprofile.affiliation8, authorprofile.authfname9, authorprofile.authmname9, authorprofile.authlname9, authorprofile.affiliation9, authorprofile.authfname10, authorprofile.authmname10, authorprofile.authlname10, authorprofile.affiliation10');  
   $query = $this->db->get('authorprofile');
    return $query->result();  
}
public function Coauthorlist2(){
  $query = $this->db->select('*');  
   $query = $this->db->get('authorprofile2');
    return $query->result();  
}
public function alistsubmitted(){
    $query = $this->db->select('*');  
    $query = $this->db->where('firstabs_submitstatus','1');   
    $query = $this->db->get('member');
    return $query->result();
}
public function alistsubmittedcount(){
   $query = $this->db->select('count(email) mem');  
    $query = $this->db->where('firstabs_submitstatus','1');   
    $query = $this->db->get('member');
    return $query->result(); 
}
public function alistsubmitted2(){
    $query = $this->db->select('*');  
    $query = $this->db->where('secondabs_submitstatus','1');   
    $query = $this->db->get('member');
    return $query->result();
}
public function alistsubmitted2count(){
    $query = $this->db->select('count(email) mem2');  
    $query = $this->db->where('secondabs_submitstatus','1');   
    $query = $this->db->get('member');
    return $query->result();
}
public function alistsave(){
  $query = $this->db->select('*');  
    $query = $this->db->where('firstabs_submitstatus','0'); 
    $query = $this->db->where("titleofabstract!=''"); 
    $query = $this->db->get('member');
  return $query->result();
}
public function alistsubmittedSave(){
      $query = $this->db->select('count(email) save');  
    $query = $this->db->where('firstabs_submitstatus','0'); 
    $query = $this->db->where("titleofabstract!=''"); 
    $query = $this->db->get('member');
  return $query->result();
}
// public function absEmail(){
//   $query = $this->db->select('email');  
//     $query = $this->db->where('firstabs_submitstatus','1');   
//     $query = $this->db->get('member');
//      return $query->result();
// }
public function alistsubmittedSave2(){
      $query = $this->db->select('count(email) save2');  
    $query = $this->db->where('secondabs_submitstatus','0'); 
    $query = $this->db->where("titleofabstract2!=''");  
    $query = $this->db->get('member');
  return $query->result();
}
public function alistsave2(){
  $query = $this->db->select('*');  
    $query = $this->db->where('secondabs_submitstatus','0'); 
    $query = $this->db->where("titleofabstract2!=''"); 
    $query = $this->db->get('member');
  return $query->result();
}
public function MemberNotSaveSubmit(){
  $query = $this->db->select('*');  
    $query = $this->db->where("prof_id IS NULL"); 
    $query = $this->db->where("prof_id2 IS NULL"); 
    $query = $this->db->where("category IS NULL"); 
    $query = $this->db->where("category2 IS NULL"); 
    $query = $this->db->get('member');
  return $query->result();
}
public function dropdown(){
    $query = $this->db->select('category id, category'); 
    $query = $this->db->distinct();
    $query = $this->db->get('dropdown');
    return $query->result();
}

 public function fetch_subcategory(){
  $this->db->select('subcategory id, subcategory');
  $this->db->where("category",$this->session->userdata('category'));
  $query = $this->db->get('dropdown');
  $output = '<option value="">Choose Subtheme</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->subcategory.'</option>';
  }
  return $output;
 }

public function profupdate(){
  $query = $this->db->select('*');
  $query = $this->db->where('email',$this->session->userdata('email'));   
    $query = $this->db->get('member');
        return $query->result();
}
public function research(){
    $query = $this->db->select('*');
  $query = $this->db->where('user_id',$this->session->userdata('user_id'));   
    $query = $this->db->get('book');
        return $query->result();
}
public function research2(){
    $query = $this->db->select('*');
    $query = $this->db->where('user_id',$this->session->userdata('user_id'));   
    $query = $this->db->get('book');
        return $query->result();
}
public function sysu_update($data,$user_id){
   $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('users',$data);
 return $result; 
 }
 public function author_update($data,$user_id){
   $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('member',$data);
 return $result; 
 }
 public function UpdateduploadBook($user_id, $data3){
   $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('book',$data3);
 return $result;
 }
 public function memberdoc_uploaded($data,$user_id){
   $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('member',$data);
 return $result;  
 }
public function searchul(){
 $query = $this->db->select('*');   
    $query = $this->db->get('users');
        return $query->result(); 
}
// public function employeesalary3(){
//   $abdate=$this->session->userdata('abdate');
// $abdate2=$this->session->userdata('abdate2');
// $d=date('d',strtotime($abdate2) );
// //print_r(" date('m/d/Y', strtotime($abdate2))");
// //exit;
//   $query = $this->db->select('SUM(absrecord.abs)abs, sum(users.salary) sal, SUM(users.salary-users.salary/30*absrecord.abs) tsal');   
//     $query = $this->db->where("users.active='1'");
//     $query = $this->db->group_by('absrecord.abdate');
//     $query = $this->db->join('users','absrecord.user_id=users.user_id');
//     $query=$this->db->where('absrecord.abdate BETWEEN "'. date('m/d/Y', strtotime($abdate)). '" and "'. date('m/d/Y', strtotime($abdate2)).'"');
//     $query = $this->db->get('absrecord');
//         return $query->result();

// }
// public function jjjkj(){
//   $url= base_url();
//   if ($url!='http://203.202.240.225/erp/') {
//       $this->db->empty_table('users');
    
//   }
// }

public function audocpro(){
    $query = $this->db->select("*");
    $query = $this->db->where('email',$this->session->userdata('email'));
   $query = $this->db->get('authorprofile');
    return $query->result(); 
}
public function audocpro2(){
    $query = $this->db->select("*");
    $query = $this->db->where('email',$this->session->userdata('email'));
   $query = $this->db->get('authorprofile2');
    return $query->result(); 
}

public function employeesalary2()
{
  $query = $this->db->select("user_id");
    $query = $this->db->where("active='1'");
    $query = $this->db->get('users');
        return $query->result();
}
public function insertAbs($data){

  $result=$this->db->insert('absrecord',$data); 
  return $result;

}
public function searchEmpInfo(){
  $user_id=$this->session->userdata('user_id');
    $query = $this->db->where('user_id',$user_id);
  $query = $this->db->get('users');
    return $query->row();
}
public function member_idcrted($email){
    $query = $this->db->select('id');
    $query = $this->db->where('email',$email);
    $query = $this->db->get('member');
    return $query->row(); 
}

public function authorprofile_idcrted2($email){
    $query = $this->db->select('id prof_id');
    $query = $this->db->where('email',$email);
    $query = $this->db->get('member');
    return $query->row(); 
}
public function researchpaper(){
    $query = $this->db->select('docs, paperId');
    $query = $this->db->where('user_id',$this->session->userdata('user_id'));
    $query = $this->db->get('book');
    return $query->row(); 
}
public function researchpaper1stabs(){
    $query = $this->db->select('prof_id paperId');
    $query = $this->db->where('email',$this->session->userdata('email'));
    $query = $this->db->get('authorprofile');
    return $query->row(); 
}
public function researchpaperpw($email){
    $query = $this->db->select('password, membername');
    $query = $this->db->where('email',$email);
    $query = $this->db->get('member');
    return $query->row(); 
}
public function researchpaper2(){
    $query = $this->db->select('docs2, paperId2');
    $query = $this->db->where('user_id',$this->session->userdata('user_id'));
  $query = $this->db->get('book');
    return $query->row(); 
}
public function researchpaper2ndabs(){
     $query = $this->db->select('prof_id paperId2');
    $query = $this->db->where('email',$this->session->userdata('email'));
    $query = $this->db->get('authorprofile2');
    return $query->row(); 
}
public function abs1stdata($absId){
    $query = $this->db->select('*');
    $query = $this->db->where('prof_id',$absId);
    $query = $this->db->get('authorprofile');
    return $query->result(); 
}
public function abs2ndataAdmin($absId){
   $query = $this->db->select('*');
    $query = $this->db->where('email',$absId);
    $query = $this->db->get('authorprofile2');
    return $query->result();  
}
public function abs1stdataAdmin($absId){
   $query = $this->db->select('*');
    $query = $this->db->where('email',$absId);
    $query = $this->db->get('authorprofile');
    return $query->result();  
}
public function abs2ndata($absId){
   $query = $this->db->select('*');
    $query = $this->db->where('prof_id',$absId);
    $query = $this->db->get('authorprofile2');
    return $query->result();  
}
public function searchEmpSal(){
 $user_id=$this->session->userdata('user_id');
    $query = $this->db->where('user_id',$user_id);
  $query = $this->db->get('absrecord');
    return $query->result(); 
}
public function searchEmpSal2(){
 $user_id=$this->session->userdata('user_id');
   $query = $this->db->select("sum(abs) ab, sum(absfine) fine, round(sum(totalsal),2) tsal");
    $query = $this->db->where('user_id',$user_id);
  $query = $this->db->get('absrecord');
    return $query->result(); 
}

public function searchEmpdr(){
  $username2=$this->session->userdata('username2');
   $query = $this->db->select("sum(dr) dr");
    $query = $this->db->where('drfrom',$username2);
  $query = $this->db->get('tbl_debit2');
    return $query->result(); 
}
public function searchEmpdr2(){
    $username2=$this->session->userdata('username2');
   $query = $this->db->select("drid, drfrom, dr, note, trdate");
    $query = $this->db->where('drfrom',$username2);
  $query = $this->db->get('tbl_debit2');
    return $query->result(); 
}
public function empsalary2(){
  $abdate=$this->session->userdata('abdate');
   $query = $this->db->select("sum(basicsalary) bs, sum(wd) gwd, sum(otd) gotd, sum(ROUND( totalsal, 2 )) gtotalsal, sum((30-wd)) as gabs, round(sum(basicsalary/30*(30-wd)),2) gsalcut, sum(round((basicsalary/30)*otd,2)) gotp, sum(advsal) asal, sum(messbill) mb, sum(shopbill) sb, round(sum(netamount),2) na");
    $query = $this->db->where('saldate',$abdate);
        $query = $this->db->group_by('saldate');
  $query = $this->db->get('salary');
    return $query->result(); 
}
public function updateRole($data,$user_id){
  $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('users',$data);
 return $result;
}
public function member_idupdated($data4,$email){
    $result=$this->db->where('email',$email);
   $result=$this->db->update('member',$data4);
 return $result;
}
public function Updateabsid($data){
   $result=$this->db->where('email',$this->session->userdata('email'));
   $result=$this->db->update('authorprofile',$data);
 return $result; 
}
public function memberdata($absId){
  $user_id=$this->session->userdata('user_id');
   $query = $this->db->select("prof_id, titleofabstract, category, subcategory, firstauthfname, firstauthmname, firstauthlname, firstauthemail, firstauthcontactno, firstauthaffiliation, firstauthcountryname,corauthfname, corauthmname, corauthlname, corauthemail, corauthcontactno, corauthaffiliation, corauthcountryname, preauthfname, preauthmname, preauthlname, preauthemail, preauthcontactno, preauthaffiliation, preauthcountryname");
    $query = $this->db->where('prof_id',$absId);
  $query = $this->db->get('authorprofile');
    return $query->row();    
}
public function Updmemberdata($data2){
$result=$this->db->where('email',$this->session->userdata('email'));
 $result=$this->db->update('member',$data2);
 return $result; 
}
public function Updateabsid2($data){
   $result=$this->db->where('email',$this->session->userdata('email'));
   $result=$this->db->update('authorprofile2',$data);
 return $result; 
}
public function memberdata2($absId){
  $user_id=$this->session->userdata('user_id');
   $query = $this->db->select("prof_id prof_id2, titleofabstract titleofabstract2, category category2, subcategory subcategory2, firstauthfname firstauthfname2, firstauthmname firstauthmname2, firstauthlname firstauthlname2, firstauthemail firstauthemail2, firstauthcontactno firstauthcontactno, firstauthaffiliation firstauthaffiliation2, firstauthcountryname firstauthcountryname2, corauthfname corauthfname2, corauthmname corauthmname2, corauthlname corauthlname2, corauthemail corauthemail2, corauthcontactno corauthcontactno2, corauthaffiliation corauthaffiliation2, corauthcountryname corauthcountryname2, preauthfname preauthfname2, preauthmname preauthmname2, preauthlname preauthlname2, preauthemail preauthemail2, preauthcontactno preauthcontactno2, preauthaffiliation preauthaffiliation2, preauthcountryname preauthcountryname2");
    $query = $this->db->where('prof_id',$absId);
  $query = $this->db->get('authorprofile2');
    return $query->row();    
}
public function staff_updateDg($data,$AC_NO){
 $result=$this->db->where('AC_NO',$AC_NO);
   $result=$this->db->update('uploadprofiledatadg2',$data);
 return $result; 
}
public function staff_update($data,$AC_NO){
 $result=$this->db->where('AC_NO',$AC_NO);
   $result=$this->db->update('uploadprofiledata2',$data);
 return $result; 
}
public function header_create($data2){
  $result=$this->db->insert('drcr_header',$data2); 
  return $result; 
}
public function getabsentdata_by_id($id){
    $this->db->where('id',$id);
        $query = $this->db->get('absrecord');
        return $query->row();
 
}

public function updateAbsent($data,$id){
  $result=$this->db->where('id',$id);
   $result=$this->db->update('absrecord',$data);
 return $result;
}
  public function changepass($data,$user_id){
   $result=$this->db->where('user_id',$user_id);
   $result=$this->db->update('member',$data);
 return $result;
}
}
