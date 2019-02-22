<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inven_model extends CI_Model {

//-------------------------------------------------------------------------------------------

public function GetAutoNumberTK(){
	$data = $this->db->query('SELECT MAX(RIGHT(kodekeluar, 4)) as max_id FROM barangkeluar ORDER BY kodekeluar');
    return $data->result_array();

}

public function GetAutoNumberTM(){
	$data = $this->db->query('SELECT MAX(RIGHT(kodemasuk, 4)) as max_id FROM barangmasuk ORDER BY kodemasuk');
    return $data->result_array();

}

public function GetAutoNumberBK(){
	$data = $this->db->query('SELECT MAX(RIGHT(kodebk, 4)) as max_id FROM detbarangkeluar ORDER BY kodebk');
    return $data->result_array();

}

public function GetAutoNumberBM(){
	$data = $this->db->query('SELECT MAX(RIGHT(kodebm, 4)) as max_id FROM detbarangmasuk ORDER BY kodebm');
    return $data->result_array();

}

public function GetAutoNumberBarang(){
	$data = $this->db->query('SELECT MAX(RIGHT(kode, 4)) as max_id FROM barang ORDER BY kode');
    return $data->row_array();

}

public function GetAutoNumberCat(){
	$data = $this->db->query('SELECT MAX(RIGHT(category_id, 3)) as max_id FROM categories ORDER BY category_id');
    return $data->row_array();

}

public function GetAutoNumberSup(){
	$data = $this->db->query('SELECT MAX(RIGHT(idsup, 4)) as max_id FROM supplier ORDER BY idsup');
    return $data->row_array();

}
public function GetAutoNumberUser(){
	$data = $this->db->query('SELECT MAX(RIGHT(nik, 4)) as max_id FROM user ORDER BY nik');
    return $data->row_array();

}


//---------------------------------------------------------------------------------------

public function GetCat($where=""){
		$data = $this->db->query('select * from categories '.$where);
		return $data->result_array();
	}


//---------------------------------------------------------------------------------------


	public function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}

	public function DeleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}


	public function InsertDataManual($sql)
	{

			



		$data = $this->db->query($sql);

		return $data;
	}




function select_by($username, $password){
    $this->db->where("username", $username);
    $this->db->where("password", $password);
    $query = $this->db->get('user');
    return $query->num_rows();
  }






}





?>