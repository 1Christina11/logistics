
<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Services_model extends CI_Model
{
    function __construct()
    {
        parent::__construct(); // construct the Model class
    }

    public function get_all_services()
    {
        $query = $this->db->get("services");
        return $query->result();
    }
    public function get_one_service($service_id)
    {
        $this->db->where("service_id", $service_id);
        $query = $this->db->get("services");
        return $query->row();
    }

    //public function insert_service_data($data)
    //{
    //    $this->db->insert('services', $data);
    //}
    //public function service_edit_row($data)
    //{
    //    $this->db->insert('edit_row', $data);
    //
    //}
}
?>
     