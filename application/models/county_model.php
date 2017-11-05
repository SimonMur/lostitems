<?php if( ! defined('BASEPATH')) exit('No direct Scripts Access Allowed');
class County_model extends CI_Model {
   function _construct()
   {
   //call the model construct
   parent::_construct();
    //load form helper
  
   $this->load->helper('form');
   $this->load->helper('url');
    
// load 'session' 

 //$this->load->library('session');
    // load 'validation' class
    $this->load->library('form_validation');
    $this->load->database();
   }
	function get_county()
	{
	$this->db->select('name');
$query = $this->db->get('constituency');
if($query)
{
    $query = $query->result_array();
    return $query;
}
	}
	//end class 
   }