<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        if(isset($_SESSION['user_id'])){
            redirect("admin/dashboard");
        }
    
        $data=[];
        if(isset($_SESSION['error'])){

            $data['error']=$_SESSION['error'];
        }
        else{
            $data['error']="NO_ERROR";
        }
		$this->load->view('admin/loginview', $data);
	}

    function login_post(){
        // print_r($_POST);
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query=$this->db->query("SELECT * FROM `backendusers` WHERE `username`='$username' AND `password`='$password'");

        if($query->num_rows()){

            $result=$query->result_array();
         ;
            $this->session->set_userdata('user_id',$result[0]['uid']);
            redirect('admin/dashboard');
        }
        else{
            $this->session->set_flashdata('item', 'Invalid credetials');
            redirect('admin/login');
        }
    }

    function logout(){
        session_destroy();
        redirect('admin/login');
    }
}
