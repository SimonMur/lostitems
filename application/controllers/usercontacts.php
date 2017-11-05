<?php
 if ( ! defined('BASEPATH')) exit('No direct Scripts allowed');
  class Usercontacts extends CI_Controller
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
}
function index()
{
   //set validation rules
  $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|min_length[2]|max_length[30]');
	$this->form_validation->set_rules('PNo', 'Phone Number', 'trim|required|integer|min_length[10]|max_length[10]');
	

//checking validation and inserting data
if($this->form_validation->run() == false){
  //fail validation

 $this->load->view('layouts/header');
  $this->load->view('shared/contacterror');
   $this->load->view('layouts/footer');
}
else{
  //Pass Validation
  $data =array(
  'id_number'=>$this->input->post('IdNo'),
  'Name'=>$this->input->post('name'),
  'Email'=>$this->input->post('email'),
  'Phone_Number'=>$this->input->post('PNo'),
  'Doc_name'=>$this->input->post('docname'),
  'user_id' =>  $this->input->post('id'),
  );
  //Insert the data to the database
  $this->db->insert('usersfoundid_contacts',$data);
  
  $message = '<p></p>';
  foreach ($data as $key => $value) {
    $message .= '<p>'.$key.' - '.$value.'</p>';
  }
   $Name   =   $this->input->post('name');
   $Phone   =   $this->input->post('PNo');
   $IdNo = $this->input->post('IdNo');
   $docname = $this->input->post('docname');
   $Id = $this->input->post('id');
  
    
   $data1 = array(   

        'notice_type' => "$Name has searched doc Number $IdNo contact: $Phone",
        'identifier' => $IdNo,
        'user_id' =>  $Id
       
    );
   
    $this->db->insert('notifications',$data1);

    if( $docname == $Name ) { 
  // send email
  mail('zippwaah@gmail.com', 'New Contact Details', $message);
  //Display success data
 $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Success in adding Lost ID Document details!!!</div>');
     $this->load->view('layouts/header');
            redirect('payment'); 
             $this->load->view('layouts/footer');
         }

         else{
           $this->load->view('layouts/header');
          $this->load->view('shared/notfound');
           $this->load->view('layouts/footer');
         } 
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
}
 ?>