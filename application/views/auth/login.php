
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
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-24707561-18', 'auto');
      ga('send', 'pageview');
    
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','//connect.facebook.net/en_US/fbevents.js');
    
    fbq('init', '1506230579705064');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1506230579705064&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head> 

<body class="home-page">   
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
                        <li class="active nav-item"><a href="index.html">Home</a></li>
                        <li class="nav-item"><a href="features.html">Features</a></li>
                        <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="download.html">Download Apps</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-category.html">Blog Category</a></li>
                                <li><a href="blog-archive.html">Blog Archive</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>                    
                            </ul>                            
                        </li><!--//dropdown-->                         
                        <li class="nav-item"><a href="login.html">Log in</a></li>
                        <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="signup.html">Sign Up Free</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>
                <li class="slide slide-2"></li>
                <li class="slide slide-3"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->        
    
    <section class="promo section section-on-bg">
        <div class="container text-center">                
            <h2 class="title">Let's get your product online fast<br />and get attention right away!</h2>
            <p class="intro">Velocity is a mobile-friendly HTML5 template designed to help you <br /> promote your product effectively to your target users</p>
            <p><a class="btn btn-cta btn-cta-primary" href="signup.html">Try Velocity Free</a></p>   
            <button type="button" class="play-trigger btn-link " data-toggle="modal" data-target="#modal-video" ><i class="fa fa-youtube-play"></i> Watch the video</button>
        </div><!--//container-->
    </section><!--//promo-->
    
    <div class="sections-wrapper">   
     
        <!-- ******Why Section****** -->
        <section id="why" class="section why">
            <div class="container">
                <h2 class="title text-center">How Can Velocity Help You?</h2>
                <p class="intro text-center">We take care of the UX and front-end design so you can save time building your site</p>
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Save you time and effort</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                        </div>
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-1.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p><a href="https://twitter.com/3rdwave_themes" target="_blank">@velocity</a> Love it! Thank you for making my life easier and saving me time! I’ll definitely recommend it to my friends. :)</p></blockquote>
                                <p class="source">@LisaW, Bristol</p>
                            </div><!--//quote-content-->                                     
                        </div><!--//quote-->                        
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="assets/images/figures/figure-1.png" alt="" />
                        <figcaption class="figure-caption">(Screenshot: Coral - App &amp; website startup kit) </figcaption>
                    </figure>
                </div><!--//item-->
                
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Works across all devices</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                            <p><i class="fa fa-download"></i> <a href="download.html">Download mobile versions</a></p>
                        </div>
                        
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-2.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p>I find the mobile app very useful when I'm on the go. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p></blockquote>
                                <p class="source">@JackT, San Francisco</p>
                            </div><!--//quote-content-->         
                        </div><!--//quote-->                        
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="assets/images/figures/figure-2.png" alt="" />
                        <div class="control text-center">
                            <button type="button" class="play-trigger" data-toggle="modal" data-target="#modal-video"><i class="fa fa-play"></i></button>                    
                        </div><!--//control-->
                    </figure>
                </div><!--//item-->
                
                <div class="row item ">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Easy to customise</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                        </div>
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-3.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p>Nice template! It’s practical and there is no gimmicks. Very easy to customise as well!</p></blockquote>
                                <p class="source"><a href="#">@AlexD</a>, London</p>
                            </div><!--//quote-content-->          
                        </div><!--//quote-->                        
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="assets/images/figures/figure-3.png" alt="" />
                        <figcaption class="figure-caption">(Screenshot: <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/?ref=3wm" target="_blank">Tempo - Bootstrap template for startups)</a> </figcaption>

                    </figure>
                </div><!--//item-->
                
                <div class="row item last-item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Connect your users</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                            
                        </div>
                        
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-4.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p>I can connect to like-minded people lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></blockquote>
                                <p class="source">@JackT, San Francisco</p>
                            </div><!--//quote-content-->
                        </div><!--//quote-->
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="assets/images/figures/figure-4.png" alt="" />
                    </figure>
                </div><!--//item-->
                
                
                <div class="feature-lead text-center">
                    <h4 class="title">Want to discover all the features?</h4>
                    <p><a class="btn btn-cta btn-cta-secondary" href="features.html">Take a Tour</a></p>
                </div>
            </div><!--//container-->
        </section><!--//why-->  
        
        <!-- ******Testimonials Section****** -->
        <section class="section testimonials">
            <div class="container">
                <h2 class="title text-center">What are people saying about Velocity?</h2>
                <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                    </ol><!--//carousel-indicators-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <figure class="profile"><img src="assets/images/people/profile-m-1.png" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>We used Velocity as a front-end design template for our product site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elit tortor, consectetur vitae varius at, interdum eget libero. Morbi.</p>
                                </blockquote>
                                <p class="source">Kevin Knight<br /><span class="title">Co-Founder, Startup Hub</span></p>
                            </div><!--//content-->                         
                        </div><!--//item-->                        
                        <div class="item">
                            <figure class="profile"><img src="assets/images/people/profile-m-2.png" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                                </blockquote>
                                <p class="source">Diana Luna<br /><span class="title">Entrepreneur, Maecenas</span></p>
                            </div><!--//content-->                         
                        </div><!--//item-->  
                        <div class="item">
                            <figure class="profile"><img src="assets/images/people/profile-m-3.png" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                                </blockquote>
                                <p class="source">Tony Lee<br /><span class="title">CTO, Lorem Ipsum</span></p>
                            </div><!--//content-->                         
                        </div><!--//item-->                                         
                    </div><!--//carousel-inner-->
                    
                </div><!--//carousel-->
            </div><!--//container-->
        </section><!--//testimonials-->          
        
        <!-- ******Press Section****** -->
        <section class="section press">
            <div class="container text-center">
                <h2 class="title">Press Coverage</h2>
                <ul class="press-list list-inline row">
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-1.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-2.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4 xs-break"><a href="#"><img class="img-responsive" src="assets/images/press/press-3.png" alt="" /></a></li>                   
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-4.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-5.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-6.png" alt="" /></a></li>                    
                </ul><!--//press-list-->
                <ul class="press-list list-inline row last">
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-7.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-8.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4 xs-break"><a href="#"><img class="img-responsive" src="assets/images/press/press-9.png" alt="" /></a></li>                   
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-10.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-11.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-12.png" alt="" /></a></li>                    
                </ul><!--//press-list-->
                
                <div class="press-lead text-center">
                     <h3 class="title">Have press inquires?</h3>
                     <p class="press-links"><a href="#">Download our press kit</a> or <a href="contact.html">Get in touch</a></p>
                </div>
               
            </div><!--//container-->
        </section><!--//press-->
        
        <!-- ******CTA Section****** -->
        <section id="cta-section" class="section cta-section text-center home-cta-section">
            <div class="container">
               <h2 class="title">Ready to promote your product online?</h2>
               <p class="intro">More than <span class="counting">300,000</span> users are using Velocity</p>
               <p><a class="btn btn-cta btn-cta-primary" href="https://wrapbootstrap.com/theme/velocity-designed-for-products-WB0N38R04" target="_blank">Get Velocity Now</a></p>
            </div><!--//container-->
        </section><!--//cta-section-->
        
    </div><!--//section-wrapper-->
    
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
                        <iframe id="vimeo-video" src="//player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>     
    <script type="text/javascript" src="assets/js/main.js"></script>
    
    <!-- Vimeo video API -->
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script type="text/javascript" src="assets/js/vimeo.js"></script> 
    
            
</body>
</html> 

<!-- 

<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage">
    <?php echo $message;?>
</div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->