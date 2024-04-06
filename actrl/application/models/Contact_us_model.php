<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Contact_us_model extends CI_Model {

 
    public function get_contact(){
		
    $query=$this->db->get('contact_us');
    return $query->result();
	}
    public function get_one_contact(){
		
        $this->db->where('contact_us_id',1);
        $query = $this->db->get('contact_us');
		return $query->row();
	}
}?>