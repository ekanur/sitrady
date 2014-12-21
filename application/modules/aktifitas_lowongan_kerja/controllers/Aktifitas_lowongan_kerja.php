
<?php 
if(!defined('BASEPATH'))
	exit('Error');
class Aktifitas_lowongan_kerja extends MX_Controller{
	

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('masuk_loker');
	}
}
 ?>
