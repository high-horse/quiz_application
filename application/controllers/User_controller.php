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
            $this->form_validation->set_rules('email', 'Email', 'required');

            $this->form_validation->set_rules(
                'email', 'Email',
                'required|is_unique[students.email]',
                array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                )
            );
            //from https://www.codeigniter.com/user_guide/libraries/form_validation.html#callbacks-your-own-validation-methods
            // $name = $this->input->get('name');
            // $email = $this->input->get('email');
            // echo $name, $email;
            // if($name != "" && $email != ""){
            //     $this->session->set_userdata('name', $name);
            //     $this->session->set_userdata('email', $email);
            //     redirect('Quiz_controller/index');
            // }
            // else{
            //     $this->index();
            // }
    
            if ($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('email_error', 'This email already exists.');
                $this->index();
            }
            else
            {
                $this->session->set_flashdata('email_error', "");
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
        $this->output->set_output('<script>window.localStorage.clear();</script>');
        $this->index();
    }
}
?>