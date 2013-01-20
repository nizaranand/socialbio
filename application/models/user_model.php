<?php
Class User_model extends CI_Model{
    
    function validate(){
        
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        
        $query = $this->db->get('user');
        
        //print_r($query->result());
        //exit();
        
        if($query->num_rows == 1){
            return $query->result();
        }
    }
    
    function create_member(){
        
        $birth =  $this->input->post('birth_year').'-'.$this->input->post('birth_month').'-'.$this->input->post('birth_day');
        
        $new_member_insert_data = array(
            
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'birth_date'=>$birth,
            'gender'=>$this->input->post('gender')
        );
        
        $insert = $this->db->insert('user',$new_member_insert_data);
        
        return $insert;
    }
}

?>
