
<?php 
if(!defined('BASEPATH'))
	exit('Error');
class Login extends MX_Controller{
	

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('login');
	}
}
 ?>}
