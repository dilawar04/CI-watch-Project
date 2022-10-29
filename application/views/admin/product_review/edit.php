    <div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2><?php echo $title; ?></h2>   
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <?php 
        $attributes = ['name' => 'formEdit', 'id' => 'formEdit'];
        echo form_open('',$attributes); 
      ?>
        <div class="col-md-14">
              <div class="grid simple">
                <div class="grid-body no-border">
            <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="create_date" id="create_date" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $product_review->create_date; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="name" id="name" type="text"  class="form-control" placeholder="name" value="<?php echo $product_review->name; ?>"> 
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="email" id="email" type="text"  class="form-control" placeholder="email" value="<?php echo $product_review->email; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="website" id="website" type="text"  class="form-control" placeholder="website" value="<?php echo $product_review->website; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="comment" id="comment" rows="8" class="form-control" placeholder="comment"><?php echo $product_review->comment; ?></textarea>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
          <a href="/admin/product_review/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
              </div>
        </div>
        <?php echo form_close(); ?>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>


