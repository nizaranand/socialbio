<?php

    class Profile extends CI_Controller{
        
        function __construct(){            
            
            parent::__construct();
            $this->is_logged_in();
        }
        
         function index(){
            
            $data['main_content'] = 'profile';
            $this->load->view('includes/template',$data);
        }
        
        function is_logged_in()
        {
            $is_logged_in = $this->session->userdata('is_logged_in');
                    
            if(!isset($is_logged_in) || $is_logged_in!=true){
                echo "<h3>You don't have permission to access this page.</h3>";
                die;
            }
        }
    }

?>
