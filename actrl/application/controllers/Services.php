<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Services_model");
    }

    public function index()
    {
        $data["services"] = $this->Services_model->get_all_services();

        $this->load->view("header");
        $this->load->view("services/all_services_view", $data);
        $this->load->view("footer");
    }
    public function insert_service()
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "services";

            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $service_pic = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $service_pic = $data["upload_data"]["file_name"];
            }
            $data = [
                "service_head" => $this->input->post("service_head"),
                "service_status" => $this->input->post("service_status"),
                "service_description" => $this->input->post(
                    "service_description"
                ),
                "service_pic" => $service_pic,
            ];
            $this->db->insert("services", $data);
        } else {
            $data = [
                "service_head" => $this->input->post("service_head"),
                "service_status" => $this->input->post("service_status"),
                "service_description" => $this->input->post(
                    "service_description"
                ),
            ];
            $this->db->insert("services", $data);
        }
        redirect("Services/");
    }

    public function edit_service($service_id)
    {
        $data["services"] = $this->Services_model->get_one_service($service_id);
        $this->load->view("header");
        $this->load->view("services/service_view_edit", $data);
        $this->load->view("footer");
    }

    public function update_service($service_id)
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "services";

            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $service_pic = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $service_pic = $data["upload_data"]["file_name"];
            }
            $data = [
                "service_head" => $this->input->post("service_head"),
                "service_status" => $this->input->post("service_status"),
                "service_description" => $this->input->post("service_description"),
                "service_pic" => $service_pic,
            ];
            $this->db->where("service_id", $service_id);
            $this->db->update("services", $data);
        } else {
            $data = [
                "service_head" => $this->input->post("service_head"),
                "service_status" => $this->input->post("service_status"),
                "service_description" => $this->input->post(
                    "service_description"
                ),
            ];
            $this->db->where("service_id", $service_id);
            $this->db->update("services", $data);
        }
        redirect("Services/");
    }

    public function enable_service($service_id)
    {
        $data = [
            "service_status" => "1",
        ];
        $this->db->where("service_id", $service_id);
        $this->db->update("services", $data);

        redirect("Services/");
    }
    public function disable_service($service_id)
    {
        $data = [
            "service_status" => "0",
        ];
        $this->db->where("service_id", $service_id);
        $this->db->update("services", $data);

        redirect("Services/");
    }
    private function set_upload_options($path_folder)
    {
        //upload an image options
        $config = [];
        $config["upload_path"] = "././assets/images/" . $path_folder . "/";
        $config["allowed_types"] = "gif|jpg|png|jpeg|bmp";
        $config["max_size"] = "0";
        $config["overwrite"] = false;

        return $config;
    }
}
