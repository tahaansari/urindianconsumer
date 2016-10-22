var base_url="http://localhost:8888/urindianconsumer/";
var img_url="http://localhost:8888/urindianconsumer/assets/";


// var base_url="http://www.tahamehmoodansari.com/urindianconsumer/";
// var img_url="http://www.tahamehmoodansari.com/urindianconsumer/assets/";


function get_categories(cat_id){

    if(cat_id==0){
          return false;
    }

    $.ajax({

    type:"POST",
    url:base_url+"main/get_categories",
    dataType:'json',
    data:{
      cat_id:cat_id
    },
    success:function(result){

      console.log(result);

      if(result['data']!=""){

          var html = "";
          $.each(result['data'],function(key,value){

            html +="<a href='"+base_url+"main/products?cat_id="+value.cat_id+"'><div class='col-md-4 cat-div get_products'>"+
                       "<h4 class='cat-heading'>"+value.cat_name+"</h4>"+
                       "<img width='100%' src='../assets/uploads/cat_img/"+value.cat_img+"'>"+
                    "</div></a>";

          })

          $('#category_ajax_box').html(html);
          // get_make(cat_id);

      }else{

          $('#category_ajax_box').html("<h3 class='no-mar'>No Category Available</h3>");
      }

    },
    error:function(){

      alert('error');
    }

  }) 


}


// function get_categories_keyup(text){


//   alert(text);

// }




function get_make(cat_id){

  // alert('get make called id is '+cat_id);

  $.ajax({

    type:"POST",
    url:base_url+"main/get_make",
    dataType:"json",
    data:{
      cat_id:cat_id
    },
    success:function(result){

      console.log(result);

      var make="";
      var count=0;
      $.each(result['data'],function(key,value){

        if(count==0){
          make += "<option value='0'>Select Make</option>";
          count++;
        }
        make +="<option value='"+value.make_id+"'>"+value.make_name+"</option>";

      })
                              
      $('#make').html(make);

      $('.selectpicker').selectpicker('refresh');
    },
    error:function(){

      alert('error');

    }

  })
}

function get_model(make_id){

  // alert('get model called id is '+make_id);

  $.ajax({

    type:"POST",
    url:base_url+"main/get_model",
    dataType:"json",
    data:{
      make_id:make_id
    },
    success:function(result){

      console.log(result);

      var model="";
      var count=0;
      $.each(result['data'],function(key,value){

        if(count==0){
          model += "<option value='0'>Select Model</option>";
          count++;
        }
        model +="<option value='"+value.pro_id+"'>"+value.pro_model+"</option>";

      })
                              
      $('#model').html(model);

      $('.selectpicker').selectpicker('refresh');
    },
    error:function(){

      alert('error');

    }

  })


  $.ajax({

    type:"POST",
    url:base_url+"main/get_products_bymake",
    dataType:'json',
    data:{
      make_id:make_id
    },
    success:function(result){

      console.log(result);

      if(result['data']!=""){

          var html = "";
          $.each(result['data'],function(key,value){

          html += "<div class='col-md-3 product-div'>"+
                     "<a href='"+base_url+"main/product'>"+
                     "<div class='product-inner'>"+
                     "<p>"+value.make_name+" "+value.pro_model+" in "+value.cat_name+"</p>"+
                     "<div class='product-img-div'>"+
                        "<img width='100%' src='"+img_url+"uploads/pro_img/"+value.pro_img+"'>"+
                     "</div>"+
                     "<p>344 Reviews</p>"+
                     "<p>Average Rating</p>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "</div>"+
                     "</a>"+

                  "</div>";

          })

          $('#products_ajax_box').html(html);

      }else{

          $('#products_ajax_box').html("<h3 class='no-mar'>No Product Available</h3>");
      }

    },
    error:function(){

      alert('error');
    }

  }) 

}


function get_final_product(product_id){

  $.ajax({

    type:"POST",
    url:base_url+"main/get_final_product",
    dataType:'json',
    data:{
      product_id:product_id
    },
    success:function(result){

      console.log(result);

      if(result['data']!=""){

          var html = "";
          $.each(result['data'],function(key,value){

          html += "<div class='col-md-3 product-div'>"+
                     "<a href='"+base_url+"/main/product'>"+
                     "<div class='product-inner'>"+
                     "<p>"+value.make_name+" "+value.pro_model+" in "+value.cat_name+"</p>"+
                     "<div class='product-img-div'>"+
                        "<img width='100%' src='"+img_url+"uploads/pro_img/"+value.pro_img+"'>"+
                     "</div>"+
                     "<p>344 Reviews</p>"+
                     "<p>Average Rating</p>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
                     "</div>"+
                     "</a>"+

                  "</div>";

          })

          $('#products_ajax_box').html(html);

      }else{

          $('#products_ajax_box').html("<h3 class='no-mar'>No Product Available</h3>");
      }

    },
    error:function(){

      alert('error');
    }

  }) 

}
// $(document).on('click','.get_products',function(){

//     var cat_id = $(this).attr("data-id");

//     $.ajax({

//     type:"POST",
//     url:base_url+"get_products",
//     dataType:'json',
//     data:{
//       cat_id:cat_id
//     },
//     success:function(result){

//       console.log(result);

//       if(result['data']!=""){

//           var html = "";
//           $.each(result['data'],function(key,value){



//           html += "<div class='col-md-3 product-div'>"+
//                      "<a href='http://localhost:8888/urindianconsumer/main/product'>"+
//                      "<div class='product-inner'>"+
//                      "<p>"+value.make_name+" "+value.pro_model+" in "+value.cat_name+"</p>"+
//                      "<div class='product-img-div'>"+
//                         "<img width='100%' src='"+img_url+"uploads/pro_img/"+value.pro_img+"'>"+
//                      "</div>"+
//                      "<p>344 Reviews</p>"+
//                      "<p>Average Rating</p>"+
//                      "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//                      "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//                      "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//                      "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//                      "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//                      "</div>"+
//                      "</a>"+

//                   "</div>";





//           // html += "<article class='post col-md-3'>"+
//           //               "<a href='http://localhost:8888/urindianconsumer/main/product'>"+
//           //               "<div class='post-inner product-box'>"+
//           //                  "<div class='content' style='padding:10px'>"+
//           //                     "<p>""</p>"+
//           //                     // "<h5 class='no-mar' style='margin-bottom:5px'>"+value.cat_name+"</h5>"+
//           //                     // "<h4 class='no-mar' style='margin-bottom:5px'>"+value.cat_name+"</h4>"+
//           //                     "<img src='"+img_url+"uploads/pro_img/"+value.pro_img+"' width='100%'>"+
//           //                     "<div class='meta'></br>"+
//           //                              "<!-- <i class='fa'>&#xf0c9</i> -->"+
//           //                              // "<p>"+value.make_name+" "+value.pro_model+"</p>"+
//           //                              "<p>344 Reviews</p>"+
//           //                              "<p>Average Rating: </p>"+
//           //                              "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//           //                              "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//           //                              "<i class='fa fa-star active-star' aria-hidden='true'></i>"+
//           //                              "<i class='fa fa-star' aria-hidden='true'></i>"+
//           //                              "<i class='fa fa-star' aria-hidden='true'></i>"+
//           //                              "<!-- 5088 Reviews -->"+
//           //                     "</div>"+
//           //                  "</div>"+
//           //               "</div>"+
//           //               "</a>"+
//           //            "</article>";

//           })

//           $('#ajax_box').html(html);

//       }else{

//           $('#ajax_box').html("<h3 class='no-mar'>No Product Available</h3>");
//       }

//     },
//     error:function(){

//       alert('error');
//     }

//   }) 

// });