<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct(){
        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('UserModel');
  	   $this->load->library('session');
       $this->load->model('MailModel');
}
    

	public function index()
	{
		$this->load->view('home');
	}

	public function hosted_view()
	{
		$this->load->view('hostedcheckout');
	}
	public function easycheckout_view()
	{
		$this->load->view('easycheckout');
	}

	public function request_api_hosted()
	{
		if($this->input->get_post('placeorder'))
		{
		      $this->session->set_userdata(array(       
             'email' => trim($_POST['cus_email'])
                  
           ));   

			$post_data = array();
			$post_data['total_amount'] = $this->input->post('amount');
			$post_data['currency'] = $this->input->post('currency');
			$post_data['tran_id'] = "SSLC".uniqid();
			$post_data['success_url'] = base_url()."success";
			$post_data['fail_url'] = base_url()."fail";
			$post_data['cancel_url'] = base_url()."cancel";
			$post_data['ipn_url'] = base_url()."ipn";
			# $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

			# EMI INFO
			// $post_data['emi_option'] = "1";
			// $post_data['emi_max_inst_option'] = "9";
			// $post_data['emi_selected_inst'] = "9";

			# CUSTOMER INFORMATION
			$post_data['cus_name'] =$this->input->post('cus_name');
			$post_data['cus_email'] = $this->input->post('cus_email');
			$post_data['cus_add1'] = $this->input->post('cus_add1');
			$post_data['cus_city'] = $this->input->post('state');
			$post_data['cus_state'] = $this->input->post('state');
			$post_data['cus_postcode'] = $this->input->post('cus_postcode');
			$post_data['cus_country'] = $this->input->post('cus_country');
			$post_data['cus_phone'] = $this->input->post('cus_phone');

			# SHIPMENT INFORMATION
			$post_data['ship_name'] =$this->input->post('cus_name');
			$post_data['ship_add1'] = $this->input->post('cus_add1');
			$post_data['ship_city'] = $this->input->post('state');
			$post_data['ship_state'] = $this->input->post('state');
			$post_data['ship_postcode'] = $this->input->post('cus_postcode');
			$post_data['ship_country'] = $this->input->post('cus_country');

			$post_data['product_profile'] = "non-physical-goods";
			$post_data['shipping_method'] = "NO";
			$post_data['num_of_item'] = "1";
			$post_data['product_name'] = "Registration";
			$post_data['product_category'] = "Icwfm Conference 2021";
            $this->load->library('session');
		
			$session = array(
				'tran_id' => $post_data['tran_id'],
				'amount' => $post_data['total_amount'],
				'currency' => $post_data['currency']
			);
			$this->session->set_userdata('tarndata', $session);
               
             $this->UserModel->cusInfoforPayment($post_data);
// 			echo "<pre>";
// 			print_r($post_data);
// 			exit();
			if($this->sslcommerz->RequestToSSLC($post_data, SSLCZ_STORE_ID, SSLCZ_STORE_PASSWD))
			{
				echo "Pending";
				/***************************************
				# Change your database status to Pending.
				****************************************/
			}
		}
	}



     public function PaymentSuccess(){
     	print_r($_POST);
     	echo "Payment Success";
     }
	public function success_payment()
	{
		$database_order_status = 'Pending'; // Check this from your database here Pending is dummy data,
		$sesdata = $this->session->userdata('tarndata');

// 		if(($sesdata['tran_id'] == $_POST['tran_id']) && ($sesdata['amount'] == $_POST['currency_amount']))
//  		{
// 			if($this->sslcommerz->ValidateResponse($_POST['currency_amount'], $sesdata['currency'], $_POST))
// 			{
			   $data=$_POST;
			   
					/*****************************************************************************
					# Change your database status to Processing & You can redirect to success page from here
					******************************************************************************/
				//  print_r($data);
				//  exit();
					  $this->UserModel->cusTransaction($data);
				      $data2=$this->UserModel->UserTranInfo();
        $data3=array();
        $data3['tran_id']=$data2->tran_id;
        $data3['total_amount']=$data2->total_amount;
        $data3['currency']=$data2->currency;
        $this->UserModel->memberTranDataupdated($data3);
       $subject='Icwfm 2021 payment confirmation message';
    $message="<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 style='color: green; font-weight: bolder; text-align: center;'>Congratulations!</h2>
<p>You have successfully done $data2->currency $data2->total_amount payment for registration in icwfm conference 2021. Your transaction id: $data2->tran_id</p><br>
 <p>You will be notified later..<br><br>

</body>
</html>";     
  $email=$this->session->userdata('email');
  $result=$this->MailModel->mail_send4($email,$subject,$message);
  if($result){
       $this->session->set_flashdata('success_msg7', 'Payment successful !');
     redirect('User/profile3');
}else{
 $this->session->set_flashdata('error_msg7', 'Goes something wrong !');
  redirect('User/profile3'); 
}
	}
	public function fail_payment()
	{
		$database_order_status = 'Pending'; // Check this from your database here Pending is dummy data,
		if($database_order_status == 'Pending')
		{
			/*****************************************************************************
			# Change your database status to FAILED & You can redirect to failed page from here
			******************************************************************************/
		
			$this->UserModel->DelcusInfo();
			echo "Transaction Faild;<a href='<?php echo base_url();?>index.php/User/Profile'>Back</a>";
		}
		else
		{
			/******************************************************************
			# Just redirect to your success page status already changed by IPN.
			******************************************************************/
			echo "Just redirect to your failed page";
		}	
	}
	public function cancel_payment()
	{
		$database_order_status = 'Pending'; // Check this from your database here Pending is dummy data,
		if($database_order_status == 'Pending')
		{
			/*****************************************************************************
			# Change your database status to CANCELLED & You can redirect to cancelled page from here
			******************************************************************************/
			echo "<pre>";
			print_r($_POST);
			echo "Transaction Canceled";
		}
		else
		{
			/******************************************************************
			# Just redirect to your cancelled page status already changed by IPN.
			******************************************************************/
			echo "Just redirect to your failed page";
		}
	}
	public function ipn_listener()
	{
		$database_order_status = 'Pending'; // Check this from your database here Pending is dummy data,
		$store_passwd = SSLCZ_STORE_PASSWD;
		if($ipn = $this->sslcommerz->ipn_request($store_passwd, $_POST))
		{
			if(($ipn['gateway_return']['status'] == 'VALIDATED' || $ipn['gateway_return']['status'] == 'VALID') && $ipn['ipn_result']['hash_validation_status'] == 'SUCCESS')
			{
				if($database_order_status == 'Pending')
				{
					echo $ipn['gateway_return']['status']."<br>";
					echo $ipn['ipn_result']['hash_validation_status']."<br>";
					/*****************************************************************************
					# Check your database order status, if status = 'Pending' then chang status to 'Processing'.
					******************************************************************************/
				}
			}
			elseif($ipn['gateway_return']['status'] == 'FAILED' && $ipn['ipn_result']['hash_validation_status'] == 'SUCCESS')
			{
				if($database_order_status == 'Pending')
				{
					echo $ipn['gateway_return']['status']."<br>";
					echo $ipn['ipn_result']['hash_validation_status']."<br>";
					/*****************************************************************************
					# Check your database order status, if status = 'Pending' then chang status to 'FAILED'.
					******************************************************************************/
				}
			}
			elseif ($ipn['gateway_return']['status'] == 'CANCELLED' && $ipn['ipn_result']['hash_validation_status'] == 'SUCCESS') 
			{
				if($database_order_status == 'Pending')
				{
					echo $ipn['gateway_return']['status']."<br>";
					echo $ipn['ipn_result']['hash_validation_status']."<br>";
					/*****************************************************************************
					# Check your database order status, if status = 'Pending' then chang status to 'CANCELLED'.
					******************************************************************************/
				}
			}
			else
			{
				if($database_order_status == 'Pending')
				{
					echo "Order status not ".$ipn['gateway_return']['status'];
					/*****************************************************************************
					# Check your database order status, if status = 'Pending' then chang status to 'FAILED'.
					******************************************************************************/
				}
			}
			echo "<pre>";
			print_r($ipn);
		}
	}
}
	