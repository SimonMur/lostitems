<?php
 if ( ! defined('BASEPATH')) exit('No direct Scripts allowed');
  class Payment extends CI_Controller
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

  $this->load->view('layouts/header');
  $this->load->view('payments/payments');
  $this->load->view('layouts/footer');
}

 }?>