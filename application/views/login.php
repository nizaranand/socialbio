<div id="wrapper" class ="container_24">
                    
                    <!--Display Cover Pic Here-->
                    <div class="login-page grid_18 prefix_3 suffix_3">
                    
                        <div class="login-form-container">
                            <div class="login-form">
                                <h2>SocialBio Login</h2>
                                <?php 
                                    echo form_open('login/validate_credentials');
                                    echo form_input('email', 'Email Address');
                                    echo form_password('password','Password');
                                    echo form_submit('submit','Login');
                                    echo anchor('signup','Create an Account'); 
                                ?>
                                
                                
                            </div>
                        </div>
                        
                    </div>   
        </div>    
        

