<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_controller extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    
    public function index(){
        if($this->session->userdata('name') == ""){
            $this->load->view('all_views/user_view');
        }
        else{
            redirect('Quiz_controller/index');
        }
    }



    public function signin(){
        if($this->session->userdata('name') == ""){
            $this->form_validation->set_rules('name', 'Username', 'required');
            $this->form_validation->set_rules(
                'email', 'Email',
                'required|is_unique[students.email]',
                array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                )
            );
    
            if ($this->form_validation->run() == FALSE)
            {
                $this->index();
            }
            else
            {
                $this->session->set_userdata('name', $this->input->post('name'));
                $this->session->set_userdata('email', $this->input->post('email'));
                redirect('Quiz_controller/index');
            }
        }
        else{
            redirect('Quiz_controller/index');
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