<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Services_model');
		$this->load->model('Contact_us_model');
		
	 }


 	public function index(){
		$data['services'] = $this->Services_model->get_all_services();
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$title = "logistics-services";	
		$data['title'] = $title;

		$this->load->view('header', $data);
		$this->load->view('services/services_view', $data);
		$this->load->view('footer', $data);
	}
	public function get_one($service_id){
		$data['one_service'] = $this->Services_model->get_one_service($service_id);
		$data['services'] = $this->Services_model->get_all_services();
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
	    $title = "logistics-one service";	
		$data['title'] = $title;

		$this->load->view('header', $data);
		$this->load->view('services/one_service_view', $data);
		$this->load->view('footer', $data); 
	}

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
    
    
    public function e_mail_send_code(){
        
//        ///// step 1 : make a file with the email we will send from
//        $config = array(
//            'protocol' => 'sendmail', // 'mail', 'sendmail', or 'smtp'
//            'smtp_host' => 'localhost', 
//            'smtp_port' => 25,
//            'smtp_user' => 'booking@domain.com',
//            'smtp_pass' => 'password',
//            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//            'mailtype' => 'html', //plaintext 'text' mails or 'html'
//            'smtp_timeout' => '4', //in seconds
//            'charset' => 'iso-8859-1',
//            'wordwrap' => TRUE
//        );
        
        /////// step 2 : make a function with the following code to compose the email and send it /////////////////
        $time = strtotime($this->input->post('sdate'));
        $sdate = date('Y-m-d',$time);
        
        $this->load->library('email');
        $this->load->config('info_mail');

        $from = $this->config->item('smtp_user');
        $to = 'info@transportarlogistics.com';
        $subject = "Booking : $sdate : $stime : $guests seats";
        $message = 
            'Full Name : ' . $full_name . '<br>' . 
            'Email : ' . $e_mail . '<br>' . 
            'Phone No. : <a href="' . 'tel:' . $phone_number . '">' . $phone_number . '</a>' . '<br>' . 
            'Booking Date : ' . $sdate . '<br>' . 
            'Booking Time : ' . $stime . '<br>' .
            'Number of Seats : ' . $guests . '<br>' .
//            '<a href="' . 'mailto:' . $e_mail . '">Request Change Booking</a>' . '<br>' .
//            '<a href="' . 'https://domain.com/index.php/Book_your_table/confirm_booking/' . $booking_id . '">Confirm Booking</a>' . '<br>' .
//            '<a href="' . 'https://domain.com/index.php/Book_your_table/cancel_booking/' . $booking_id . '">Cancel Booking</a>' . '<br>';

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
//            $msg = 'We received your booking successfuly We will contact you soon.';
            redirect('Services/get_one/');
        } else {
//            $msg = 'There is an error in receiving your booking Please try again later!';
               redirect('Services/get_one/');
        }
        ///////////////////////////// send email ///////////////////////////////////////////////////
    }
	   public function send_mail_success(){
//		
//		if($message != NULL ){
//		$message = 'Email sent successfuly ! ,Please chech your Email';
//		}
//        $data['message'] = $message;
//        $this->load->view('users/mail_success_view', $data);
        echo 'email sent successfuly!';
    }
	
		
    public function send_mail_error(){
		
        echo 'email sent unsuccessfuly!';
    }
	
    
    
    
}