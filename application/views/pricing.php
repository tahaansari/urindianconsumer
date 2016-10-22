
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
     <!-- Global CSS -->
    <link rel="stylesheet" href="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="pricing-page">  
    <!-- ******HEADER****** --> 
        <header id="header" class="header navbar-fixed-top">  
        <div class="container">       
            <h1 class="logo">
                <a href="index.html"><span class="text">Velocity</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="<?php echo base_url();?>main/index">Home</a></li>
                        <li class="nav-item"><a href="<?php echo base_url();?>main/features">Features</a></li>
                        <li class="nav-item"><a href="<?php echo base_url();?>main/pricing">Pricing</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>main/download">Download Apps</a></li>
                                <li><a href="<?php echo base_url();?>main/blog">Blog</a></li>
                                <li><a href="<?php echo base_url();?>main/blogsingle">Blog Single</a></li>
                                <li><a href="<?php echo base_url();?>main/blogcategory">Blog Category</a></li>
                                <li><a href="<?php echo base_url();?>main/blogarchive">Blog Archive</a></li>
                                <li><a href="<?php echo base_url();?>main/about">About Us</a></li>
                                <li><a href="<?php echo base_url();?>main/contact">Contact</a></li>                    
                            </ul>                            
                        </li><!--//dropdown-->                         
                        <li class="nav-item"><a href="<?php echo base_url();?>main/login">Log in</a></li>
                        <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="<?php echo base_url();?>main/signup">Sign Up Free</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="headline-bg pricing-headline-bg">
    </div><!--//headline-bg-->
    
    <!-- ******Pricing Section****** -->
    <section class="pricing section section-on-bg">
        <div class="container">
            <h2 class="title text-center">30 day <span class="highlight">FREE</span> trial with all plans!</h2>
            <p class="intro text-center">Our pricing is simple and you can cancel or change your plan at any time.</p>
             <div class="price-cols row">
                <div class="items-wrapper col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="item price-1 col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="item-inner">
                            <div class="heading">
                            <h3 class="title">Personal</h3>
                                <p class="price-figure"><span class="price-figure-inner"><span class="currency">$</span><span class="number">5</span><br /><span class="unit"> per month</span></span></p>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled feature-list">
                                    <li><i class="fa fa-check"></i>1 user</li>
                                    <li><i class="fa fa-check"></i>10 GB storage</li>
                                    <li class="disabled"><i class="fa fa-times"></i>Email priority support</li>
                                    <li class="disabled"><i class="fa fa-times"></i>Free update</li>
                                    <li class="disabled"><i class="fa fa-times"></i>24/7 support</li>
                                </ul>
                                <a class="btn btn-cta btn-cta-primary" href="signup.html">Start free trial</a>
   
                            </div><!--//content-->
                        </div><!--//item-inner-->
                    </div><!--//item--> 
                    
                    <div class="item price-2 col-md-4 col-sm-4 col-xs-12 text-center best-buy">
                        <div class="item-inner">
                            <div class="heading">
                            <h3 class="title">Professional</h3>
                                <p class="price-figure"><span class="price-figure-inner"><span class="currency">$</span><span class="number">10</span><br /><span class="unit">per month</span></span></p>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled feature-list">
                                    <li><i class="fa fa-check"></i>10 users</li>
                                    <li><i class="fa fa-check"></i>30 GB storage</li>
                                    <li><i class="fa fa-check"></i>Email priority support</li>
                                    <li><i class="fa fa-check"></i>Free update</li>
                                    <li class="disabled"><i class="fa fa-times"></i>24/7 support</li>
                                    
                                </ul>
                                <a class="btn btn-cta btn-cta-primary" href="signup.html">Start free trial</a>
                            </div><!--//content-->
                            <div class="ribbon">
                                <div class="text">Popular</div>
                            </div><!--//ribbon-->
                        </div><!--//item-inner-->
                    </div><!--//item-->  
                    
                    <div class="item price-3 col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="item-inner">
                            <div class="heading">
                                <h3 class="title">Business</h3>
                                <p class="price-figure"><span class="price-figure-inner"><span class="currency">$</span><span class="number">25</span><br /><span class="unit">per month</span></span></p>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled feature-list">
                                    <li><i class="fa fa-check"></i>Unlimited user</li>
                                    <li><i class="fa fa-check"></i>100 GB storage</li>
                                    <li><i class="fa fa-check"></i>Email priority support</li>
                                    <li><i class="fa fa-check"></i>Free update</li>
                                    <li><i class="fa fa-check"></i>24/7 support</li>                                  
                                </ul>
                                <a class="btn btn-cta btn-cta-primary" href="signup.html">Start free trial</a>
                                
                            </div><!--//content-->
                        </div><!--//item-inner-->
                    </div><!--//item-->  
                </div><!--//items-wrapper-->                   
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//pricing-->
    
    <!-- ******FAQ Section****** --> 
    <section class="faq section has-bg-color">
        <div class="container">
            <h2 class="title text-center">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq1"><i class="fa fa-plus-square"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq1">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->
            
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq2"><i class="fa fa-plus-square"></i>What is the ipsum dolor sit amet quam tortor?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq2">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->
            
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq3"><i class="fa fa-plus-square"></i>How does the morbi quam tortor work?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq3">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->
                    
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq4"><i class="fa fa-plus-square"></i>Can I ipsum dolor sit amet nascetur ridiculus?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq4">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel--> 
                    
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq5"><i class="fa fa-plus-square"></i>Is it possible to tellus eget auctor condimentum?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq5">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->
                    
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq6"><i class="fa fa-plus-square"></i>Would it elementum turpis semper imperdiet?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq6">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->
                    
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq7"><i class="fa fa-plus-square"></i>How can I imperdiet lorem sem non nisl?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq7">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->
                    
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#faq8"><i class="fa fa-plus-square"></i>Can I imperdiet massa ut?</a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="faq8">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee
                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div><!--//panel-->                        
                </div>
            </div><!--//row-->
            <div class="contact-lead text-center">
                <h4 class="title">Have more questions?</h4>
                <a class="btn btn-cta btn-cta-secondary" href="contact.html">Get in touch</a>
            </div>
        </div><!--//container-->        
    </section><!--//faq-->
    
    <!-- ******CTA Section****** -->
    <section id="cta-section" class="section cta-section text-center pricing-cta-section">
        <div class="container">
           <h2 class="title">More than <span class="counting">300,000</span> users are using Velocity</h2>
           <p class="intro">What are you waiting for?</p>
           <p><a class="btn btn-cta btn-cta-primary" href="https://wrapbootstrap.com/theme/velocity-designed-for-products-WB0N38R04" target="_blank">Get Velocity Now</a></p>
        </div><!--//container-->
    </section><!--//cta-section-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
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
                <div class="row has-divider">
                    <div class="footer-col download col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Mobile apps</h3>
                            <ul class="list-unstyled download-list">
                                <li><a class="btn btn-ghost" href="#"><i class="fa fa-apple"></i><span class="text">Download for iOS</span> </a></li>
                                <li><a class="btn btn-ghost" href="#"><i class="fa fa-android"></i><span class="text">Download for Android</span></a></li>
                                <li><a class="btn btn-ghost" href="#"><i class="fa fa-windows"></i><span class="text">Windows coming soon...</span></a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//download-->
                    <div class="footer-col contact col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Contact us</h3>                          
                            <p class="adr clearfix">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span class="street-address">College Green</span><br>
                                    <span class="region">56 College Green Road</span><br>
                                    <span class="postal-code">BS1 XR18</span><br>
                                    <span class="country-name">UK</span>
                                </span>
                            </p>
                            <p class="tel"><i class="fa fa-phone"></i>0800 123 4567</p>
                            <p class="email"><i class="fa fa-envelope-o"></i><a href="#">enquires@website.com</a></p> 
                            <a href="https://twitter.com/3rdwave_themes" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>                        
                        </div><!--//footer-col-inner-->
                    </div><!--//contact-->
                </div>
            </div><!--//container-->
        </div><!--//footer-content-->
        
        <div class="bottom-bar">
            <div class="container">
                <small class="copyright">Copyright @ 2015 <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>                
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- Video Modal -->
    <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="video-container">
                        <iframe src="//player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div><!--//video-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div class="config-wrapper">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
            <div id="config-panel" class="config-panel">
                <h5>Choose Colour</h5>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="theme-1 active" ><a data-style="assets/css/styles.css" href="#"></a></li>
                    <li class="theme-2"><a data-style="assets/css/styles-2.css" href="#"></a></li>
                    <li class="theme-3"><a data-style="assets/css/styles-3.css" href="#"></a></li>
                    <li class="theme-4"><a data-style="assets/css/styles-4.css" href="#"></a></li>                   
                    <li class="theme-5"><a data-style="assets/css/styles-5.css" href="#"></a></li>                     
                    <li class="theme-6"><a data-style="assets/css/styles-6.css" href="#"></a></li>
                    <li class="theme-7"><a data-style="assets/css/styles-7.css" href="#"></a></li>
                    <li class="theme-8"><a data-style="assets/css/styles-8.css" href="#"></a></li>                    
                    <li class="theme-9"><a data-style="assets/css/styles-9.css" href="#"></a></li>
                    <li class="theme-10"><a data-style="assets/css/styles-10.css" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->
 
<!-- Javascript -->          
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/back-to-top.js"></script>
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/jquery.flexslider-min.js"></script>     
    <script type="text/javascript" src="http://themes.3rdwavemedia.com/velocity/1.5.5/assets/js/main.js"></script>
    
            
</body>
</html> 

