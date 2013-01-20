<div class="signup-page">
<div id="wrapper" class ="container_24">
                    
                    <!--Display Cover Pic Here-->
                    <div class="main grid_18 prefix_3 suffix_3">
                    
                        <div class="signup-form-container">
                            <div class="signup-form"">
                            <h1>Sign up</h1>
                            <h4>It won't be free always !</h4>
                            <?php
                                echo form_open('signup/create_account');
                                echo form_input('first_name',set_value('first_name','First Name'));
                                echo form_input('last_name',set_value('last_name','Last Name'));
                                echo form_input('email',set_value('email','Your Email'));
                                echo form_input('re_email',set_value('re_email','Re-enter Email'));
                                echo form_password('password','New Password'); 
                                    
                                $month[]=array(
                                    '1'=>'January',
                                    '2'=>'Fabruary',
                                    '3'=>'March',
                                    '4'=>'April',
                                    '5'=>'May',
                                    '6'=>'June',
                                    '7'=>'July',
                                    '8'=>'August',
                                    '9'=>'September',
                                    '10'=>'October',
                                    '11'=>'November',
                                    '12'=>'December'
                                );
                                echo form_dropdown('birth_month',$month);
                                $day[] = array(
                                    '1'=>'Mon',
                                    '2'=>'Tue',
                                    '3'=>'Wedn',
                                    '4'=>'Thu',
                                    '5'=>'Fri',
                                    '6'=>'Sa',
                                    '7'=>'Sun'
                                );
                                echo form_dropdown('birth_day',$day);
                                $year[] = array('1980','1981','1982','1983','1984','1985','1986','1987','1988','1989','1990','1991','1992');
                                
                                echo form_dropdown('birth_year',$year);
                                echo "<br/><br/>";
                                echo "Gender : Male ".form_radio('gender', 'Male', TRUE);
                                echo "   Female ".form_radio('gender', 'Female', FALSE);
                                 echo "<br/><br/>";
                                echo form_submit('submit','Create Account');                                                       
                            ?>
                            
                            <?php echo validation_errors('<p class="error">')?>
                            </div>
                        </div>
                        
                    </div>   
        </div> 
</div>
