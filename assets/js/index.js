// $(document).ready(function(){

      

//           menu_click_right.onclick = function(){

//             menu_right.style.marginRight='0px';
          
//           };

          
//           close_right.onclick = function(){

//             menu_right.style.marginRight ='-400px';

//           };


// });


function open_menu(){

      var menu_right = document.getElementById('menu_right');
      menu_right.style.marginRight='0px';
}

function close_menu(){

      var menu_right = document.getElementById('menu_right');
      menu_right.style.marginRight ='-400px';

}

$(document).on('click','.reply',function(){

  alert('reply clicked');
  


})

// Toggle Function
$('.toggle').click(function(){
  // Switches the Icon
  // $(this).children('i').toggleClass('fa-pencil');
  // Switches the forms  
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});

function show_signup(){

  $('#login_form').css('display','none');
  $('#signup_form').css('display','block');
}

function show_login(){

  $('#signup_form').css('display','none');
  $('#login_form').css('display','block');
}


// $(window).load(function() {
	
//       // alert("window load occurred!");
//       $(".animate-logo").animate({left: "500px"},4000);

// });


function show_notification(){

  $('#notification').toggle();
}


$('.rating-container .star1').click(function () {

    $('.rating-container .star1').removeClass('cust-active');
    $(this).prevAll('.star1').addBack().addClass('cust-active');
});

$('.rating-container .star2').click(function () {

    $('.rating-container .star2').removeClass('cust-active');
    $(this).prevAll('.star2').addBack().addClass('cust-active');
});

$('.rating-container .star3').click(function () {

    $('.rating-container .star3').removeClass('cust-active');
    $(this).prevAll('.star3').addBack().addClass('cust-active');
});

$('.rating-container .star4').click(function () {

    $('.rating-container .star4').removeClass('cust-active');
    $(this).prevAll('.star4').addBack().addClass('cust-active');
});