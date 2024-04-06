<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('About_us_model');		
	    $this->load->model('Contact_us_model');
		$this->load->model('Services_model');

    } 

	
	public function index(){

	   $data['about'] =    $this->About_us_model->get_one_about_us();
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
		$data['services'] = $this->Services_model->get_all_services();
       

		
		$this->load->view('header', $data);
		$this->load->view('about_us/about_us_view', $data);
	    $this->load->view('footer', $data);
	
	
	
	}
	
	
}?>