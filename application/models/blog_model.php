<?php

class blog_model extends CI_Model{

    function insert_blog_data(){

       $data = array(

        'fname'=> $this->input->post('fname',TRUE),
        'lname'=>$this->input->post('lname',TRUE),
        'email'=>$this->input->post('email',TRUE),
        'password'=>sha1($this->input->post('password',TRUE)),

       );

      return $this->db->insert('user', $data);
    //   return false;

    }

    
  
}

?>