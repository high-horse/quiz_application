<?php
class Admin_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function signin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->db->select('*');
        $this->db->from('admin-table');
        $this->db->where('username',$username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        // var_dump($query->num_rows());
        if($query->num_rows() > 0){
            // echo "verified";
            $this->session->set_userdata('username', $username);
            return true;
        }
        else return false;
        
    }
    public function fetch(){
        // $this->db->select("*");
        // $this->db->from("students");
        // $query = $this->db->get();
        // return( $query->result());
        $query = $this->db->get('students');
        return $query->result_array();
    }

}
?>