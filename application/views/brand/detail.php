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
                <ul class="nav shop-item-filter-list">
                    <h4>Product Details</h4>
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
<div class="tab-pane-active" id="list">
          <h3 class="title"><?php echo $title; ?></h3>

	<?php if ($products) : ?>
		<?php foreach ($products as $product): ?>
			
    <div class="shop-product-list-wrap">
        <div class="row product-layout-list mt-30">
            <div class="col-lg-3 col-md-3">
                <!-- single-product-wrap start -->
                <div class="single-product">
                    <div class="product-image">
                        <a href="<?php echo '/product/' . $product->slug; ?>"><img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" class="img-responsive"></a>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="product-content-list text-left">
                   
                    <h4><a href="<?php echo '/product/' . $product->slug; ?>" class="product-name"><?php echo $product->title; ?></a></h4>
                    <div class="price-box">
                        <span class="new-price">$<?php echo number_format($product->price); ?></span>
                    </div>

                    <p style="width: 600px;"><?php echo  substr($product->description, 0 , 150); ?>...</p>
                </div>
            </div>
        </div>
    </div>
		<?php endforeach ?>
		<?php else: ?>
              <div class="alert alert-danger">No record founds!</div>
              <?php endif ?>
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

