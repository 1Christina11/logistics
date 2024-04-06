<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Home_model extends CI_Model{
			
			public function get_home(){
				
		$this->load->view('header');
		$this->load->view('home/home_view');
	    $this->load->view('footer');
			}
			
			
}?>