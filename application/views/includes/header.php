<!DOCTYPE html>
      <html lang="en">
         <head>
            <title>Urindianconsumer</title>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="shortcut icon" href="favicon.ico">

            <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
            <!-- Theme CSS -->

            <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
            <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/cust_style.css">
            
         </head>

         <body class="home-page">

            <div id="menu_right">
               <img src="<?php echo base_url();?>ios7-close-empty.svg"  onclick="close_menu()" id="close_icon_right">
               <div class="form-box">
                  <div class="form-box-inner">

                     <div id="login_form" class="row" style="margin: 0;">
                        <div class="form-container">

                            <form action="<?php echo  base_url('auth/login') ?>" method="post" accept-charset="utf-8">

                               <?php if(isset($message)){ echo $message; } ?> 

                              <div class="form-group">
                                 <label class="sr-only" for="login-email">Email or username</label>
                                 <input id="login-email" name="identity" type="email" class="form-control login-email" placeholder="Email or username">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="login-password">Password</label>
                                 <input id="login-password" name="password" type="password" class="form-control login-password" placeholder="Password">
                                 <p class="forgot-password">
                                    <a href="http://localhost/freelancing/urindianconsumer/main/reset_password"> Forgot password? </a></p>
                              </div>

                              <input type="submit" class="btn btn-block btn-cta-primary mybtn" value="Log in" data-sr-id="1">

                              <div class="checkbox remember">
                                 <label>
                                 <input type="checkbox"> Remember me
                                 </label>
                              </div>

                              <p class="lead">Don't have a UrIndianConsumer account yet? <br>
                                 <a class="signup-link" href="#" onclick="show_signup();">Create your account now</a>
                              </p>
                            </form>

                        </div>
                        <div class="social-btns left">
                           <ul class="list-unstyled social-login">
                              <li><button class="facebook-btn btn btn-fb" type="button" data-sr-id="3" style=""><i class="fa fa-facebook"></i>Log in with Facebook</button></li>
                              <li><button class="google-btn btn btn-google" type="button" data-sr-id="5"><i class="fa fa-google-plus"></i>Log in with Google</button></li>
                              <br>
                           </ul>
                        </div>
                     </div>

                     <!-- signup -->
                     <div id="signup_form" class="row" style="display:none;margin: 0;">
                        <div class="form-container">
                           <?php echo form_open('auth/create_user'); ?>
                            <?php echo isset($message) ? $message : ""?>
                            <div class="form-group">
                                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="text" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input id="password_confirm" name="password_confirm" type="text" class="form-control" placeholder="Password Confirm">
                            </div>
                            <div class="form-group">
                                <input id="gender" name="gender" type="text" class="form-control" placeholder="Gender">
                            </div>
                            <div class="form-group">
                                <input id="dob" name="dob" type="text" class="form-control" placeholder="DOB">
                            </div>
                            <input type="submit" class="btn btn-block btn-cta-primary" value="Sign up">
                            <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
                            <p class="lead">Already have an account? 
                            <a class="login-link" id="login-link" href="#" onclick="show_login()">Log in</a></p>  
                        <?php echo form_close(); ?>
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
            
            <!-- ******HEADER****** --> 
            <header id="header" class="header navbar-fixed-top">
               <div class="container">
               <a href="<?php echo base_url();?>main/index">
               <img style="padding: 25px;" src="<?php echo base_url();?>assets/img/logo.png">
               </a> 

               <i class="fa fa-bell notification" onclick="show_notification()" aria-hidden="true"></i>

               <div id="notification" class="notification-box">
                    <div class="notification-inner-box row">
                          <div class="col-md-3">
                              <img width="80px" height="80px" src="<?php echo base_url();?>assets/uploads/dp.png">
                          </div>
                          <div class="col-md-9">
                              <p style="margin-top: 15px;">tahaansari commented on you review click to seee</p>
                          </div>
                    </div>
                    <div class="notification-inner-box row">
                          <div class="col-md-3">
                              <img width="80px" height="80px" src="<?php echo base_url();?>assets/uploads/dp.png">
                          </div>
                          <div class="col-md-9">
                              <p style="margin-top: 15px;">tahaansari commented on you review click to seee</p>
                          </div>
                    </div>
                    <div class="notification-inner-box row">
                          <div class="col-md-3">
                              <img width="80px" height="80px" src="<?php echo base_url();?>assets/uploads/dp.png">
                          </div>
                          <div class="col-md-9">
                              <p style="margin-top: 15px;">tahaansari commented on you review click to seee</p>
                          </div>
                    </div>
                    <div class="notification-inner-box row">
                          <div class="col-md-3">
                              <img width="80px" height="80px" src="<?php echo base_url();?>assets/uploads/dp.png">
                          </div>
                          <div class="col-md-9">
                              <p style="margin-top: 15px;">tahaansari commented on you review click to seee</p>
                          </div>
                    </div>
               </div>





               <nav class="main-nav navbar-right" role="navigation">
                  <div class="navbar-header">
                     <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span> 
                     </button>
                     <div id="navbar-collapse" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                           <li class="nav-item"><a href="<?php echo base_url();?>">Home</a></li>

                           <li class="nav-item"><a href="<?php echo base_url();?>main/rreview">Reviews</a></li>


                           <!-- data-toggle="modal" data-target="#witeReviewModal"  -->
                           <li class="nav-item"><a href="<?php echo base_url();?>main/wreview">Write Reviews</a></li>

                           <li class="nav-item"><a href="<?php echo base_url();?>main/rreview">Youtube Videos</a></li>



                           <?php if($this->ion_auth->logged_in()){ ?>

                                 <li class="nav-item">
                                    <a href="<?php echo  base_url('auth/logout'); ?>">Log Out</a>
                                 </li>

                 <?php      }else{ ?>

                                 <li class="nav-item">
                                    <a href="javascript:void(0)" id="open_menu" onclick="open_menu()">Log in</a>
                                 </li>
                    <?php   } ?>



                           



                           
                        </ul>
                     </div>
               </nav>
               </div>
            </header>