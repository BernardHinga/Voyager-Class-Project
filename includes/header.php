<!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i>Ngong Rd, Nairobi, Kenya
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +254 020 666 699
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>

                        </div>
                        <!-- Welcome Message -->
                    <div class="welcome-message">
                        <?php   if(strlen($_SESSION['login'])==0)
    {   
?>
<div><p> Hello </p> </div>
<?php }
else{ 

echo "Welcome";
 } ?>
                    </div>
                    <!-- End of Welcome Message --> 
                    </div>
                    
                    <!--== Social Icons End ==-->
                   
                </div>
            </div>
        </div>
        
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="home.html" class="logo">
                            <img src="img/logo.png" alt="Voyager">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="#">Services</a>
                                   <ul>
                                       <li><a href="services.html">car hire</a></li>
                                       <li><a href ="#">Car Repair</a></li>
                                       <li> <a href="driver.html">Driver hire</a> </li>
                                   </ul>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.php">All Cars</a></li>
                                        <li><a href="#">SUV</a></li>
                                        <li><a href="#">Sedan</a></li>
                                        <li><a href="#">Minivan</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">More</a>
                                    <ul>
                                        <li><a href="articledetails.html">Articles</a></li>
                                        <li><a href="faq.html">Help?</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                            <li><?php   if(strlen($_SESSION['login'])==0)
                                {   
                                         ?>
                                            <a href= "login.php"> Login/Registration</a> 
                             </li> 
                             <li>              
                                    <?php }

                                    else{  
                                   
                                   $email=$_SESSION['login'];
                                   $sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
                                   $query= $dbh -> prepare($sql);
                                   $query-> bindParam(':email', $email, PDO::PARAM_STR);
                                   $query-> execute();
                                   $results=$query->fetchAll(PDO::FETCH_OBJ);
                              if($query->rowCount() > 0)
                                    {
                                foreach($results as $result)
                                    {
                                        ?>
                                    <a href="#"> 
                                    <?php   

                                echo htmlentities($result->FullName); }}?>
                            </a>

                                 <ul>
                                    <li><a href="profile.php">Profile Settings</a></li>
                                     <li><a href="update-password.php">Update Password</a></li>
                                    <li><a href="my-booking.php">My Booking</a></li>
                                    <li><a href="post-testimonial.php">Post a Testimonial</a></li>
                                    <li><a href="my-testimonials.php">My Testimonial</a></li>
                                    <li><a href="logout.php">Sign Out</a></li>
                                </ul>
                              <?php      
                             } ?></li>
                           
                                    
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
  
 

  
</header>