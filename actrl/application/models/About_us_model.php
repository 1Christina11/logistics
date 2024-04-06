<?php defined('BASEPATH') OR exit('No direct script access allowed');


class About_us_model extends CI_Model {


    public function get_one_about_us(){
		
        $this->db->where('about_us_id',1);
        $query = $this->db->get('about_us');
		return $query->row();
	}
}?>