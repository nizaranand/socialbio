<?php

class Login extends CI_Controller {
    
    public function index()
	{       
                $data['main_content'] = 'login';
                
                $this->load->view('includes/template',$data);
	}
        
   function validate_credentials(){
       
       $this->load->model('user_model');
       $result = $this->user_model->validate();
       
     
                
       if($result){
           
           $data = array('email'=>$this->input->post('email'),
                         'is_logged_in'=>true,
                         'first_name'=>$result[0]->first_name,
                         'last_name'=>$result[0]->last_name,
                         'gender'=>$result[0]->gender,
                         'birth_date'=>$result[0]->birth_date
                      );
           
           $this->session->set_userdata($data);
           redirect('profile');
       }
       else{
           
           $this->index();
       }
   }     
}
?>
