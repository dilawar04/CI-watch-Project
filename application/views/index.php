<?php $this->load->view('layouts/header'); ?>
<!-- main-content-wrap start -->
<?php $this->load->view('layouts/sidebar'); ?>
<div class="row align-itmes-center">
    <div class="col">
        <!-- shop-top-bar start -->
        <div class="shop-top-bar">
            <!-- product-view-mode start -->

            <div class="product-mode">
                <!--shop-item-filter-list-->
                <ul class="nav shop-item-filter-list" role="tablist">
                    <li class="active"><a class="active grid-view" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                </ul>
                <!-- shop-item-filter-list end -->
            </div>
            <!-- product-view-mode end -->
        </div>
        <!-- shop-top-bar end -->
    </div>
</div>
<div class="shop-products-wrap">
  <div class="tab-content">
    <div class="tab-pane active" id="grid">
      <div class="shop-product-wrap">&nbsp;&nbsp;
        <h4 class="title">Patek Philippe</h4>
    <div class="row">
        <?php $products = $this->product->show_product_by(1); ?> 
          <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6">
    <!-- single-product-area start -->
    <div class="single-product-area mt-30">
        <div class="product-thumb">
        <a href="<?php echo '/product/' . $product->slug; ?>">
            <img class="primary-image" src="/uploads/<?php echo $product->product_img; ?>" alt="" width="210" height="310">
        </a>
    </div>
<div class="label-product label_new">New</div>        
    <div class="product-caption">
        <h4 class="product-name"><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title ?></a></h4>
        <div class="price-box">
            <span class="new-price">$<?php echo number_format($product->price); ?></span>
            <!-- <span class="old-price">$49.00</span> -->
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
<div class="tab-pane active" id="grid">
      <div class="shop-product-wrap">&nbsp;&nbsp;
        <h4 class="title">Vacheron Constantin</h4>
    <div class="row">
        <?php $products = $this->product->show_product_by(2); ?> 
          <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6">
    <!-- single-product-area start -->
    <div class="single-product-area mt-30">
        <div class="product-thumb">
        <a href="<?php echo '/product/' . $product->slug; ?>">
            <img class="primary-image" src="/uploads/<?php echo $product->product_img; ?>" alt="" width="210" height="310">
        </a>
    </div>
<div class="label-product label_new">New</div>        
    <div class="product-caption">
        <h4 class="product-name"><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title ?></a></h4>
        <div class="price-box">
            <span class="new-price">$<?php echo number_format($product->price); ?></span>
            <!-- <span class="old-price">$49.00</span> -->
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
<div class="tab-pane active" id="grid">
      <div class="shop-product-wrap">&nbsp;&nbsp;
        <h4 class="title">Audemars Piguet</h4>
    <div class="row">
        <?php $products = $this->product->show_product_by(3); ?> 
          <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6">
    <!-- single-product-area start -->
    <div class="single-product-area mt-30">
        <div class="product-thumb">
        <a href="<?php echo '/product/' . $product->slug; ?>">
            <img class="primary-image" src="/uploads/<?php echo $product->product_img; ?>" alt="" width="210" height="310">
        </a>
    </div>
<div class="label-product label_new">New</div>        
    <div class="product-caption">
        <h4 class="product-name"><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title ?></a></h4>
        <div class="price-box">
            <span class="new-price">$<?php echo number_format($product->price); ?></span>
            <!-- <span class="old-price">$49.00</span> -->
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
<div class="tab-pane active" id="grid">
      <div class="shop-product-wrap">&nbsp;&nbsp;
        <h4 class="title">Blancpain</h4>
    <div class="row">
        <?php $products = $this->product->show_product_by(4); ?> 
          <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6">
    <!-- single-product-area start -->
    <div class="single-product-area mt-30">
        <div class="product-thumb">
        <a href="<?php echo '/product/' . $product->slug; ?>">
            <img class="primary-image" src="/uploads/<?php echo $product->product_img; ?>" alt="" width="210" height="310">
        </a>
    </div>
<div class="label-product label_new">New</div>        
    <div class="product-caption">
        <h4 class="product-name"><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title ?></a></h4>
        <div class="price-box">
            <span class="new-price">$<?php echo number_format($product->price); ?></span>
            <!-- <span class="old-price">$49.00</span> -->
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
<div class="tab-pane active" id="grid">
      <div class="shop-product-wrap">&nbsp;&nbsp;
        <h4 class="title">Ulysse Nardin</h4>
    <div class="row">
        <?php $products = $this->product->show_product_by(5); ?> 
          <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6">
    <!-- single-product-area start -->
    <div class="single-product-area mt-30">
        <div class="product-thumb">
        <a href="<?php echo '/product/' . $product->slug; ?>">
            <img class="primary-image" src="/uploads/<?php echo $product->product_img; ?>" alt="" width="210" height="310">
        </a>
    </div>
<div class="label-product label_new">New</div>        
    <div class="product-caption">
        <h4 class="product-name"><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title ?></a></h4>
        <div class="price-box">
            <span class="new-price">$<?php echo number_format($product->price); ?></span>
            <!-- <span class="old-price">$49.00</span> -->
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
<div class="tab-pane" id="list">
    <div class="shop-product-list-wrap">
        <div class="row product-layout-list mt-30">
            <div class="col-lg-3 col-md-3">
                <!-- single-product-wrap start -->
                <div class="single-product">
                    <div class="product-image">
                        <a href="product-details.html"><img src="assets/images/product/product-01.png" alt="Produce Images"></a>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="product-content-list text-left">
                   
                    <h4><a href="product-details.html" class="product-name">Auctor gravida enim</a></h4>
                    <div class="price-box">
                        <span class="new-price">$99.00</span>
                        <span class="old-price">$110.00</span>
                    </div>

                    <div class="product-rating">
                        <ul class="d-flex">
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                        </ul>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="block2">
                    <ul class="stock-cont">
                        <li class="product-sku">Sku: <span>P006</span></li>
                        <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                    </ul>
                    <div class="product-button">
                       
                        <ul class="actions">
                            <li class="add-to-wishlist">
                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                            </li>
                        </ul>
                        <div class="add-to-cart">
                            <div class="product-button-action">
                                <a href="#" class="add-to-cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-product-list-wrap">
        <div class="row product-layout-list mt-30">
            <div class="col-lg-3 col-md-3">
                <!-- single-product-wrap start -->
                <div class="single-product">
                    <div class="product-image">
                        <a href="product-details.html"><img src="assets/images/product/product-02.png" alt="Produce Images"></a>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="product-content-list text-left">
                   
                    <h4><a href="product-details.html" class="product-name">Auctor gravida enim</a></h4>
                    <div class="price-box">
                        <span class="new-price">$99.00</span>
                        <span class="old-price">$110.00</span>
                    </div>

                    <div class="product-rating">
                        <ul class="d-flex">
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                        </ul>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="block2">
                    <ul class="stock-cont">
                        <li class="product-sku">Sku: <span>P006</span></li>
                        <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                    </ul>
                    <div class="product-button">
                       
                        <ul class="actions">
                            <li class="add-to-wishlist">
                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                            </li>
                        </ul>
                        <div class="add-to-cart">
                            <div class="product-button-action">
                                <a href="#" class="add-to-cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-layout-list mt-30">
            <div class="col-lg-3 col-md-3">
                <!-- single-product-wrap start -->
                <div class="single-product">
                    <div class="product-image">
                        <a href="product-details.html"><img src="assets/images/product/product-03.png" alt="Produce Images"></a>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="product-content-list text-left">
                   
                    <h4><a href="product-details.html" class="product-name">Auctor gravida enim</a></h4>
                    <div class="price-box">
                        <span class="new-price">$99.00</span>
                        <span class="old-price">$110.00</span>
                    </div>

                    <div class="product-rating">
                        <ul class="d-flex">
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                        </ul>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="block2">
                    <ul class="stock-cont">
                        <li class="product-sku">Sku: <span>P006</span></li>
                        <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                    </ul>
                    <div class="product-button">
                       
                        <ul class="actions">
                            <li class="add-to-wishlist">
                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                            </li>
                        </ul>
                        <div class="add-to-cart">
                            <div class="product-button-action">
                                <a href="#" class="add-to-cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-layout-list mt-30">
            <div class="col-lg-3 col-md-3">
                <!-- single-product-wrap start -->
                <div class="single-product">
                    <div class="product-image">
                        <a href="product-details.html"><img src="assets/images/product/product-04.png" alt="Produce Images"></a>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="product-content-list text-left">
                   
                    <h4><a href="product-details.html" class="product-name">Auctor gravida enim</a></h4>
                    <div class="price-box">
                        <span class="new-price">$99.00</span>
                        <span class="old-price">$110.00</span>
                    </div>

                    <div class="product-rating">
                        <ul class="d-flex">
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li><a href="#"><i class="icon-star"></i></a></li>
                            <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                        </ul>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="block2">
                    <ul class="stock-cont">
                        <li class="product-sku">Sku: <span>P006</span></li>
                        <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                    </ul>
                    <div class="product-button">
                       
                        <ul class="actions">
                            <li class="add-to-wishlist">
                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                            </li>
                        </ul>
                        <div class="add-to-cart">
                            <div class="product-button-action">
                                <a href="#" class="add-to-cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>  
                    <!-- shop-products-wrap end -->

                    <!-- paginatoin-area start -->
<!--                 <div class="paginatoin-area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="pagination-box">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a class="Next" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                    <!-- paginatoin-area end -->
                </div>
                <!-- shop-product-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->
<?php $this->load->view('layouts/footer'); ?>

