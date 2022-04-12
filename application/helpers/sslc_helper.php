<?php
	/**
	* SSLCOMMERZ PAYMENT GATEWAY FOR CodeIgniter
	*
	* Module: Pay Via API (CodeIgniter 3.1.6)
	* Developed By: Prabal Mallick
	* Email: prabal.mallick@sslwireless.com
	* Author: Software Shop Limited (SSLWireless)
	*
	**/

	defined('BASEPATH') OR exit('No direct script access allowed');

// 	define("SSLCZ_STORE_ID", "iwfm5fd2be46ad70d");
// 	define("SSLCZ_STORE_PASSWD", "iwfm5fd2be46ad70d@ssl");
	define("SSLCZ_STORE_ID", "icwfmconferencelive");
	define("SSLCZ_STORE_PASSWD", "5FCC80191432065433");

	# SESSION & VALIDATION API
	define("SSLCZ_SESSION_API", ".sslcommerz.com/gwprocess/v4/api.php");
	define("SSLCZ_VALIDATION_API", ".sslcommerz.com/validator/api/validationserverAPI.php");

	# IF SANDBOX TRUE, THEN IT WILL CONNECT WITH SSLCOMMERZ SANDBOX (TEST) SYSTEM
	define("SSLCZ_IS_SANDBOX", false);
