<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Superadmin_model','Superadmin');
        $this->load->model('ServiceModel');
        $this->load->model('CompanyModel');
        // $this->load->model('PartnerModel');
        // $this->load->model('FranchiseModel');
        $this->load->model('EmployeeModel');
        $this->load->model('Permission');
        $this->load->model('UserRoleModel');
        $this->load->model('UserMode');
        // $this->load->model('Subscriber_model');
    }
    public function index()
    {
        $data['roles']=$this->UserRoleModel->getAllUserRole();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/roles',$data);
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function addRole(){
        $data=array("name"=>$this->input->post('roleName'));  
        $url=$this->input->post('url');
        $this->load->model('UserRoleModel');
        $res=$this->UserRoleModel->insertRole($data);
        if($res)
        {
            $this->session->set_flashdata('msg','Role Added Successfully.');
            redirect($url);
            // die(json_encode(array("code"=>1,"data"=>"Role Added Successfully.")));
        }
        else
        {
            $this->session->set_flashdata('msg','Failed to add.');
            redirect($url);
            // die(json_encode(array("code"=>0,"data"=>"")));
        } 
    }
 
}
?>