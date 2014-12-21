<?php

class Jurusan extends MX_Controller{

	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->model("jurusan_model", "jurusan_model");
		$where=array(
			"idjurusan"=>9
			);
		$fields=array(
			"1"=>"idjurusan",
			"2"=>"kode_huruf"
			);
		$order_field="kode_huruf";
		$order_by="asc";
		$insert=array(
			"idjurusan"=>"",
			"nama"=>"Otomotif",
			"kode_huruf"=>"OTO",
			"kode_angka"=>"445",
			"timestamp"=>date("Y-m-d")
			);
		$data=array(
			"nama"=>"Otomotif",
			"kode_huruf"=>"OTOM",
			"kode_angka"=>"069"
			);
		// // var_dump($data);
		// $this->Simpan("jurusan", $insert);
		// $this->Update("jurusan",$where, $data);
		$this->Delete("jurusan", $where);
		// $this->display("jurusan", $this->getData("jurusan", $fields, $where, $order_field, $order_by));

		
	}

	function display($page, $data=null){

		$this->load->view("jurusan", $data);
		// var_dump($data);
	}

	function getData($nama_tabel , $fields=null, $where=null, $order_field=null, $order_by=null){
		// $result array;

		$result['data']=$this->jurusan_model->select($nama_tabel, $fields, $where, $order_field, $order_by);

		return $result;
	}

	function Simpan($nama_tabel, $data)
	{
		// var_dump($nama_tabel);
		// echo "<br/>";
		// var_dump($data);
		$this->jurusan_model->Simpan($nama_tabel, $data);
	}

	function Update($nama_tabel,$where_condition, $data){
		$this->jurusan_model->Update($nama_tabel, $where_condition, $data);
	}

	function Delete($nama_tabel, $where_condition)
	{
		$this->jurusan_model->Delete($nama_tabel, $where_condition);
	}
}