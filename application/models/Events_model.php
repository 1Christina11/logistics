<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Events_model extends CI_Model{
			
			public function get_all_events(){
				$query=$this->db->get('events');
				return $query->result();
			}
			
			public function get_one_event(){
//				$this->db->where('events_id',$events_id);
				$query=$this->db->get('events');
				return $query->row();
			}
			
 		}?>