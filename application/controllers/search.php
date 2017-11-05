<?php
 if ( ! defined('BASEPATH')) exit('No direct Scripts allowed');
 class Search extends CI_Controller{
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
   $this->load->model('searchmodel');
  }
  public function index(){
   $this->load->view('header');
   $this->load->view('searchview');
    $this->load->view('footer');
  }
  public function dosearch(){
    $IdNo   =   $this->input->post('IdNo');
	 $this->load->model('searchmodel');
     $data['results']= $this->searchmodel->dosearch($IdNo);
	  $this->load->view('header');
      $this->load->view('searchresult',$data);
      $this->load->view('footer');
  }
 }
 ?>