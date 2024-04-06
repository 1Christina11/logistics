<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Michael extends CI_Controller {

    

  function __construct()
  {
    parent::__construct();
//    $this->load->model('Notifications_model');
  }
    
	public function index(){
//        $data['provinces'] = $this->Notifications_model->get_provinces();
        
 		$this->load->view('header');
 		$this->load->view('photo_gallery');
 		$this->load->view('footer');
        
        
//        $sessdata=array(
//            'user_id'=>'100',
//            'user_name'=>'7anafia',
//            'email'=>'7anafia@gmail.com',
//        );
//        //// set session data
//        $this->session->set_userdata($sessdata);
//        
//        
//        ////////// get/return/hat session data of one element
//        echo 'user_id = '. $this->session->userdata('user_id') . '<br>';
//        echo 'user_name = '. $this->session->userdata('user_name') . '<br>';
//        echo 'email = '. $this->session->userdata('email');
//
        
	}
    
    
    private function set_upload_options($path_folder)
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = '././assets/images/' . $path_folder . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }    
    
    public function upload_one_photo(){
        
        if ($_FILES['userfiles']['name'] != "") {
        
            $path_folder = 'photo_gallery';
            
            $this->upload->initialize($this->set_upload_options($path_folder));

			if (!$this->upload->do_upload('userfiles')) {
				$photo = $this->upload->display_errors();
			}else{
				$data = array('upload_data' => $this->upload->data());
				$photo = $data['upload_data']['file_name'];
                
                $data =array(
                    'photo'=>$photo,
                );
                $this->db->where('id', 1);
                $this->db->update('burger', $data);
                
			}
        }else{}
        
    }
        
    
    
    	public function verify_user($RoleName)
	{
    	$this->db->where('UserID',$this->session->userdata('UserID'));
    	$this->db->where('RoleName',$RoleName);
    	$this->db->where('Allowed','on');
    	$query=$this->db->get('system_users_roles');
        
    	if($query->num_rows()==1){
        	return true;
    	}else{
        	return false;
    	}
	}
	
	public function verify_session()
	{
		if($this->session->userdata('UserID') !== false && $this->session->userdata('GroupID') !== false)
		{
			return true;
		}else{
			return false;
		}
	}
	
	

    public function upload_multible_photos(){
        $created_at = date('Y-m-d H:i:s a', time());
        
        $path_folder = 'photo_gallery';
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++)
        {           
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options($path_folder));
            $this->upload->do_upload('userfile');
            $dataInfo[] = $this->upload->data();
            
            $gallery_photo = $dataInfo[$i]['file_name'];
            
            $data = array(
                'photo' => $gallery_photo, 
                'ph_title' => $this->input->post('ph_title'), 
                'video_url' => $this->input->post('video_url'), 
                'created_at' => $created_at, 
                'status' => 'pending'
            );
            $this->db->insert('gallery',$data);
            
        }
        
        redirect('photo_gallery/get_photo_gallery');
    }
        
        
        
    public function sign_up(){
//        echo SHA1($text) . '<br>';
//        echo SHA1(substr($text,0,2) . 'ro');
//        echo SHA1($text . 'maro' . 'kiro');
        
        $data = array(
            'user_name' => $this->input->post('user_name'), 
            'password' => SHA1($this->input->post('password')), 
        );
        $this->db->insert('users',$data);
            
        $user_id = $this->db->insert_id();
        
        $data =array(
            'authentication_code'=>SHA1($this->input->post('user_name') . $user_id),
        );
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
        
        
        
    }
    
    public function send_e_mail(){
        
        $this->load->library('Email');
        $this->load->config('email_orders');
        
        $from = $this->config->item('smtp_user');
        $to = 'client_email';
        $subject = "email subject goes here";
        $message = '';
        
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
		
        if ($this->email->send()) {
            
        }else{
            
        }
    }
        
    
    
    
    public function set_session(){
        
        $sesdata=array(
            'user_id'=>'5',
            'user_email'=>'michaelmagdyyy@gmail.com',
            'user_name'=>'Michael',
                    );
        $this->session->set_userdata($sesdata);
        
    }
    
    
    
     public function get_session(){
         
         if($this->Users_model->verify_session()){
             ///// execute the function
            echo $this->session->userdata('user_email');
             
         }else{
            //// redirect to login
         }
         
    }
   
    
	public function verify_session()
	{
		if($this->session->userdata('user_id') !== false && $this->session->userdata('user_name') !== false)
		{
			return true;
		}else{
			return false;
		}
	}
    
    
    
}