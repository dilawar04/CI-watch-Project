<?php $this->load->view('layouts/header'); ?>
<!-- main-content-wrap start -->
        <!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="<?php echo '/index.php'?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Product Details</a></li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row product-details-inner">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-large-slider">
                    <div class="pro-large-img img-zoom">
                        <img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" width="300px"
                        height="450px"/>
                        <a href="/uploads/<?php echo $product->product_img; ?>" data-fancybox="images"><i class="fa fa-search"></i></a>
                    </div>

                </div>
                <div class="product-nav">
                	<?php $galleries = $this->gallery->get_gallery_by($product->id); ?>
                  <?php if ($galleries): ?>
                    <?php foreach ($galleries as $gallery): ?>
                    <div class="pro-nav-thumb">
                        <img src="/uploads/<?php echo $gallery->gallery_img; ?>" alt="<?php echo $product->title; ?>" />
                    </div>
                    <?php endforeach ?>
                  <?php else: ?>
                    <div class="alert alert-danger">No record found!</div>
                  <?php endif ?>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content">
                    <div class="product-info">
                        <h3><?php echo $product->title; ?></h3>
                        <div class="price-box">
                            <span class="new-price">$<?php echo number_format($product->price); ?></span>
                        </div>
                        <p><?php echo  substr($product->description, 0 , 100); ?>.....</p>
                        <ul class="single-add-actions">
                        </ul>
                        <ul class="stock-cont">
                            <li class="product-sku">Brand: <span><?php echo $brand_array[$product->brand_id]; ?></span></li><li class="product-sku">Part Number: <span><?php echo $product->part_number; ?></span></li>
                            <li class="product-sku">Total Views: <span><?php echo $product->views; ?></span></li>
                        </ul>
                        <div class="share-product-socail-area">
                            <p>Share this product</p>
                            <ul class="single-product-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-description-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul role="tablist" class="nav">
                            <li class="active" role="presentation">
                                <a data-bs-toggle="tab" role="tab" href="#description" class="active">Description</a>
                            </li>
                            <li role="presentation">
                                <a data-bs-toggle="tab" role="tab" href="#specification">Specification</a>
                            </li>
                            <li role="presentation">
                                <a data-bs-toggle="tab" role="tab" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product_details_tab_content tab-content">
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                            <div class="product_description_wrap  mt-30">
                                <div class="product_desc mb-30">
                                    <p><?php echo $product->description; ?></p>
                                </div>

                            </div>
                        </div>
                        <div class="product_tab_content tab-pane" id="specification" role="tabpanel">
                            <div class="product_description_wrap  mt-30">
                                <div class="product_desc mb-30">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td width="150"><strong>Model Number</strong></td>
                      <td><strong><?php echo $product->model_number; ?></strong></td>
                    </tr>
<tr>
                      <td width="150"><strong>Model Year</strong></td>
                      <td><strong><?php echo $product->model_year; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Item Shape</strong></td>
                      <td><strong><?php echo $product->item_shape; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Display Type</strong></td>
                      <td><strong><?php echo $product->display_type; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Case Material</strong></td>
                      <td><strong><?php echo $product->case_material; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Case Diameter</strong></td>
                      <td><strong><?php echo $product->case_diameter; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Case Thickness</strong></td>
                      <td><strong><?php echo $product->case_thickness; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Band Material</strong></td>
                      <td><strong><?php echo $product->band_material; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Band Size</strong></td>
                      <td><strong><?php echo $product->band_size; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Band Width</strong></td>
                      <td><strong><?php echo $product->band_width; ?></strong></td>
                    </tr>

                    <tr>
                      <td width="150"><strong>Band Color</strong></td>
                      <td><strong><?php echo $product->band_color; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Dial Color</strong></td>
                      <td><strong><?php echo $product->dial_color; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Item Weight</strong></td>
                      <td><strong><?php echo $product->item_weight; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Movement</strong></td>
                      <td><strong><?php echo $product->movement; ?></strong></td>
                    </tr>
                  </thead>
                  
                  </table>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Content -->

                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                            <div class="review_address_inner mt-30">
                                <!-- Start Single Review -->
                                <div class="pro_review">
                                    <div class="review_thumb">
                                        <img alt="review images" src="/assets/images/other/reviewer-60x60.jpg">
                                    </div>
                                    <div class="review_details">
                                        <div class="review_info mb-10">
                                            <ul class="product-rating d-flex mb-10">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <h5>Admin - <span> November 19, 2019</span></h5>

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating_wrap mt-50">
                                <h5 class="rating-title-1">Add a review </h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <h6 class="rating-title-2">Your Rating</h6>
                                <div class="rating_list">
                                    <div class="review_info mb-10">
                                        <ul class="product-rating d-flex mb-10">
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                    	<?php 
								      	  	$attributes = ['name' => 'formAdd' , 'id' => 'formAdd',"class" => "comment-form-area"];
								       		echo form_open('',$attributes);
								      ?>
                                            <div class="row comment-input">
                                                <div class="col-md-6 comment-form-author mt-15">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" required="required" name="name" id="name">
                                                </div>
                                                <div class="col-md-6 comment-form-email mt-15">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="email" id="email">
                                                </div>
                                            </div>
                                            <div class="comment-form-comment mt-15">
                                                <label>Comment</label>
                                                <textarea name="comment" id="comment" class="comment-notes" required="required"></textarea>
                                            </div>
                                            <div class="comment-form-submit mt-15">
                                                <input type="submit" value="Submit" class="comment-submit">
                                            </div>
                                            <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>

        <div class="related-product-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3> Related Product</h3>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4">
                <?php if ($related_products): ?>
                <?php foreach ($related_products as $related_product): ?>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30" height="700px">
                        <div class="product-thumb" width="210" height="310">
                            <a href="<?php echo '/product/' . $related_product->slug; ?>">
                                <img class="primary-image img-responsive" src="/uploads/<?php echo $related_product->product_img; ?>" alt="<?php echo $related_product->title; ?>">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="<?php echo '/product/' . $related_product->slug; ?>"><?php echo  substr($related_product->title, 0 , 25); ?>...</a></h4>
                            <div class="price-box">
                                <span class="new-price">$<?php echo number_format($related_product->price); ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <?php endforeach ?>
            <?php else: ?>
                  <div class="alert alert-danger">No record found!</div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
        <!-- main-content-wrap end -->
<?php $this->load->view('layouts/footer'); ?>
<!-- SELECT id,price FROM afa110_product where price >= 20000 and price <= 30000  -->