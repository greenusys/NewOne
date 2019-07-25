<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
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
        $this->load->view('SuperAdmin/Template/header');
        $this->load->view('SuperAdmin/Home/index');
        $this->load->view('SuperAdmin/Template/setting_bar');
    }
    public function addUser(){
        $url=$_POST['url'];
        $name = $_POST['username'];
        $address=$this->input->post('building_name'). ' ' .$this->input->post('location_name').' '.$this->input->post('area_name');
        $query = $this->db->get_where('users', array('user_name' => $name));
        $count = $query->num_rows();
        if ($count === 0)
        {
            $data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'user_name' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'fake_pssword' => $this->input->post('portal_password'),
                    'company_name' => $this->input->post('company_name'),
                    'user_type' => $this->input->post('service_type'),
                    'mobile' => $this->input->post('mobile'),
                    'phone' => $this->input->post('alternate_mobile'),
                    'email' => $this->input->post('email'),
                    'address'=>$address,
                    'billing_address' => $this->input->post('bill_address'),
                    'next_renewal_service'=> $this->input->post('next_renewal'),
                    'service_id'=> $this->input->post('service_new'),
                    'manager_id'=> $this->input->post('manager'),
                    'idle_timeout'=> $this->input->post('idle_timeout'),
                    'simultaneous_use'=> $this->input->post('simult'),
                    'start_date'=> $this->input->post('start_date'),
                    'end_date'=> $this->input->post('end_date'),
                    'due_date'=> $this->input->post('due_date')
                    );
            $service=$this->input->post('service_new');
            $ssql = $this->db->get_where('services', array('service_id' => $service));
            foreach($ssql->result_array() as $row){
            $service_name=$row['service_name'];            }
            $end_date=$this->input->post('end_date');
            date_default_timezone_set('Asia/Kolkata');
            $end_dates=date('M d Y  h:i:s', strtotime($end_date));
            $newdata=array('username' =>$name ,
                            'groupname'=>$service_name,
                            'priority'=>"1"
                                 );
            $radcheck=array('username'=>$name,
                            'attribute'=>"Expiration",
                            'op'=>"==",
                            'value'=>$end_dates
                        );
            $radcheck1=array('username'=>$name,
                'attribute'=>"Simultaneous-Use",
                'op'=>":=",
                'value'=>$this->input->post('simult')
            );
            $radcheck2=array('username'=>$name,
                'attribute'=>"User-Password",
                'op'=>":=",
                'value'=>$this->input->post('password')
            );
            $radcheck3=array('username'=>$name,
                'attribute'=>"Idle-Timeout",
                'op'=>":=",
                'value'=>$this->input->post('idle_timeout')
            );

            // $radcheck4=array('username'=>$name,
            //  'attribute'=>"Calling-Station-Id",
            //  'op'=>":==",
            //  'value'=>"123"
            // );
            $newrad=array('username'=>$name,
                'attribute'=>"Framed-IP-Address",
                'op'=>":=",
                'value'=>$this->input->post('wanIp')
            );
            
            // $this->Subscriber_model->form_insert($data,$newdata,$radcheck,$radcheck1,$radcheck2,$radcheck3,$radcheck4,$newrad);
            if($this->UserMode->form_insert($data,$newdata,$radcheck,$radcheck1,$radcheck2,$radcheck3,$newrad)){
                $this->session->set_flashdata('msg',"User Added Successfully..");
                redirect($url);
            }
            else
            {
                $this->session->set_flashdata('msg',"failed To add");
                redirect($url);
            }
        }
        else
        {
            $this->session->set_flashdata('msg',"User Already Exists");
                redirect($url);
        }
    }
    
}
?>