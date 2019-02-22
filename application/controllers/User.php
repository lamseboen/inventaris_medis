<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function vuser(){
        $data = $this->db->get('user')->result_array();
        $var = array();
		$var['module'] = 'user';
		$var['title'] = 'DATA USER';
		$var['data'] = $data;
		$this->load->view('main', $var);
    }

    public function tuser(){
        if(isset($_POST['submit'])){
            $data['nik']    = $_POST['nik'];
            $data['username']    = $_POST['username']; 
            $data['nama']    = $_POST['nama']; 
            $data['password']    = $_POST['password']; 
            $data['job']    = $_POST['job']; 
            $res = $this->db->insert('user',$data);
            if ($res==1){
                redirect(base_url().'user/vuser');
            }else{
                redirect(base_url().'user/tuser');
            }
        }else{
            $data = $this->inven_model->GetAutoNumberUser();
            $id_max = $data['max_id'];
            $sort_num = ((int) substr($id_max, 1, 4)) +1;
            $new_code = sprintf("%04s", $sort_num);
            $result = 'id-'.$new_code;
            $var = array();
            $var['module'] = 'user_tambah';
            $var['title'] = 'BARANG';
            $var['data'] = $result;
            $this->load->view('main', $var);
        }
    }


}