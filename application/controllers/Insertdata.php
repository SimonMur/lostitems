<?php
 if ( ! defined('BASEPATH')) exit('No direct Scripts allowed');
  class Insertdata extends CI_Controller
  {
    public function __construct()
{
    parent::__construct();
   // load 'url' helper
    $this->load->helper('url');

    // load 'form' helper
    $this->load->helper('form');

// load 'session' 
 $this->load->library('session');
    // load 'validation' class
    $this->load->library('form_validation');
    $this->load->database();
   $this->load->model('County_model');
}
function index()
{
        $this->load->view('header');
		$this->load->view('footer');
   //set validation rules
    $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_only_space|min_length[2]|max_length[30]');
    //$this->form_validation->set_rules('county', 'County', 'trim|required|integer');
    $this->form_validation->set_rules('collectorsname', 'Collectors Name', 'trim|required|xss_clean|callback_alpha_only_space|min_length[2]|max_length[30]');
	$this->form_validation->set_rules('IdNo', 'Id Number already has been reported or the', 'trim|required|integer|min_length[8]|max_length[8]||is_unique[foundid_details.Id_Number]');
	$this->form_validation->set_rules('placefound', 'Place Found', 'trim|required|xss_clean|callback_alpha_only_space|min_length[2]|max_length[30]');
	$this->form_validation->set_rules('collectorscontact', 'Collectors Contact', 'trim|required|integer|min_length[10]|max_length[10]');
	   $this->form_validation->set_rules('county', 'County', 'callback_combo_check');
$this->form_validation->set_rules('date', 'date lost','trim|required|valid_date[d/m/y,/]|callback_date_check');
//checking validation and inserting data
if($this->form_validation->run() == false){
  //fail validation
  $this->load->view('welcome_message');
}
else{
  //Pass Validation
  $data =array(
  'Name'=>$this->input->post('name'),
  'Collectors_Name'=>$this->input->post('collectorsname'),
  'Id_Number'=>$this->input->post('IdNo'),
  'Place_Found'=>$this->input->post('placefound'),
  'County'=>$this->input->post('county'),
  'Collectors_Contact'=>$this->input->post('collectorscontact'),
  'datelost'=> @date('Y-m-d', @strtotime($this->input->post('date'))),
  );
  //Insert the data to the database
  $this->db->insert('foundid_details',$data);
  
  $message = '<p></p>';
  foreach ($data as $key => $value) {
    $message .= '<p>'.$key.' - '.$value.'</p>';
  }
  
  // send email
  mail('lostitemskenya@gmail.com', 'New Lost Item', $message);
  //Display success data
 $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Success in adding Lost ID/Passport Document details!!!</div>');
        redirect('Insertdata/index');
} 
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
  //custom validation function for dropdown input
    function combo_check($str)
    {
        if ($str == '')
        {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
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