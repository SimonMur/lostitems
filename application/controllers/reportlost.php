<?php
 if ( ! defined('BASEPATH')) exit('No direct Scripts allowed');
  class Reportlost extends CI_Controller
  {
    public function __construct()
{
    parent::__construct();
   // load 'url' helper
    $this->load->helper('url');

    // load 'form' helper
    $this->load->helper('form');
$this->load->helper('date');
// load 'session' 
 $this->load->library('session');
    // load 'validation' class
    $this->load->library('form_validation');
    $this->load->database();

}
function index()
{
      //$this->form_validation->set_rules('secondname', 'second name', 'trim|required|xss_clean|callback_alpha_only_space');
  $this->form_validation->set_rules('IdNo', 'Id Number already has been reported or the', 'trim|required|integer|is_unique[lostid_details.Id]|min_length[8]|max_length[8]');
  $this->form_validation->set_rules('PNo', 'Phone Number', 'trim|required|integer|min_length[10]|max_length[10]');
  $this->form_validation->set_rules('Email', 'Email', 'trim|valid_email|required');
    $this->form_validation->set_rules('date', 'date lost','trim|required|valid_date[d/m/y/]|callback_date_check');

//checking validation and inserting data
if($this->form_validation->run() == false){
  //fail validation
       $this->load->view('layouts/header');
  $this->load->view('report/reportlost');
  $this->load->view('layouts/footer');
}
else{
  //Pass Validation
  $data =array(
  // 'surname'=>$this->input->post('surname'),
  'firstname'=>$this->input->post('firstname'),
  // 'secondname'=>$this->input->post('secondname'),
  'Id'=>$this->input->post('IdNo'),
  'Phone_Number'=>$this->input->post('PNo'),
  'Email'=>$this->input->post('Email'),
  'datelost'=> @date('Y-m-d', @strtotime($this->input->post('date'))),
  );
  //Insert the data to the database
  $this->db->insert('lostid_details',$data);
  $message = '<p></p>';
  foreach ($data as $key => $value) {
    $message .= '<p>'.$key.' - '.$value.'</p>';
  }
  
  // send email
  mail('zippwaah@gmail.com', 'New Lost Id/Passport', $message);
  
  $items = $this->count_items();
  //Display success data
 $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Your Documents details successfully received. You will get a notification when item is recovered</div>');
 
        redirect('/');
} 
}
   
	
function count_items()
  {
  $query = $this->db->query("SELECT Id FROM lostid_details");
  return $query->num_rows();

  }
//custom validation function to accept only alpha and space input
function alpha_only_space($str)
{
    if (!preg_match("/^([-a-z ])+$/i", $str))
    {
        $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}
function date_check($db_date){
if(strtotime($db_date) > time()) {
  $this->form_validation->set_message('date_check','Please input a valid date');
  return FALSE;
} 
else {
 return TRUE;
}
}
}
 ?>