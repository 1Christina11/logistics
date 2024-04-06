<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class APIs extends CI_Controller 
 {

    public function __Construct()
    {

        parent::__Construct();
        $this->load->model('Users_model');
        $this->load->model('Groups_model');
        $this->load->model('Permission_model');

    }
     
    public function get_one_user($id){
        $data['users'] = $this->Users_model->get_one_user($id);
        
        echo json_encode($data['users']);
    }
	 
    public function get_user(){
        $data['user'] = $this->Users_model->get_user();
        
        echo json_encode($data['user']);
    }
	 
     
    public function save_attendance($qr_code, $date_time, $activity){
        
        $created_at = date('Y-m-d H:i:s a', time());
        
        $data = array(
            'member_id' => $gallery_photo, 
            'attendance_date_time' => $date_time, 
            'activity_id' => $activity, 
            'created_at' => $created_at, 
        );
        $this->db->insert('attendance',$data);
        
    }

 }?>