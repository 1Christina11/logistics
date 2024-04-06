<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Events_model extends CI_Model {

    public function events_search(){
		
		$date_to      = $this->input->post('date_to');        
		$date_from    = $this->input->post('date_from');
        $event_status = $this->input->post('event_status');
		$event_name   = $this->input->post('event_name');
        $hoster_name  = $this->input->post('hoster_name');
		///////////////////// set session 
		$sesseadata = array(
							'date_to'     =>$date_to ,       
							'date_from'   =>$date_from,
							'event_status'=>$event_status,
							'event_name'  =>$event_name,
							'hoster_name' =>$hoster_name,
						    );
         $this->session->set_userdata($sesseadata);
		
		if($date_from != ''){
			$this->db->where('created_at >=',$date_from);
		}

		if($date_to != ''){
			$this->db->where('created_at <=',$date_to);
		}

        if($event_status != ''){
            $this->db->where('event_status',$event_status);
        }
        if($event_name != ''){
            $this->db->where('event_name',$event_name);
        }
        if($hoster_name != ''){
            $this->db->where('hoster_name',$hoster_name);
        }
      
        $query = $this->db->get('events');
        return $query->result();
    }
	
    public function events_search_result_ses(){
		
		$date_to      = $this->session->userdata('date_to');
		$date_from    = $this->session->userdata('date_from');
        $event_status = $this->session->userdata('event_status');
		$event_name   = $this->session->userdata('event_name');
        $hoster_name  = $this->session->userdata('hoster_name');
        
     
		if($date_from != ''){
			$this->db->where('created_at >=',$date_from);
		}
		if($date_to != ''){
			$this->db->or_where('created_at <=',$date_to);
		}
      if($event_status != ''){
            $this->db->where('event_status',$event_status);
        }
        if($event_name != ''){
            $this->db->where('event_name',$event_name);
        }
        if($hoster_name != ''){
            $this->db->where('hoster_name',$hoster_name);
        }
        $query = $this->db->get('events');
        return $query->result();
	}
    
    public function get_one_event($events_id){
		
        $this->db->where('events_id',$events_id);
		
        $query = $this->db->get('events');
		return $query->row();
	}


}?>