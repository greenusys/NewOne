<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Superadmin_model','Superadmin');
        $this->load->model('ServiceModel');
        $this->load->model('CompanyModel');
        $this->load->model('EmployeeModel');
        $this->load->model('Permission');
        $this->load->model('UserRoleModel');
        $this->load->model('UserMode');
    }
    public function index()
    {
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/index');
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function createCompany()
    {
        $data['permissions']=$this->db->get('permissions')->result();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/createCompany',$data);
        $this->load->view('template/footer');
    }
    public function showCompany()
    {
        $data['companyList']=$this->db->get('companyList')->result();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/showCompany',$data);
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function createAdmin()
    {
        $data['company']=$this->db->get('companyList')->result();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/createAdmin',$data);
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function viewPermission()
    {      
        $data['rights']=$this->Permission->getAllPermission();
        $data['roles']=$this->UserRoleModel->getAllUserRole();
        // print_r($data['roles']);
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/viewPermission',$data);
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function showAdmin()
    {
        $data['admintable']=$this->db->get('admintable')->result();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/showAdmin',$data);
        $this->load->view('template/footer');
    }
    public function addCompany()
    {
        if($this->input->post('password')==$this->input->post('confirm_password'))
        {
            $perm=$this->input->post('permission');
            $permission=implode(',',$perm);
            $data= array( "comp_name" =>$this->input->post('companyname'),"user_name" =>$this->input->post('username'),"password" =>$this->input->post('password') ,"comp_email" => $this->input->post('email'),"GSTN" => $this->input->post('gstnname'),"PAN" => $this->input->post('pannumber'),"comp_install" => $this->input->post('install_address'),"comp_billing" => $this->input->post('bill_address'),"comp_permanent" => $this->input->post('permanent_address'),"contactNo1" => $this->input->post('contactno1'),"contact_person1" => $this->input->post('contactperson1'),"contactNo2" => $this->input->post('contactno2'),"contact_person2" => $this->input->post('contactperson2'),"contactNo3" => $this->input->post('contactno3'),"contact_person3" => $this->input->post('contactperson3'));
            if($this->Superadmin->insertCompany($data))
            {
                $this->session->set_flashdata('msg','Added Successfully..');
                redirect(base_url('index.php/Superadmin/createCompany'));
            }
            else
            {
                $this->session->set_flashdata('msg','Error Occured');
                redirect(base_url('index.php/Superadmin/createCompany'));
            }
        }
        else
        {
            $this->session->set_flashdata('msg','Password and Confirm Password mismatched');
            redirect(base_url('index.php/Superadmin/createCompany'));
        }
    }
    public function addAdmin()
    {
        // print_r($_POST);
        $company=$this->input->post('company');
        $companyid=implode(',',$company);
        $username=$this->input->post('username');
        $data= array( "name" =>$this->input->post('adminname'),"email" =>$this->input->post('email'),"Alt_email" =>$this->input->post('altemail'),"pass" =>$this->input->post('password') ,"comp_id"=>$companyid,"install_address" =>$this->input->post('install_add'),"corres_address" =>$this->input->post('corres_add'),"contact_no1" =>$this->input->post('cont_no1'),"contact_no2" =>$this->input->post('cont_no2'),"contact_person1" =>$this->input->post('cont_person1'),"contact_person2" =>$this->input->post('cont_person2'),"username"=>$username);
        if($this->Superadmin->insertAdmin($data))
        {
            $this->session->set_flashdata('msg','Added Successfully..');
            redirect(base_url('index.php/Superadmin/createAdmin'));
        }
        else
        {
            $this->session->set_flashdata('msg','Error Occured');
            redirect(base_url('index.php/Superadmin/createAdmin'));
        }
    }
    public function showUser()
    {  
        // $data['users']=$this->UserMode->fetchAllUser();
        $config = array();
        $config["base_url"] = base_url() . "index.php/SuperAdmin/showUser";
        $config["total_rows"] = $this->UserMode->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['users'] = $this->UserMode->get_subscriber($config["per_page"], $page);
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/userList',$data);
        $this->load->view('template/footer');
    }
    public function active()
    {
        $data= array("id" =>$this->input->post('id'));
        $status=array( "status" =>1);
        if($this->Superadmin->updateCompany($data,$status))
        {
            die(json_encode(array("code"=>1)));
        }
        else
        {
            die(json_encode(array("code"=>0)));
        }
    }
     public function deactive()
    {
        $data= array("id" =>$this->input->post('id'));
        $status=array( "status" =>0);
        if($this->Superadmin->updateCompany($data,$status))
        {
            die(json_encode(array("code"=>1)));
        }
        else
        {
            die(json_encode(array("code"=>0)));
        }
    }
    public function addUserSection()
    {
        $data['services']=$this->ServiceModel->getAllServices();
        $data['employees']=$this->EmployeeModel->getAllEmployees();
        $data['companies']=$this->CompanyModel->getAllCompany();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/createUser',$data);
        $this->load->view('SuperAdmin/Template/setting_bar');
    }   
    public function showRoles()
    {
        $data['roles']=$this->UserRoleModel->getAllUserRole();
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/roles',$data);
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function adViewRoles(){}
    public function removeadmin(){
        print_r($_POST);
    }
}
?>