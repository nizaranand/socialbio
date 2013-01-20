<?php
    
        class Logout extends CI_Controller{
            
            
            function index(){
                
                $this->session->sess_destroy();
                
                $data['main_content'] = 'login';
                    
                $this->load->view('includes/template',$data);
            }
        }
?>
