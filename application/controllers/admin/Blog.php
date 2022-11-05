<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {



    public function index()
	{
        $this->load->view('admin/viewblog');

    }


	public function addblog()
	{

    
        $this->load->view('admin/addblog');
		
	}

    

    public function addblogpost()
	{

     $this->form_validation->set_rules('blog_title','Blog title' , 'required');
    $this->form_validation->set_rules('desc', 'Description', 'required');
   
    if($this->form_validation->run()==FALSE){
        $this->load->view('admin/addblog');
    }
    else{

        if($_FILES){

            $config['upload_path']          = './assets/uploads/blogimg/';
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
            {
                    $error = array('error' => $this->upload->display_errors());

                 die("Error");
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    // echo "<pre>";
                    // print_r($data['upload_data']['file_name']);

                    $fileurl="assets/uploads/blogimg/".$data['upload_data']['file_name'];
                    $blog_title=$_POST['blog_title'];
                    $desc=$_POST['desc'];


                    $query=$this->db->query("INSERT INTO `articles`( `blog_title`, `blog_desc`, `blog_image` ) 
                    VALUES ('$blog_title','$desc','$fileurl')");

                    
                    if($query){
                        $this->session->set_flashdata('inserted', 'yes');
                          redirect('admin/blog/addblog');
                    }
            }
           
        }
      
       
}
		
	}

    public function viewblog()
	{
    
        $this->load->view('admin/viewblog');
		
	}
}
