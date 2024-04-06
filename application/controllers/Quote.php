<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller {

	public function __construct(){
	   parent ::__construct();
    	$this->load->model('Contact_us_model');
		$this->load->model('Services_model');

	 }
	
    public function get_quote(){
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
        $title = "logistics-quote";	
		$data['title'] = $title;

		$this->load->view('header', $data);
		$this->load->view('quote/quote_view');
	    $this->load->view('footer', $data);
    }

	public function send_mail(){
        
		$this->load->library('email');
		$this->load->config('info_mail');
        
		$e_mail = $this->input->post('e_mail');
		$phone  = $this->input->post('phone');
		$sdate  = $this->input->post('sdate');
		
		$message = 
            'customer Name : ' . $this->input->post('sname') . '<br>' . 
            "Email : <a href='mailto:$e_mail'>$e_mail</a><br>" .
            "Phone No. : <a href='tel:$phone'>$phone</a><br>" .
			'date : ' . $sdate . '<br>' . 
            'customer  Message : ' . $this->input->post('message') . '<br>';
			
		$this->email->to('quotes@transportarlogistics.com');
		$this->email->from($this->config->item('smtp_user'));
		$this->email->subject($this->input->post('subject'));
		$this->email->message($message);
		
	   if ($this->email->send()) {
				redirect('Quote/success');
		}else{
			redirect('Quote/error');
		}
    }

	public function success(){
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
		$this->load->view('header', $data);
		$this->load->view('quote/quote_success_view');
		$this->load->view('footer');
	}

	public function error(){
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
//		$data['msg']='there has been an error to your quote';
		$this->load->view('header' , $data);
		$this->load->view('quote/quote_error_view');
		$this->load->view('footer');
	}

}