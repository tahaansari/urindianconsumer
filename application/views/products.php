<?php include 'includes/header.php'; ?>       
            <div class="row" style="margin:0;margin-top: 80px;">
               <br>
               <div class="blog-list blog-category-list">
                  <article class="post col-md-3">
                     <div class="post-inner">
                        <div class="">
                           <h3 class="filter">FILTER</h3>
                        </div>
                        <br>

                        <div class="filter-inner">
                          

                           <!-- <br>  -->
                           <p>SELECT MAKE</p>
                           <select id="make" onchange="get_model(this.value)" class="selectpicker form-control" data-live-search="true">
                              <option value="0">Select Make</option>
                              <!-- <div ></div> -->

                              <?php if($data['make']){

                                       foreach ($data['make'] as $key => $value) {

                                          echo "<option value='".$value->make_id."'>".$value->make_name."</option>";
                                       }
                                    }else{
                                       echo "<option>No Make Available</option>";
                                    } ?>

                           </select>
                           <br> 
                           <p>SELECT MODEL</p>
                           <select id="model" onchange="get_final_product(this.value)" class="selectpicker form-control" data-live-search="true">
                              <option value="0">Select Model</option>
                           </select>


                           <!-- <br>  -->

                           <!-- <a class="btn btn-cta btn-cta-primary" href="signup.html">Search</a> -->
                        </div>
                     </div>
                     <!--//post-inner-->
                     <br>


                              <div class="post-inner" style="padding-bottom: 8px;">
                                 <h3 style="margin: 0px;padding: 10px;font-size: 20px;background-color: #828282;color: white;">
                                    Latest Activities
                                 </h3>
                                 <div class="feature-review rr">
                                       <div class="feature-left">
                                          <img width="100%" src="<?php echo base_url();?>assets/img/samsung.jpg">
                                       </div>
                                       <div class="feature-right">
                                          <p>REDMI 1s in Mobiles</p>
                                          <p class="font-12">by jacksparow</p>
                                          <p class="rating-meter">3/5</p>
                                       </div>
                                 </div>
                                 <div class="feature-review rr">
                                       <div class="feature-left">
                                          <img width="100%" src="<?php echo base_url();?>assets/img/samsung.jpg">
                                       </div>
                                       <div class="feature-right">
                                          <p>REDMI 1s in Mobiles</p>
                                          <p class="font-12">by jacksparow</p>
                                          <p class="rating-meter">3/5</p>
                                       </div>
                                 </div>
                                 <div class="feature-review rr">
                                       <div class="feature-left">
                                          <img width="100%" src="<?php echo base_url();?>assets/img/samsung.jpg">
                                       </div>
                                       <div class="feature-right">
                                          <p>REDMI 1s in Mobiles</p>
                                          <p class="font-12">by jacksparow</p>
                                          <p class="rating-meter">3/5</p>
                                       </div>
                                 </div>
                                 <div class="feature-review rr">
                                       <div class="feature-left">
                                          <img width="100%" src="<?php echo base_url();?>assets/img/samsung.jpg">
                                       </div>
                                       <div class="feature-right">
                                          <p>REDMI 1s in Mobiles</p>
                                          <p class="font-12">by jacksparow</p>
                                          <p class="rating-meter">3/5</p>
                                       </div>
                                 </div>
                                 <div class="feature-review rr">
                                       <div class="feature-left">
                                          <img width="100%" src="<?php echo base_url();?>assets/img/samsung.jpg">
                                       </div>
                                       <div class="feature-right">
                                          <p>REDMI 1s in Mobiles</p>
                                          <p class="font-12">by jacksparow</p>
                                          <p class="rating-meter">3/5</p>
                                       </div>
                                 </div>
                                 <div class="feature-review rr">
                                       <div class="feature-left">
                                          <img width="100%" src="<?php echo base_url();?>assets/img/samsung.jpg">
                                       </div>
                                       <div class="feature-right">
                                          <p>REDMI 1s in Mobiles</p>
                                          <p class="font-12">by jacksparow</p>
                                          <p class="rating-meter">3/5</p>
                                       </div>
                                 </div>
                              </div>
                           </article>

                  <div id="products_ajax_box" class="col-md-9" style="padding-left: 0;">

                     <?php if($data['products']){ 

                           $text = "";
                           foreach ($data['products'] as $key => $value) { 

                              $text .= "<div class='col-md-3 product-div'>".
                                          "<a href='".base_url()."main/product'>".
                                          "<div class='product-inner'>".
                                          "<p>".$value->make_name." ".$value->pro_model." in ".$value->cat_name."</p>".
                                          "<div class='product-img-div'>".
                                             "<img width='100%' src='".base_url()."assets/uploads/pro_img/".$value->pro_img."'>".
                                          "</div>".
                                          "<p>344 Reviews</p>".
                                          "<p>Average Rating</p>".
                                          "<i class='fa fa-star active-star' aria-hidden='true'></i>".
                                          "<i class='fa fa-star active-star' aria-hidden='true'></i>".
                                          "<i class='fa fa-star active-star' aria-hidden='true'></i>".
                                          "<i class='fa fa-star active-star' aria-hidden='true'></i>".
                                          "<i class='fa fa-star active-star' aria-hidden='true'></i>".
                                          "</div>".
                                          "</a>".

                                       "</div>";
                           }

                           echo $text;

                       }else{ 

                        echo "<h3 class='no-mar'>No Product Available</h1>";
                   } ?>

                  </div>



                  


               </div>
               <!--//blog-list-->  
            </div>
            <div class="pagination-container text-center">
               <ul class="pagination">
                  <li class="disabled"><a href="#">«</a></li>
                  <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
               </ul>
               <!--//pagination-->
            </div>
            
<?php include 'includes/footer.php'; ?>