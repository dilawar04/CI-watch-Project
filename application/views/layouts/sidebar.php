<div class="main-content-wrap shop-page section-ptb">
<div class="container">
<div class="row">
<div class="col-lg-3 order-lg-1 order-2">
<!-- shop-sidebar-wrap start -->
<div class="shop-sidebar-wrap">
<div class="shop-box-area">

    <!--sidebar-categores-box start  -->
    <div class="sidebar-categores-box shop-sidebar mb-30">
        <h4 class="title">Product categories</h4>
        <!-- category-sub-menu start -->
        <div class="category-sub-menu">
            <ul>
              <?php $brands = $this->brand->show_all(); ?>
      <?php if ($brands) : ?>
      <?php foreach ($brands as $brand) : ?>
                <li class="has-sub"><a href="<?php echo '/brand/' . $brand->slug; ?>"><?php echo $brand->title; ?></a></li> 
              <?php endforeach ?>
              <?php else: ?>
                <div class="alert alert-danger">No record founds!</div>
              <?php endif ?>
            </ul>
        </div>
        <!-- category-sub-menu end -->
    </div>
    <!--sidebar-categores-box end  -->

    <!-- shop-sidebar start -->
    <!-- <div class="shop-sidebar mb-30">
        <h4 class="title">Filter by Color</h4>

        <ul class="category-widget-list">
            <li><a href="#">Red (1)</a></li>
            <li><a href="#">White (1)</a></li>
        </ul>

    </div> -->
    <!-- shop-sidebar end -->

    <!-- shop-sidebar start -->
    <div class="shop-sidebar mb-30">
        <h4 class="title">Latest</h4>

        <ul class="category-widget-list">
            <?php $latest_products = $this->product->latest_products(); ?>
            <?php if ($latest_products): ?>
            <?php foreach ($latest_products as $latest_product): ?>
            <li><a href="<?php echo '/product/' . $latest_product->slug; ?>"><img src="/uploads/<?php echo $latest_product->product_img; ?>" width="50" height="50" alt="<?php echo $latest_product->title; ?>" title="<?php echo $brand->title; ?>" class="img-responsive" /><span class="height"><?php echo  substr($latest_product->title, 0 , 30); ?></span></a></li>
            <li><a href="<?php echo '/product/' . $latest_product->slug; ?>" class="height">$<?php echo number_format($latest_product->price); ?></a></li>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No record found!</div>
            <?php endif ?>
        </ul>

    </div>
    <!-- shop-sidebar end -->

    <!-- shop-sidebar start -->
    <div class="shop-sidebar mb-30">
        <h4 class="title">Most Viewed</h4>

        <ul class="category-widget-list">
            <?php $most_viewed = $this->product->most_viewed(); ?>
            <?php if ($most_viewed): ?>
            <?php foreach ($most_viewed as $most_view): ?>
            <li><a href="<?php echo '/product/' . $most_view->slug; ?>"><img src="/uploads/<?php echo $most_view->product_img; ?>" width="50" height="50" alt="<?php echo $most_view->title; ?>" title="watch" class="img-responsive" /><?php echo  substr($most_view->title, 0 , 30); ?></a></li>
            <li><a href="<?php echo '/product/' . $latest_product->slug; ?>">$<?php echo number_format($most_view->price); ?></a></li>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No record found!</div>
            <?php endif ?>
        </ul>

    </div>
    <!-- shop-sidebar end -->

    <!-- shop-sidebar start -->
    <div class="shop-sidebar mb-30">
        <h4 class="title">Prices</h4>

        <ul class="category-widget-list">
                   <?php 
              $prices = [
                '50-100' => '$50 To $100',
                '100-200' => '$100 To $200',
                '200-500' => '$200 To $500',
                '500-1000' => '$500 To $1000',
                '1000-1500' => '$1,000 To $1,500',
                '1500-2000' => '$1,500 To $2,000',
                '2000-3000' => '$2,000 To $3,000',
              ];
             ?> 
            <?php foreach ($prices as $key => $price): ?>     
            <li><a href="/product?price=<?php echo $key ?>"><?php echo $price; ?></a></li>
            <?php endforeach ?>
        </ul>

    </div>
    <!-- shop-sidebar end -->

    <!-- shop-sidebar start -->
    <div class="shop-sidebar mb-30">
        <h4 class="title">New Arrivals</h4>

        <ul class="category-widget-list">
            <?php 
            $items = [
              'Automatic' => 'All Automatic watches',
              'White Gold' => 'All 18kt White Golds',
              'Annual Calendar' => 'All Annual Calendar',
              'Smart Watch' => 'All Smart watch',
              'Skeleton' => 'All Skeleton Watch',
            ];
           ?>
            <?php foreach ($items as $key => $item): ?>
            <li><a href="/product?type=<?php echo $key ?>"><?php echo $item; ?></a></li>
            <?php endforeach ?>

        </ul>

    </div>
    <!-- shop-sidebar end -->
</div>
</div>
<!-- shop-sidebar-wrap end -->
</div>
<div class="col-lg-9 order-lg-2 order-1">

<!-- shop-product-wrapper start -->
<div class="shop-product-wrapper">

<!-- starttablist -->
<!--  -->
<!-- endtablist -->

<!-- shop-products-wrap start -->
