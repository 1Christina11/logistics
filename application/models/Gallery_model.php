<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Gallery_model extends CI_model{
			
			public function get_all_photos(){
				$query = $this->db->get('gallery_photos');
				return $query->result();
			}
			
 }?>
