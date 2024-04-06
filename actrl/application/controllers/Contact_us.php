<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Contact_us_model');
	 }
	
	

		public function insert_contact(){
			
			        $data=array(
            'contact_us_id'=>'1',
            'e_mail'=>'koky@gmail.com',
            'address'=>'egypt',
            'tele_num'=>'0155554521',
            'facebook_link'=>'httphlprlplr',
            'twitter_link'=>'dkljkjkrjleelle',
            'linkedin_link'=>'madrijhdkld;djz@gmail.com',
            'instagram_link'=>'kdjmajldhriz@djklgmdkail.eduhcom',
						
						
						
        );
     
			$this->db->insert('contact_us',$data);
//	      redirect('Contact_us/edit_contact_us');
		}

    public function edit_contact_us()
    {

        $data['contact'] = $this->Contact_us_model->get_one_contact();
		
		$this->load->view('header');
        $this->load->view('Contact_us/contact_us_insert_view',$data);
	    $this->load->view('footer');

    }
	
//	public function add_one_row()
//	{
//		
//		$this->db->fill('contact_us',$data);
//		$this->db->insert('contact_us',$data);
	
//	}

	
	
    public function update_contact_us()
    {
      $data = array(
        'address' => $this->input->post('address'),
        'e_mail'=> $this->input->post('e_mail'),
        'tele_num'=> $this->input->post('tele_num'),
		'facebook_link' => $this->input->post('facebook_link'),
		'twitter_link' => $this->input->post('twitter_link'),
		'linkedin_link' => $this->input->post('linkedin_link'),
		'instagram_link' => $this->input->post('instagram_link'),
      );

			$this->db->where( 'contact_us_id',1);
			$this->db->update('contact_us', $data);
		
	      redirect('Contact_us/edit_contact_us');
    }

}
