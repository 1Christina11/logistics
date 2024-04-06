<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('About_us_model');		
	
    } 
		private function set_upload_options($path_folder){   
            //upload an image options
            $config = array();
            $config['upload_path'] = '././assets/images/' . $path_folder . '/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        } 

	
	public function edit_about_us(){

	   $data['about'] =  $this->About_us_model->get_one_about_us();
		
		
		$this->load->view('header');
		$this->load->view('about_us/about_us_edit_view', $data);
	    $this->load->view('footer');
	}
	
		public function update_about_us(){


			if ($_FILES['userfile']['name'] != "") {

				$path_folder = 'about_us';
				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfile')) {
					$photo = $this->upload->display_errors();

				}else{

					$data = array('upload_data' => $this->upload->data());
					$photo = $data['upload_data']['file_name'];

				}

				$data = array(
					'title' =>$this->input->post('title'),
					'paragraph' =>$this->input->post('paragraph'),
					'photo' => $photo, 
							 );

			}else{

				$data = array(
					'title' =>$this->input->post('title'),
					'paragraph' =>$this->input->post('paragraph'),
							 );

			}
			
						
			$this->db->where('about_us_id',1);
			$this->db->update('about_us', $data);
	
	      redirect('About_us/edit_about_us');
		}
       	
}?>