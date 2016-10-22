<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link href="http://medialoot.com/preview/lumino/css/bootstrap.min.css" rel="stylesheet">
<link href="http://medialoot.com/preview/lumino/css/datepicker3.css" rel="stylesheet">
<link href="http://medialoot.com/preview/lumino/css/styles.css" rel="stylesheet">

<!-- <link rel="stylesheet" type="text/css" href="<?php base_url();?>../assets/css/style.css"> -->

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
      <style type="stylesheet">
            .error p{
                color: red!important;
            }
      </style>
</head>

<body style="background:url(<?php echo base_url()?>assets/img/background/products.png)">
   
   <div class="">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
         <div class="login-panel panel panel-default">
            <div class="panel-heading"><img src="<?php echo base_url();?>assets/img/logo.png"></div>
            
            <div class="panel-body">

               <?php echo form_open('adminauth/login');?>

                     <div class='error'> 
                           <?php if(isset($message)){
                                    echo $message;
                                 }; ?> 
                     </div>
                  <fieldset>
                     <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="identity" type="email" autofocus="">
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                     </div>
                     <input class="btn btn-primary" type="submit" name="submit" value="Login" />
                  </fieldset>
               <?php echo form_close();?>
            </div>
         </div>
      </div>
   </div>
   
      

   <script src="http://medialoot.com/preview/lumino/js/jquery-1.11.1.min.js"></script>
   <script src="http://medialoot.com/preview/lumino/js/bootstrap.min.js"></script>
   <script src="http://medialoot.com/preview/lumino/js/chart.min.js"></script>
   <script src="http://medialoot.com/preview/lumino/js/chart-data.js"></script>
   <script src="http://medialoot.com/preview/lumino/js/easypiechart.js"></script>
   <script src="http://medialoot.com/preview/lumino/js/easypiechart-data.js"></script>
   <script src="http://medialoot.com/preview/lumino/js/bootstrap-datepicker.js"></script>
   <script>
      !function ($) {
         $(document).on("click","ul.nav li.parent > a > span.icon", function(){       
            $(this).find('em:first').toggleClass("glyphicon-minus");   
         }); 
         $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
      }(window.jQuery);

      $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
      })
      $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
      })
   </script>   
</body>

</html>
