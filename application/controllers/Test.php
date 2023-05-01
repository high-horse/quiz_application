<?php
class Test extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Quiz_model');
        header("Access-Control-Allow-Origin: *");

    }

   
    public function index(){
        // $this->load->view('localstorage/localstorage_quiz');

    }

    public function lol(){
        // $this->load->view('localstorage/test');

    }

    public function test_method(){
        $this->session->set_userdata('logged_in', true);
        $this->load->view('localstorage/test');
                

    }
}

?>