<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Contact_us_model extends CI_Model{
			
			public function get_all_contact_us(){
		        $this->db->where('contact_us_id',1);
				$query = $this->db->get('contact_us');
				return $query->row();
			}
			

 		}?>