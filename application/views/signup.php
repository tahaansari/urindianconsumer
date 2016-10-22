
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for products</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>

     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css"> -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url();?>/assets/css/styles.css">

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/cust_style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="signup-page access-page has-full-screen-bg">
    <div class="upper-wrapper">

        
        <!-- ******Signup Section****** --> 
        <section class="signup-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">     
                        <div class="form-box-inner">

                            <div class="login-logo">
                                <a href="index.html">
                                    <!-- <span class="text">Ur IndianConsumer</span> -->
                                    <img style="padding: 0 0 20px 0px;" class="img-responsive" src="<?php echo base_url();?>assets/img/logo.png">
                                </a>
                            </div>

                            <!-- <h2 class="title text-center">Sign up now</h2>  
                            <p class="intro text-center">It only takes 3 minutes!</p> -->               
                            <div class="row">
                                <div class="form-container col-md-5 col-sm-12 col-xs-12">

                                    <?php echo form_open('auth/create_user'); ?>
                                                
                                        <?php echo isset($message) ? $message : ""?>
                                    
                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">First Name</label> -->
                                            <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name">
                                        </div>

                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">Last Name</label> -->
                                            <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name">
                                        </div>

                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">Email</label> -->
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                                        </div>

                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">Password</label> -->
                                            <input id="password" name="password" type="text" class="form-control" placeholder="Password">
                                        </div>

                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">Password</label> -->
                                            <input id="password_confirm" name="password_confirm" type="text" class="form-control" placeholder="Password Confirm">
                                        </div>
                                        

                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">Gender</label> -->
                                            <input id="gender" name="gender" type="text" class="form-control" placeholder="Gender">
                                        </div>

                                        <div class="form-group  email">
                                            <!-- <label class="sr-only" for="signup-email">DOB</label> -->
                                            <input id="dob" name="dob" type="text" class="form-control" placeholder="DOB">
                                        </div>

                                       
                                        <input type="submit" class="btn btn-block btn-cta-primary" value="Sign up">

                                        <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
                                        <p class="lead">Already have an account? <a class="login-link" id="login-link" href="<?php echo base_url();?>main/login">Log in</a></p>  
                                   
                                    <?php echo form_close(); ?>


                                </div><!--//<form></form>-container-->
                                <div class="social-btns col-md-5 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">  
                                    <div class="divider"><span>Or</span></div>                      
                                    <ul class="list-unstyled social-login">
                                        <li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Sign up with Twitter</button></li>
                                        <li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Sign up with Facebook</button></li>
                                        <li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Sign up with Github</button></li>
                                        <li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Sign up with Google</button></li>
                                    </ul>
                                    <p class="note">Don't worry, we won't post anything without your permission.</p>
                                </div><!--//social-login-->
                            </div><!--//row-->
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//signup-section-->
    </div><!--//upper-wrapper-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <br><br>
                <div class="row">                    
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">About us</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Who we are</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Press</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Blog</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->    
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Product</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>How it works</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>API</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Download Apps</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Pricing</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->              
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12 sm-break">
                        <div class="footer-col-inner">
                            <h3 class="title">Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Help</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Documentation</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Terms of services</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Privacy</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->   
                    <div class="footer-col connect col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <ul class="social list-inline">
                                <li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>        
                                <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>             
                            </ul>
                            <div class="form-container">
                                <p class="intro">Stay up to date with the latest news and offers from Velocity</p>
                                <form class="signup-form navbar-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                    </div>   
                                    <button type="submit" class="btn btn-cta btn-cta-primary">Subscribe Now</button>                                 
                                </form>                               
                            </div><!--//subscription-form-->
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="clearfix"></div> 
                </div><!--//row-->
            
            </div><!--//container-->
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <small class="copyright">Copyright c 2016, Ur IndianConsumer. All Rights Reserved
                </small>                
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
   
 
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/back-to-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
       

    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
     
    <script type="text/javascript">
        
        window.sr = ScrollReveal({ reset: true });
        sr.reveal('.btn', { delay : 500,duration: 1000, origin  : 'left',distance    : '500px' });
        sr.reveal('.title', { delay : 500,duration: 1000, origin  : 'left',distance    : '500px' });
        sr.reveal('.social', { delay : 500,duration: 1000, origin  : 'right',distance    : '500px' });





    </script> 

</body>
</html> 

