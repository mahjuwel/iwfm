<?php 
class MailModel extends CI_Model {
	
	var $uid = '';
	var $from = 'ICWFM 2021<info@icwfmconference.live>';	
	var $replyTo = 'ICWFM 2021<icwfm2021@gmail.com>';
	
	
	function __construct(){
		$this->load->database();
		$this->uid = md5(uniqid(time()));
	}
	
	function mail_send($email,$subject,$message){   
	   	
		$headers = "From: $this->from\r\n";  
		$headers .= "Reply-To: $this->replyTo \r\n"; 
    	$headers .= "Cc: icwfm2021@gmail.com \r\n";  
		$headers .= "Content-type:text/html; multipart/mixed; boundary=\"$this->uid\"; charset=UTF-8" . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";	
		$result=mail($email,$subject,$message,$headers);
		return $result;	  
	
	}
	function mail_send2($email,$subject,$message){   
	   	
		$headers = "From: $this->from\r\n";  
		//$headers .= "Reply-To: $this->replyTo \r\n"; 
    	//$headers .= "Cc: icwfm2021@gmail.com \r\n";  
		$headers .= "Content-type:text/html; multipart/mixed; boundary=\"$this->uid\"; charset=UTF-8" . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";	
		$result=mail($email,$subject,$message,$headers);
		return $result;	  
	
   }
    function mail_send3($email,$subject,$message){   
	   	
		$headers = "From: $this->from\r\n";  
		$headers .= "Reply-To: $this->replyTo \r\n"; 
    	$headers .= "Cc: icwfm2021@gmail.com \r\n";  
		$headers .= "Content-type:text/html; multipart/mixed; boundary=\"$this->uid\"; charset=UTF-8" . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";	
		$result=mail($email,$subject,$message,$headers);
		return $result;	  
	
   }
     function mail_send4($email,$subject,$message){   
	   	
		$headers = "From: $this->from\r\n";  
		$headers .= "Reply-To: $this->replyTo \r\n"; 
    	$headers .= "Cc: icwfm2021@gmail.com \r\n";  
		$headers .= "Content-type:text/html; multipart/mixed; boundary=\"$this->uid\"; charset=UTF-8" . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";	
		$result=mail($email,$subject,$message,$headers);
		return $result;	  
	
   }
}
?>