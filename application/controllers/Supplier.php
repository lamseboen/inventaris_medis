<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Supplier extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function vsup(){
        $data = $this->db->join('categories', 'categories.category_id = supplier.category_id')
                        ->get('supplier')->result_array();
        
        $var = array();
		$var['module'] = 'supplier';
		$var['title'] = 'SUPPLIER';
		$var['data'] = $data;
		 $this->load->view('main', $var);
                        
    }

    public function tsup(){
        if(isset($_POST['submit'])){
            $data['idsup']    = $_POST['idsup'];
            $data['namasup']    = $_POST['namasup']; 
            $data['notelp']    = $_POST['notelp']; 
            $data['alamat']    = $_POST['alamat']; 
            $data['category_id']    = $_POST['category_id']; 
            $res = $this->db->insert('supplier',$data);
            if ($res==1){
                redirect(base_url().'supplier/vsup');
            }else{
                redirect(base_url().'supplier/tsup');
            }
        }else{
            $data = $this->inven_model->GetAutoNumberSup();
            $datacat = $this->db->get('categories')->result_array();
            $id_max = $data['max_id'];
            $sort_num = ((int) substr($id_max, 1, 4)) +1;
            $new_code = sprintf("%04s", $sort_num);
            $result = 'sup-'.$new_code;
            $var = array();
            $var['module'] = 'supplier_tambah';
            $var['title'] = 'SUPPLIER';
            $var['data'] = $result;
            $var['datacat'] = $datacat;
            
            $this->load->view('main', $var);
        }
    }


    public function esup($id){
        if(isset($_POST['submit'])){
            $where = array('idsup' =>$id);
            $data['idsup']    = $_POST['idsup'];
            $data['namasup']    = $_POST['namasup']; 
            $data['notelp']    = $_POST['notelp']; 
            $data['alamat']    = $_POST['alamat']; 
            $data['category_id']    = $_POST['category_id']; 
            $res = $this->db->update('supplier',$data,$where);
            if ($res==1){
                redirect(base_url().'supplier/vsup');
            }else{
                redirect(base_url().'supplier/esup');
            }
        }else{
            $data = $this->db->get_where('supplier', array('idsup'=>$id))->row_array();
            $datacat = $this->db->get('categories')->result_array();
            $var = array();
            $var['module'] = 'supplier_edit';
            $var['title'] = 'SUPPLIER';
            $var['data'] = $data;
            $var['datacat'] = $datacat;
            $this->load->view('main', $var);
        }
    }
}
