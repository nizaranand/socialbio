<?php

class Signup extends CI_Controller {
    
    public function index()
	{       
              $data['main_content'] = 'signup';
              
              $this->load->view('includes/template',$data);
	}
        
    function create_account(){
        
        $this->load->library('form_validation');
        // field name, error message, validation rules
        
        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('re_email','Confirm Email','trim|required|matches[email]');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('birth_month','Birth Month','trim|required');
        $this->form_validation->set_rules('birth_year','Birth Year','trim|required');
        $this->form_validation->set_rules('birth_day','Birth Day','trim|required');
         $this->form_validation->set_rules('gender','Gender','trim|required');
         
         if($this->form_validation->run()== FALSE){
             
             $this->index();
         }
         else{
             
             $this->load->model('user_model');
             
             if($query = $this->user_model->create_member()){
                 
                 $data['main_content']= 'signup_successful';
                 $this->load->view('includes/template',$data);
             }else{
                 
               $this->index();
             }
         }
    }    
}
?>