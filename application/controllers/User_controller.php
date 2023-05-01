<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_controller extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

    }
    
    public function index(){
        $this->load->view('all_views/user_view');
    }



    public function signin(){

        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('all_views/user_view');
        }
        else
        {
            // $this->session->set_userdata('status', $this->input->post('name'));
            $this->session->set_userdata('name', $this->input->post('name'));
            $this->session->set_userdata('email', $this->input->post('email'));
                // $this->load->view('Quiz_controller/index');
            redirect('Quiz_controller/index');
            // redirect('test/test_method');
        }
    }

    public function logout(){
        unset(
            $_SESSION['name'],
            $_SESSION['email']
        );
        session_destroy();
        $this->index();
    }
}
?>