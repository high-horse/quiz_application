<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller{
    public function __construct(){
        parent:: __construct(); 
        $this->load->model('Admin_model');
    }
    public function index(){
        if ($this->session->userdata('username') == true){
           redirect('Admin_controller/dashboard');
        }
        else{
            $this->load->view('all_views/admin_view');
        }
    }

    public function dashboard(){
        if ($this->session->userdata('username') == true){
            $this->load->view('all_views/admin_dashboard');
        }
        else {
            redirect('user_controller/index');
        }
    }

    public function signin(){    
        if ($this->session->userdata('username') == true){
                // redirect('user_controller/index');
                redirect('admin_controller/dashboard');
        }
        else{
            $test = $this->Admin_model->signin();
    
            if($test){
                redirect('admin_controller/dashboard');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Invalid username or password');
                // redirect('admin_controller/index');
                $this->index();
            }  

        }
  
    }

    public function fetch_all_data(){
        header('Content-Type: application/json');
        if ($this->session->userdata('username') == true){
            
            $data = $this->Admin_model->fetch();
            // var_dump($data);
            // echo $data;
            // $data['status'] = "success";
            echo json_encode($data);
        }
        else{

            redirect('user_controller/index');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->index();
    }
}
?>