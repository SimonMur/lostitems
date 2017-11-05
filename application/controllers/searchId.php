<?php
 if ( ! defined('BASEPATH')) exit('No direct Scripts allowed');
 class SearchId extends CI_Controller{
  public function _construct()
  {
   parent::_construct();
   //load form helper
   $this->load->helper('form');
   $this->load->helper('url');
// load 'session' 
 $this->load->library('session');
    // load 'validation' class
    $this->load->library('form_validation');
    $this->load->database();
   //$this->load->model('searchId_model');
  }
  public function index(){
  
   redirect('/'); 
  
  }
  public function search(){
  
    $IdNo   =   $this->input->post('IdNo');
	 $this->load->model('searchId_model');
     $data['results']= $this->searchId_model->search($IdNo);
	  if ($this->searchId_model->search($IdNo)) {
    $this->load->view('layouts/header');
    $this->load->view('search/searchresult',$data);
    $this->load->view('layouts/footer');
     } else{
     $this->load->view('layouts/header');
     $this->load->view('report/reportlost');
    $this->load->view('layouts/footer');
     }

  
        
 $data = array(

        'id_number' => $IdNo,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'user_id' =>  $this->db->affected_rows("SELECT user_id FROM lostitems WHERE id_number = '$IdNo'")
       
    );
    $this->db->insert('histories',$data);
    }
 }
 ?>