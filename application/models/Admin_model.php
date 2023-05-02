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

    public function preview($test_id){
        // $test_id = 1;
        // $stmt = $pdo->prepare("SELECT st.name, ques.question, opt.option, pre.ans, pre.time 
        //                     FROM preview AS pre 
        //                     JOIN students AS st ON pre.test_id = st.sn 
        //                     JOIN quiz_question AS ques ON pre.q_id = ques.id 
        //                     JOIN quiz_option AS opt ON ques.id = opt.q_id 
        //                     WHERE opt.answer = 1 AND pre.test_id = ?");
        // $stmt->execute([$test_id]);
        // $results = $stmt->fetchAll();
        // return $results->result();
    

    $this->db->select('st.name, ques.question, opt.option, pre.ans, pre.time');
    $this->db->from('preview AS pre');
    $this->db->join('students AS st', 'pre.test_id = st.sn');
    $this->db->join('quiz_question AS ques', 'pre.q_id = ques.id');
    $this->db->join('quiz_option AS opt', 'ques.id = opt.q_id');
    $this->db->where('opt.answer', 1);
    $this->db->where('pre.test_id', $test_id);
    $query = $this->db->get();
    return $query->result();
    }
}
?>