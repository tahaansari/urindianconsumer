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
                           <p>SELECT CATEGORY</p>

                           <!-- onkeyup="get_categories_keyup(this.value)"  -->
                           <select class="selectpicker form-control" onchange="get_categories(this.value)" data-live-search="true">
                              <option value="0">Select Category</option> 

                              <?php if($data){
                                    foreach ($data as $key => $value) {
                                       echo "<option value='".$value->cat_id."'>".$value->cat_name."</option>";
                                    }
                                 }else{
                                       echo "<option>No Category Available</option>";
                                    } ?>
                           </select>

                        </div>
                     </div>
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

                  <div id="category_ajax_box" class="col-md-9" style="padding-left: 0;">

                     <?php if($data){ 

                           foreach ($data as $key => $value) {

                               // data-id='".$value->cat_id."'
                               $text = "<a href='".base_url()."main/products?cat_id=".$value->cat_id."'>".
                                          "<div class='col-md-4 cat-div'>".
                                             "<h4 class='cat-heading'>".$value->cat_name."</h4>".
                                             "<img width='100%' src='../assets/uploads/cat_img/".$value->cat_img."'>".
                                          "</div>".
                                       "</a>";
                              echo $text;
                         }

                       }else{ 

                        echo "<h3 class='no-mar'>No Category Available</h1>";
                    } 
            ?>

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