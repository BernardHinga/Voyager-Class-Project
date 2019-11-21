<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--=== Favicon ===-->
        <link rel="shortcut icon" href="img/flaticon.png" type="image/x-icon" />
    
        <title>Voyager Car Rental</title>
    
        <!--=== Bootstrap CSS ===-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--=== Animate CSS ===-->
        <link href="css/plugins/animate.css" rel="stylesheet">
        <!--=== Vegas Min CSS ===-->
        <link href="css/plugins/vegas.min.css" rel="stylesheet">
        <!--=== Slicknav CSS ===-->
        <link href="css/plugins/slicknav.min.css" rel="stylesheet">
        <!--=== Magnific Popup CSS ===-->
        <link href="css/plugins/magnific-popup.css" rel="stylesheet">
        <!--=== Owl Carousel CSS ===-->
        <link href="css/plugins/owl.carousel.min.css" rel="stylesheet">
        <!--=== Gijgo CSS ===-->
        <link href="css/plugins/gijgo.css" rel="stylesheet">
        <!--=== FontAwesome CSS ===-->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!--=== Theme Reset CSS ===-->
        <link href="css/reset.css" rel="stylesheet">
        <!--=== Main Style CSS ===-->
        <link href="css/style.css" rel="stylesheet">
        <!--=== Responsive CSS ===-->
        <link href="css/responsive.css" rel="stylesheet">
        
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
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
                                       <li><a href ="repair.html">Car Repair</a></li>
                                       <li> <a href="driver.html">Driver hire</a> </li>
                                   </ul>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.html">All Cars</a></li>
                                        <li><a href="#">SUV</a></li>
                                        <li><a href="#">Sedan</a></li>
                                        <li><a href="#">Minivan</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">More</a>
                                    <ul>
                                        <li><a href="articledetails.html">Articles</a></li>
                                        <li><a href="faq.html">Help?</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                    
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
 <!--== Page Title Area Start ==-->
     <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Registartion</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Create an account with us.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
  <?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['emailid']; 
$mobile=$_POST['mobileno'];
$password=md5($_POST['password']); 
$sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
header("location: /login.php");
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                          <h3>Sign Up</h3>
              <form  method="post" name="signup" onSubmit="return valid();">
                <div class="name">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="required">
                </div>
                      <div class="username">
                  <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number" maxlength="10" required="required">
                </div>
                <div class="username">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="password">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="password">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div>
                 <div class="log-btn">
                  <button type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block"><i class="fa fa-check-square"></i><a href="#" > Sign Up </a></button>
                </div>
            </form>
        </div>

                 <div class="login-other">
                            <span class="or">or</span>
                            <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
                            <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
                        </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
              
               
             <div class="create-ac">
                            <p>Have an account? <a href="login.php">Sign In</a></p>
                        </div>
                        <div class="login-menu">
                            <a href="about.html">About</a>
                            <span>|</span>
                            <a href="contact.html">Contact</a>
                        </div>
           


          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
</section>
   <!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="img/totop.jpg" alt="Voyager">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="js/main.js"></script>

</body>

</html>  

           