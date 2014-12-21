
<?php 
if(!defined('BASEPATH'))
	exit('Error');
class Aktifitas_pelatihan extends MX_Controller{
	

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('loker_pelatihan');
	}
}
 ?>
