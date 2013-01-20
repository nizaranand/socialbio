<?php 
                $first_name = $this->session->userdata('first_name'); 
                $last_name = $this->session->userdata('last_name'); 
                $name = ucfirst($first_name) ." ".ucfirst($last_name);
                

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/socialbio/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/960_24_col.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
        <script src="<?php echo base_url();?>js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="outer-wrapper">
            <div class="top-bar">
                <div class="container_24">
                <div class="left  grid_4">
                    <a class="site-title" href="#">SocialBio</a>
                </div>
                <div class="middle  grid_12">
                    <form>
                        <input type="text" placeholder="search" value=""/>
                        <input type="submit" value="Go"/>
                    </form>
                </div>
                <div class="right grid_8">
                    <ul class="top-right-nav">
                        <?php 
                            
                            $is_logged_in = $this->session->userdata('is_logged_in');
                            if(!isset($is_logged_in) || $is_logged_in != true){ 
                        ?>
                            
                            <li><a class="site-title" href="<?php base_url() ?>login">Log in</a></li>
                            
                        <?php }else{ ?>
                            
                            <li><a class="site-title" href="<?php base_url() ?>profile"><?php echo $name ?></a></li>
                            <li><a class="site-title" href="<?php base_url() ?>logout">Log out</a></li>
                            
                            
                        <?php }?>
                        
                    </ul>
                    
                    
                </div>
                </div>    
            </div>

