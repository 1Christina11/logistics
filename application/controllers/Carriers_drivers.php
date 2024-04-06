<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carriers_drivers extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Services_model');
		$this->load->model('Contact_us_model');
		
	 }


 	public function index(){
		$data['services'] = $this->Services_model->get_all_services();
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$title = "logistics-drivers career";	
		$data['title'] = $title;

		$this->load->view('header', $data);
		$this->load->view('driver_carriers/carriers_drivers_view', $data);
		$this->load->view('footer', $data);
	}
//	public function get_one($service_id){
//		$data['one_service'] = $this->Services_model->get_one_service($service_id);
//		$data['services'] = $this->Services_model->get_all_services();
////		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
//		
//		$this->load->view('header', $data);
//		$this->load->view('services/carriers_drivers_view', $data);
//		$this->load->view('footer', $data);
//	}

//	public function insert_service(){
//        
//    	$data = array(
//            'service_head' => $this->input->post('service_head'),
//            'service_pic' => $this->input->post('service_pic'),
//			'service_status' => $this->input->post('service_status'),
//            'service_description' => $this->input->post('service_description'),);
//        $this->db->insert('services', $data);
//		
//		redirect('services/all_services_view');
//    }
	
//    public function edit_service()
//    {
//
//        $data['services'] = $this->Services_model->get_one_service();
//		$this->load->view('header');
//        $this->load->view('services/service_view_edit',$data);
//	    $this->load->view('footer');
//
//    }

//    public function update_service()
//    {
//      $data=array(
//        'service_head' => $this->input->post('service_head'),
//        'service_pic'=> $this->input->post('service_pic'),
//		'service_status' => $this->input->post('service_status'),
//        'service_description'=> $this->input->post('service_description')
//      );
//
//				$this->db->where('service_id',$id);
//				$this->db->update('services',$data);
//	      redirect('services/service_view');
//
//    }
//
//	public function enable_service($service_id){
//		
//       $data = array(
//            'service_status' => '1',
//	   );
//       $this->db->where('service_id',$service_id);
//		$this->db->update('services', $data);
//		
//       redirect('Services_model/get_all_services');
//    }
//    public function disable_service($service_id){
//		
//       $data = array(
//            'service_status' => '0',
//	   );
//       $this->db->where('service_id',$service_id);
//		$this->db->update('services', $data);
//		
//       redirect('Services_model/get_all_services');
//    }
//	
//		
    
    
    public function send_driver_info(){
		$this->load->library('email');
		$this->load->config('info_mail');
		
        $subject = 'Driver Information' ;
		$e_mail = $this->input->post('e_mail');
		$phone  = $this->input->post('phone');
		$full_name =$this->input->post('first_name').$this->input->post('last_name');
		$city = implode(',', $this->input->post('city'));
		
	    $message = 
					'Full Name : ' . $full_name . '<br>' . 
					"Email : <a href='mailto:$e_mail'>$e_mail</a><br>" .
					"Phone No. : <a href='tel:$phone'>$phone</a><br>" .
					'address : ' . $this->input->post('address') . '<br>' . 
					'address2 : ' . $this->input->post('address2') . $this->input->post('city') .$this->input->post('state').
					$this->input->post('postal').'<br>' . 
					'phone number : ' . $this->input->post('phone') . '<br>' .
					'birthdate: ' . $this->input->post('month') . $this->input->post('day'). $this->input->post('year') .'<br>' .
					'eligible to work in the US : ' . $vehicle_type . '<br>' .
					'cities can you work: ' . $city . '<br>' .
					'vehicle type: ' . $this->input->post('vehicle_type') . '<br>' .
					'drivers license Number: ' . $this->input->post('driverslicense') . '<br>' .
					'insurance provider: ' . $this->input->post('insuranceprovider') . '<br>' .
					'insurance policy Number: ' . $this->input->post('insurancepolicy') . '<br>' .
					'When can you start: ' . $this->input->post('month2') . $this->input->post('day2'). $this->input->post('year2') .'<br>' .
					'monday: from ' . $this->input->post('mondayhour1') . $this->input->post('mondayminute1'). $this->input->post('mondayampm1') . 'to' . $this->input->post('mondayhour2') . $this->input->post('mondayminute2'). $this->input->post('mondayampm2') . '<br>' .
					'tuesday: from ' . $this->input->post('tuesdayhour1') . $this->input->post('tuesdayminute1'). $this->input->post('tuesdayampm1') . 'to' . $this->input->post('tuesdayhour2') . $this->input->post('tuesdayminute2'). $this->input->post('tuesdayampm2') . '<br>' .
					'wendesday: from ' . $this->input->post('wendesdayhour1') . $this->input->post('wendesdayminute1'). $this->input->post('wendesdayampm1') . 'to' . $this->input->post('wendesdayhour2') . $this->input->post('wendesdayminute2'). $this->input->post('wendesdayampm2') . '<br>' .
					'thursday: from ' . $this->input->post('thursdayhour1') . $this->input->post('thursdayminute1'). $this->input->post('thursdayampm1') . 'to' . $this->input->post('thursdayhour2') . $this->input->post('thursdayminute2'). $this->input->post('thursdayampm2') . '<br>' .
					'friday: from ' . $this->input->post('fridayhour1') . $this->input->post('fridayminute1'). $this->input->post('fridayampm1') . 'to' . $this->input->post('fridayhour2') . $this->input->post('fridayminute2'). $this->input->post('fridayampm2') . '<br>' .
					'saturday: from ' . $this->input->post('saturdayhour1') . $this->input->post('saturdayminute1'). $this->input->post('saturdayampm1') . 'to' . $this->input->post('saturdayhour2') . $this->input->post('saturdayminute2'). $this->input->post('saturdayampm2') . '<br>' .
					'sunday: from ' . $this->input->post('sundayhour1') . $this->input->post('sundayminute1'). $this->input->post('sundayampm1') . 'to' . $this->input->post('sundayhour2') . $this->input->post('sundayminute2'). $this->input->post('sundayampm2') . '<br>' .

		  
		  
		$this->email->to('info@transportarlogistics.com');
		$this->email->from('career@transportarlogistics.com');
		$this->email->subject($this->input->post('subject'));
		$this->email->message($message);
		
	   if ($this->email->send()) {
				redirect('Carriers_drivers/send_mail_success');
		}else{
			redirect('Carriers_drivers/send_mail_error');
		}
		
	}
        

	   public function send_mail_success(){
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
		$title = "logistics-send mail success";	
		$data['title'] = $title;

		$this->load->view('header', $data);
		 $this->load->view('driver_carriers/carriers_send_success_view');
		$this->load->view('footer', $data);

    }
	
		
    public function send_mail_error(){
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
		$title = "logistics-send mail error";	
		$data['title'] = $title;

		$this->load->view('header', $data);
		 $this->load->view('driver_carriers/carriers_send_error_view');
		$this->load->view('footer', $data);

   
     
     }
	public function thetest(){
		
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
        $title = "logistics-cdl driver";	
		$data['title'] = $title;
		$this->load->view('header', $data);
		 $this->load->view('driver_carriers/cdl_driver_view');
		$this->load->view('footer', $data);
		
	}
	
	
    public function test(){
		$data['services'] = $this->Services_model->get_all_services();
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		 $title = "logistics-owner";	
		$data['title'] = $title;
		$this->load->view('header', $data);
		$this->load->view('driver_carriers/test');
		$this->load->view('footer');
	}
}