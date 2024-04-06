<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Home extends CI_Controller 
 {

    public function __Construct()
    {
        parent::__Construct();
        //$this->load->model('Users_model');
    }
     
    public function index(){
        
        $this->load->view('header');
        $this->load->view('footer');
        
    }
	 				public function delete_all(){
	

		$this->db->empty_table('contact_us');
		$this->load->view('contact_us/contact_us_view');
	}
     

 }?>