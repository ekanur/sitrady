
<?php 
if(!defined('BASEPATH'))
	exit('Error');
class Alumni extends MX_Controller{
	

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('alumni');
	}
}
 ?>
