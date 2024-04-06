<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Events_model');		
	}

	public function add_event(){
		$this->load->view('header');
        $this->load->view('events/add_events_view');
	    $this->load->view('footer');
	}
	
	private function set_upload_options($path_folder){   
        //upload an image options
        $config = array();
        $config['upload_path']   = './assets/images/' . $path_folder . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    } 
	
	public function insert_event(){
		 
		 date_default_timezone_set('Africa/Cairo');
	  	 $created_at = date('Y-m-d H:i:s a', time());
		 if ($_FILES['userfile']['name'] != ""){
        
            $path_folder = 'bar';
            
            $this->upload->initialize($this->set_upload_options($path_folder));
            
			if (!$this->upload->do_upload('userfile')) {
				$image = $this->upload->display_errors();
			}else{
				$data = array('upload_data' => $this->upload->data());
				$image = $data['upload_data']['file_name'];
			     }
				$data = array(
					'event_name'       => $this->input->post('event_name'), 
					'event_time'       => $this->input->post('event_time'), 
					'event_date'       => $this->input->post('event_date'), 
					'created_at'       => $created_at,
					'event_description'=> $this->input->post('event_description'),
					'event_photo'      => $image,
					'event_price'      => $this->input->post('event_price'),	
					'hoster_name'      => $this->input->post('hoster_name'),
					'video'            => $this->input->post('video'),
					'event_status'     => $this->input->post('event_status'),
					);
			  $this->db->insert('events',$data);
		 }
		 redirect('home');
	 }

	public function events_search(){
		$this->load->view('header');
        $this->load->view('Events/events_search_view');
	    $this->load->view('footer');
	}

	public function events_search_result(){

		$data['event'] =  $this->Events_model->events_search();

        $this->load->view('header');
		$this->load->view('events/events_search_result_view', $data);
	    $this->load->view('footer');
	}
	
	public function events_search_result_ses(){

		$data['event'] =  $this->Events_model->events_search_result_ses();

        $this->load->view('header');
		$this->load->view('events/events_search_result_view', $data);
	    $this->load->view('footer');
	}
	
	public function edit_event($events_id){

		$data['event'] =  $this->Events_model->get_one_event($events_id);
		
		$this->load->view('header');
		$this->load->view('events/events_edit_view', $data);
	    $this->load->view('footer');
	}
	
	public function update_event(){
		
		 date_default_timezone_set('Africa/Cairo');
	  	 $created_at = date('Y-m-d H:i:s a', time());
		 
	  	if ($_FILES['userfile']['name'] != ""){
        
            $path_folder = 'bar';
            
            $this->upload->initialize($this->set_upload_options($path_folder));
            
			if (!$this->upload->do_upload('userfile')) {
				$image = $this->upload->display_errors();
			}else{
				$data = array('upload_data' => $this->upload->data());
				$image = $data['upload_data']['file_name'];
			     }
		                  
         $data = array(
					'event_name'       => $this->input->post('event_name'), 
					'event_time'       => $this->input->post('event_time'), 
					'event_date'       => $this->input->post('event_date'), 
					'created_at'       => $created_at,
					'event_description'=> $this->input->post('event_description'),
					'event_photo'      => $image,
					'event_price'      => $this->input->post('event_price'),	
					'hoster_name'      => $this->input->post('hoster_name'),
					'video'            => $this->input->post('video'),
					'event_status'     => $this->input->post('event_status'),
					);
				$this->db->where('events_id',$this->input->post('events_id'));
				$this->db->update('events',$data);
            redirect('Events/events_search_result_ses');
			
        }else{
			 $data = array(
					'event_name'       => $this->input->post('event_name'), 
					'event_time'       => $this->input->post('event_time'), 
					'event_date'       => $this->input->post('event_date'), 
					'created_at'       => $created_at,
					'event_description'=> $this->input->post('event_description'),
					'event_price'      => $this->input->post('event_price'),	
					'hoster_name'      => $this->input->post('hoster_name'),
					'video'            => $this->input->post('video'),
					'event_status'     => $this->input->post('event_status'),
					);
				$this->db->where('events_id',$this->input->post('events_id'));
				$this->db->update('events',$data);
			redirect('Events/events_search_result_ses');
		}
    }
	
	public function delete_event($events_id){
		$this->db->where('events_id', $events_id);
		$this->db->delete('events');
		redirect('Events/events_search_result_ses');
	}
	
}?>