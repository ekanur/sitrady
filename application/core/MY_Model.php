<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
// require APPPATH."third_party/MX/Model.php";

class MY_Model extends CI_Model {
	public $nama_tabel;
	public $query;
	public $ordered_by;
	public $field;
	public $fields;//array
	public $where_condition;//array
	public $values; //array

function setNama_tabel($nama_tabel){
	$this->nama_tabel=$nama_tabel;
}
function setQuery($query){
	$this->query=$query;
}
function setOrdered_by($ordered_by){
	$this->ordered_by=$ordered_by;
}
function setFields($fields){
	$this->fields=$fields;
}
function setValues($values){
	$this->values=$values;
}
function setField($field){
	$this->field=$field;
}

function setWhere_condition($where_condition){
	$this->where_condition=$where_condition;
}

function getQuery(){
	return $this->query;
}
function getOdered_by(){
	return $this->ordered_by;
}
function getFields(){
	return $this->fields;
}
function getValues(){
	return $this->values;
}
function getNama_tabel(){
	return $this->nama_tabel;
}
function getField(){
	return $this->field;
}
function getWhere_condition(){
	return $this->where_condition;
}

function select($nama_tabel, $fields='*', $where_condition=null, $order_field=null, $ordered_by=null)
{
	
	$this->setNama_tabel($nama_tabel);
	
	if(is_array($fields))
		{$fields=implode(",", $fields);}
	
	$this->setFields($fields);

	$this->setWhere_condition($where_condition);
	$this->setField($order_field);
	$this->setOrdered_by($ordered_by);

	$this->db->select($this->getFields());
	$this->db->from($this->getNama_tabel());
	$this->db->where($this->getWhere_condition());
	if($this->getField()!=null && isset($order_field))
	{
		$this->db->order_by($this->getField(),$this->getOdered_by());
	}
	// 
	return $this->db->get()->result();

	// $data=array(
	// 	"where"=>$this->getWhere_condition(),
	// 	'fields'=>$this->getFields()
	// 	);

	// return $data;

}

function Simpan($nama_tabel, $data){
	// $data array
$this->setNama_tabel($nama_tabel);
$this->setFields($data);

// var_dump($this->getFields());
$this->db->insert($this->getNama_tabel(), $this->getFields());
}

function Update($nama_tabel, $where_condition, $data)
{
	$this->setNama_tabel($nama_tabel);
	$this->setWhere_condition($where_condition);
	$this->setFields($data);

	$this->db->where($this->getWhere_condition());
	$this->db->update($this->getNama_tabel(), $this->getFields());
}

function Delete($nama_tabel, $where_condition)
{
	$this->setNama_tabel($nama_tabel);
	$this->setWhere_condition($where_condition);
	$this->db->where($this->getWhere_condition());
	$this->db->delete($this->getNama_tabel());
}

function Query($query){
	$this->setQuery($query);
	$result=$this->db->query($this->getQuery())->result();
	return $result;
}

}