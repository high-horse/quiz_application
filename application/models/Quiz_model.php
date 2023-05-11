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
        if($query->num_rows() > 0){
            return $result;
        }
        else{
            return false;
        }
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
        $insert_id = $this->db->insert_id();
        if($insert_id > 0){
            return $insert_id;
        }
        else{
            return false;
        }
    }

    public function save_preview($id){
        $q_ids = $this->input->post('q_ids'); // example array for q_ids
        $answers = $this->input->post('answers_selected');// example array for answers
        $time = $this->input->post('timer_array'); // example array for times

        $data = array();
        foreach ($q_ids as $index => $q_id) {
            $data[] = array(
                'test_id' => $id,
                'q_id' => $q_ids[$index],
                'ans' => $answers[$index],
                'time' => $time[$index]
            );
        }

        $this->db->insert_batch('preview', $data);
        $insert_count = count($data);
        if($insert_count > 0){
            return($insert_count);
        }
        else{
            return false;
        }
    }
}
?>