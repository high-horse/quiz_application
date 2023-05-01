<?php
class Quiz_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function get_data($id){
        // $id;
        // echo $id;
        // var_dump ($id);

        // $this->db->select('t2.*');
        // $this->db->from('quiz_question t1');
        // $this->db->join('quiz_option t2', 't1.id = t2.q_id', 'inner');
        // $this->db->where('t1.id', $id);
        // $query = $this->db->get();
        // $result = $query->result();
        // return $result;
        
        $this->db->select('t1.question, t2.*');
        $this->db->from('quiz_question t1');
        $this->db->join('quiz_option t2', 't1.id = t2.q_id', 'inner');
        $this->db->where('t1.id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;

    }

    public function set_result(){
        $obj = array(
            'name' => $this->session->userdata('name'),
            'email' => $this->session->userdata('email'),
            'total_question' => $this->input->post('total_quiz'),
            'attempted_question' => $this->input->post('attempted_questions'),
            'correct_question' => $this->input->post('correct_questions'),
            'time_taken' => $this->input->post('time_taken'),
        );
        $query = $this->db->insert('students', $obj);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
}
?>