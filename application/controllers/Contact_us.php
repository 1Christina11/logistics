<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Contact_us_model');
	   $this->load->model('Services_model');

	 }
	
	
	 public function get_contact_us()
    {
        $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['services']   = $this->Services_model->get_all_services();
        $title = "logistics-contact us";	
		$data['title'] = $title;
		$this->load->view('header',$data);
		$this->load->view('contact_us/contactus_view',$data);
	    $this->load->view('footer',$data);
		 
    }

    public function e_mail_send_code(){
        ///////// step 2 : make a function with the following code to compose the email and send it /////////////////
//        $time = strtotime($this->input->post('sdate'));
//        $sdate = date('Y-m-d',$time);
//        
//        $this->load->library('Email');
//        $this->load->config('email_to_logistics');
//
//        $from = $this->config->item('smtp_user');
//        $to = $Email;
//        $subject = " $sdate : $stime";
//        $message = 
//            'Full Name : ' . $full_name . '<br>' . 
//            'Email : ' . $e_mail . '<br>' . 
//            'Received Date : ' . $sdate . $stime .  '<br>' . 
//			
//            '<a href="' . 'mailto:' . $e_mail . '">Contact Us</a>' . '<br>' .
//
//        $this->email->set_newline("\r\n");
//        $this->email->from($from);
//        $this->email->to($to);
//        $this->email->subject($subject);
//        $this->email->message($message);
//
//        if ($this->email->send()) {
//            redirect('Contact_us/send_mail_success/' );
//        } else {
//			            redirect('Contact_us/send_mail_error');
//
////        }
//		$to = "contact@transportarlogistics.com";
//
//// Define the subject of the email
//$subject = "Test email";
//
//// Define the message content
//$message = "This is a test email message.";
//
//// Define additional email headers
//$headers = "From: info@transportarlogistics.com\r\n";
//$headers .= "Reply-To: contact@transportarlogistics.com\r\n";
////$headers .= "CC: cc@example.com\r\n";
//$headers .= "BCC: koky.maher2024@gmail.com\r\n";
//
//// Send the email using the PHP mail() function
//if (mail($to, $subject, $message, $headers)) {
//    echo "Email sent successfully.";
//} else {
//    echo "Email failed to send.";
//}

//		
        $this->load->library('email');
		$this->load->config('info_mail');
        
		$e_mail = $this->input->post('e_mail');
		$phone  = $this->input->post('phone');
		
		$message = 
            'customer Name : ' . $this->input->post('sname') . '<br>' . 
            "Email : <a href='mailto:$e_mail'>$e_mail</a><br>" .
            "Phone No. : <a href='tel:$phone'>$phone</a><br>" .
            'customer  Message : ' . $this->input->post('message') . '<br>';
			
		$this->email->to('info@transportarlogistics.com');
		$this->email->from('contact@transportarlogistics.com');
		$this->email->subject($this->input->post('subject'));
		$this->email->message($message);
		
	    if ($this->email->send()) {
			
			redirect('Contact_us/send_mail_success');

		}else{
			redirect('Contact_us/send_mail_error');
		}
    }


        ///////////////////////////// send email ///////////////////////////////////////////////////

	

    
    public function send_mail_success(){
//		
	    $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['services']   = $this->Services_model->get_all_services();

		
		$this->load->view('header',$data);
		$this->load->view('contact_us/send_success_view');
	    $this->load->view('footer',$data);

       
    }
	
		
    public function send_mail_error(){
		
        $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['services']   = $this->Services_model->get_all_services();


		$this->load->view('header',$data);
	    $this->load->view('contact_us/send_error_view');

	    $this->load->view('footer',$data);
    }
	
}