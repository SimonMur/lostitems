<?php 
if( ! defined('BASEPATH')) exit('No direct Scripts Access Allowed');
class SearchModel extends CI_Model {
   function _construct()
   {
   //call the model construct
   parent::_construct();
    //load form helper
   $this->load->helper('form');
   $this->load->helper('url');
// load 'session' 
 $this->load->library('session');
    // load 'validation' class
    $this->load->library('form_validation');
    $this->load->database();
   }
 
    function dosearch($IdNo)
    {
	 $this->load->database();
        $this->db->where('id_number',$IdNo);
        $query= $this->db->get('lostitems');
        return $query->result();
    
    }

}
   