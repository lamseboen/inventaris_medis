<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __counstruct(){
		parent::__construct();
	}

	//barang

	public function vbarang(){
		$data = $this->db->select('*')
						->from('barang')
						->join('categories', 'categories.category_id = barang.category_id')
						->join('supplier', 'supplier.idsup = barang.idsup')
						->get('')->result_array();
		//print_r($data);
		$var = array();
		$var['module'] = 'barang';
		$var['title'] = 'BARANG';
		$var['data'] = $data;
		 $this->load->view('main', $var);
	}

	public function tbarang(){
		if(isset($_POST['submit'])){
            $data['kode']    = $_POST['kode'];
            $data['category_id']    = $_POST['category_id']; 
            $data['idsup']    = $_POST['idsup']; 
            $data['namabarang']    = $_POST['namabarang']; 
            $data['stok']    = $_POST['stok']; 
            $data['hrgbeli']    = $_POST['hrgbeli']; 
            $data['hrgjual']    = $_POST['hrgjual']; 
            $res = $this->db->insert('barang',$data);
            if ($res==1){
                redirect(base_url().'barang/vbarang');
            }else{
                redirect(base_url().'barang/tbarang');
            }
        }else{
            $data = $this->inven_model->GetAutoNumberBarang();
			$datacat = $this->db->get('categories')->result_array();
            $datasup = $this->db->get('supplier')->result_array();
            $id_max = $data['max_id'];
            $sort_num = ((int) substr($id_max, 1, 4)) +1;
            $new_code = sprintf("%04s", $sort_num);
            $result = 'br-'.$new_code;
            $var = array();
            $var['module'] = 'barang_tambah';
            $var['title'] = 'BARANG';
            $var['data'] = $result;
            $var['datacat'] = $datacat;
            $var['datasup'] = $datasup;
            $this->load->view('main', $var);
        }
	}

	public function ebarang($id){
		if(isset($_POST['submit'])){
			$where = array('kode'=>$id);
            $data['kode']    = $_POST['kode'];
            $data['category_id']    = $_POST['category_id']; 
            $data['idsup']    = $_POST['idsup']; 
            $data['namabarang']    = $_POST['namabarang']; 
            $data['stok']    = $_POST['stok']; 
            $data['hrgbeli']    = $_POST['hrgbeli']; 
            $data['hrgjual']    = $_POST['hrgjual']; 
            $res = $this->db->update('barang',$data,$where);
            if ($res==1){
                redirect(base_url().'barang/vbarang');
            }else{
                redirect(base_url().'barang/ebarang');
            }
        }else{
            $data = $this->db->get_where('barang', array('kode'=>$id))->row_array();
            $datasup = $this->db->get('supplier')->result_array();
            $datacat = $this->db->get('categories')->result_array();
            $var = array();
            $var['module'] = 'barang_edit';
            $var['title'] = 'BARANG';
            $var['data'] = $data;
			$var['datacat'] = $datacat;
			$var['datasup'] = $datasup;
            $this->load->view('main', $var);
        }
    }
	


	//barang keluar

	public function vbarangkeluar(){
		$data = $this->db
						->select('*')
						->from('detbarangkeluar')
						->join('barang', 'barang.kode = detbarangkeluar.kode')
						->join('barangkeluar', 'barangkeluar.kodekeluar = detbarangkeluar.kodekeluar')
						->get('')->result_array();
		$var = array();
		$var['module'] = 'barangkeluar';
		$var['title'] = 'BARANG KELUAR';
		$var['data'] = $data;
		$this->load->view('main', $var);
	}


	//barang masuk
	
	public function vbarangmasuk(){
		$data = $this->db
						->select('*')
						->from('detbarangmasuk')
						->join('barang', 'barang.kode = detbarangmasuk.kode')
						->join('barangmasuk', 'barangmasuk.kodemasuk = detbarangmasuk.kodemasuk')
						->get('')->result_array();
		$var = array();
		$var['module'] = 'barangmasuk';
		$var['title'] = 'BARANG MASUK';
		$var['data'] = $data;
		$this->load->view('main', $var);
	}
	


}
