<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __counstruct(){
		parent::__construct();
    }
 
    public function vkat(){
        $data = $this->db->get('categories')->result_array();
        $var = array();
		$var['module'] = 'kategori';
		$var['title'] = 'KATEGORI';
		$var['data'] = $data;
		 $this->load->view('main', $var);
    }

    public function tkat(){
        if(isset($_POST['submit'])){
            $data['category_id']    = $_POST['category_id'];
            $data['explanation']    = $_POST['explanation']; 
            $res = $this->db->insert('categories',$data);
            if ($res==1){
                redirect(base_url().'kategori/vkat');
            }else{
                redirect(base_url().'kategori/tkat');
            }
        }else{
            $data = $this->inven_model->GetAutoNumberCat();
            $id_max = $data['max_id'];
            $sort_num = ((int) substr($id_max, 1, 4)) +1;
            $new_code = sprintf("%03s", $sort_num);
            $result = 'cat-'.$new_code;
            $var = array();
            $var['module'] = 'kategori_tambah';
            $var['title'] = 'KATEGORI';
            $var['data'] = $result;
            $this->load->view('main', $var);
        }
    }


    public function ekat($id){
        if(isset($_POST['submit'])){
            $where = array('category_id' =>$id);
            $data['category_id']    = $_POST['category_id'];
            $data['explanation']    = $_POST['explanation']; 
            $res = $this->db->update('categories',$data,$where);
            if ($res==1){
                redirect(base_url().'kategori/vkat');
            }else{
                redirect(base_url().'kategori/ekat');
            }
        }else{
            $data = $this->db->get_where('categories', array('category_id'=>$id))->row_array();
            $var = array();
            $var['module'] = 'kategori_edit';
            $var['title'] = 'KATEGORI';
            $var['data'] = $data;
            $this->load->view('main', $var);
        }
    }
}    

?>
