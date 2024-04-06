<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
  {
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('Services_model');
	    $this->load->model('Contact_us_model');
		$this->load->model('About_us_model');		
  }
	
	public function index()
	{
		$this->load->view('header');
//		$this->load->view('footer');
	}
	
//	home view load
	public function get_home(){
    	$data['services'] = $this->Services_model->get_all_services();
		$data['contact_us'] = $this->Contact_us_model->get_all_contact_us();
	    $data['about'] =    $this->About_us_model->get_one_about_us();
	    $title = "logistics-home";	
		$data['title'] = $title;

        $this->load->view('header', $data);
		$this->load->view('home/home_view' , $data);
	    $this->load->view('footer', $data);	
//	    $this->load->view('full_page');	
	}
				public function delete_all(){
	

		$this->db->empty_table('contact_us');
		$this->load->view('contact_us/contact_us_view');
	}

}