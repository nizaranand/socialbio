<?php 
                $first_name = $this->session->userdata('first_name'); 
                $last_name = $this->session->userdata('last_name'); 
                $name = ucfirst($first_name) ." ".ucfirst($last_name);
                $gender = $this->session->userdata('gender');
                

?>

<div class="timeline-page">
<div id="wrapper" class ="container_24">
                    
                    <!--Display Cover Pic Here-->
                    <div class="main grid_21">
                        
                        <div class="cover-pic">
<!--                            <div class="message row">
                           <div class="column grid_8">
                                <h3>Welcome to your timeline !!!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum porta magna, in porta turpis mattis imperdiet. Nunc porttitor mauris eu erat posuere scelerisque at vel nulla. Etiam eget leo leo, eu pharetra lacus. Pellentesque pretium aliquet lorem id convallis. Praesent id lobortis risus. Quisque sed lacus odio. Etiam ac sapien a turpis ultrices dictum non eget justo. </p>
                            </div>
                            <div class="options column grid_2">
                                
                            </div>
                        </div>-->
                        
                        <img src="<?php echo base_url(); ?>img/cover.jpg" class="cover"/>
                        
                        <div class="profile-pic-container">
                                 <img src="<?php echo base_url(); ?>img/user.jpg" class="profile-pic"/>
                        </div>
                        
                        </div>
                        
                       
                        
                     <!--Display Profile Block Here--> 
                     <div class="short-profile">
                         
                         <div class="row_1">
                             
                             <div class="user_name">
                                 <h2><?php echo $name ?></h2>
                             </div>
                             
                             <div class="short-profile_top_right_links">
                                 <a href="#">Update Info</a> | <a href="#">View Activity</a>
                             </div>
                         </div>    
                 
                         <div class="row_2">
                             
                             <div class="friends">
                                 <img src="<?php echo base_url(); ?>img/user.jpg" class="thumb"/>
                                 <a href="#">Friends</a> 400
                             </div>
                             
                             <div class="short_bio">
                                 <span>Software Developer at </span><a href="#">Tata Consultancy Services</a><br/>
                                 <span>In a relationship with </span><a href="#">Somebody</a><br/>
                                 <span>Born on July 23 1987 </span><br/> 
                                 <span>From </span><a href="#">Mungeli</a>
                             </div>
                             
                             
                             <div class="photos">
                                 <img src="<?php echo base_url(); ?>img/user.jpg" class="thumb"/>
                                 <a href="#">Photos</a> 40
                             </div>
                             
                             <div class="map">
                                 <img src="<?php echo base_url(); ?>img/user.jpg" class="thumb"/>
                                 <a href="#">Map</a> 900
                             </div>
                             
                             <div class="likes">
                                 <img src="<?php echo base_url(); ?>img/user.jpg" class="thumb"/>
                                 <a href="#">Likes</a> 900
                             </div>
                         </div>   
                       </div>
                     
                     <div class="timeline">
                         
                         <div class="left">
                             <div class="share white">
                                 <ul class="share-options">
                                     <li>
                                         <a href="#status">Status</a>
                                     </li>
                                     <li>
                                         <a href="#photo">Photo</a>
                                     </li>
                                     <li>
                                         <a href="#place">Place</a>
                                     </li>
                                     <li>
                                         <a href="#event">Life Event</a>
                                     </li>
                                 </ul>
                                 <br/>
                                 <div id="status">
                                     <form>
                                         <textarea name="status" placeholder="What's happening, Vipin"></textarea>
                                         <input type="submit" value="Share"/>
                                     </form>
                                 </div>
                             </div>
                             
                             <div class ="white activity-block">
                                 <div class="extra-padding"> 
                                 <div class="block-top">
                                     <div class="small-user-pic">
                                         <img src="<?php echo base_url(); ?>img/small.jpg"/>
                                     </div>
                                     <div class="name-and-update-with-time">
                                         <a href="#"><strong>Vipin Dubey </strong></a> updated his <a href="#"><strong>cover photo</strong></a><br/>
                                         January 1
                                     </div>
                                 </div>
                                 
                                 <div class="description">
                                     <span>Android ICS Update for Samsung Glaxy R GTi9103 Released....:)</span>
                                 </div>
                                     
                                  <div class="updated-content">
                                      <img src="<?php echo base_url(); ?>img/large.jpg" class="large"/>
                                  </div>
                                  <div class="related-links">
                                   <ul class="share-options">
                                     <li>
                                         <a href="#status">Like</a>
                                     </li>
                                     <li>
                                         <a href="#photo">Comment</a>
                                     </li>
                                     <li>
                                         <a href="#place">Promote</a>
                                     </li>
                                     <li>
                                         <a href="#event">Share</a>
                                     </li>
                                 </ul>
                                  </div> 
                                  <div class="related-likes">
                                      <div class="clear"></div>
                                      <a href="#">Vipin Dubey</a> & <a href="#">Ankita Singh</a> like this.
                                  </div> 
                                  <div class="comment">
                                      <div class="small-user-pic">
                                         <img src="<?php echo base_url(); ?>img/small.jpg"/>
                                     </div>
                                      <div class="comment-form">
                                          <input type="text" size="40" name="comment" placeholder="Write a comment"/>
                                      </div>
                                  </div> 
                                </div>
                                 
                             </div>     
                         </div>
                         
                         
                         
                         <div class="right">
                             
                             <div class="white timeline-activity">
                                 <div class="header">
                                     <span><strong>Activity</strong></span>
                                     
                                 </div>
                             </div>
                             
                             <div class="white timeline-photos">
                                 <div class="header">
                                     <span><strong>Friends</strong></span>
                                     <span class="more"><a href="#">See All</a></span>
                                 </div>
                             </div>
                             
                             <div class=" white timeline-friends">
                                 <div class="header">
                                     <span><strong>Photos</strong></span>
                                     <span class="more"><a href="#">See All</a></span>
                                 </div>
                             </div>
                             
                         </div>
                         
                         <div class="middle seperator">
                             
                         </div>
                         
                         
                         
                     </div>
                    </div>     
                    
                    <div class="right_sidebar grid_3">
                                 <ul class="nav-timeline">
                                    <li>
                                        <a href="#Now">Now</a>
                                        <a href="#2012">2012</a>
                                        <a href="#2011">2011</a>
                                        <a href="#2010">2010</a>
                                        <a href="#2009">2009</a>
                                        
                                  </li>
                                </ul>
                    </div>
            </div>
        </div>    
</div>
        
