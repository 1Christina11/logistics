<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model{
	
	
    function __construct()
  {
      parent::__construct(); // construct the Model class
  }


    public function get_all_services()
{
    	$this->db->where('service_status', 1 );
		$query=$this->db->get('services');
    return $query->result();
}
	public function get_one_service($service_id)
{
    $this->db->where('service_id',$service_id);
    $query=$this->db->get('services');
    return $query->row();
}

        
    
} ?>